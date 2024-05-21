<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Client;
use Str;

class ClientImagesController extends Controller
{
    private $type     =  "clients";
    private $singular =  "Clients";
    private $plural   =  "Clients";
    private $view     =  "clients.";
    private $action   =  "/dashboard/clients";
    private $db_key   =  "id";
    private $perpage  =   7000;
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
    
    public function search($records,$request,&$data) {
        /*
        SET DEFAULT VALUES
        */
        if($request->perpage)
        $this->perpage  =   $request->perpage;
        $data['sindex']     = ($request->page != NULL)?($this->perpage*$request->page - $this->perpage+1):1;
        /*
        FILTER THE DATA
        */
        $params = [];
        if($request->is_active) {
            $params['is_active'] = $request->is_active;
            $records = $records->where("is_active",$params['is_active']);
        }
        $data['request'] = $params;
        return $records;    
    }
    public function list(Request $request)
    {
        $data   = array(
            "page_title"=>$this->plural." List",
            "page_heading"=>$this->plural.' List',
            "breadcrumbs"=>array("#"=>$this->plural." List"),
            "module"=>array('type'=>$this->type,'singular'=>$this->singular,'plural'=>$this->plural,'view'=>$this->view,'action'=>$this->action,'db_key'=>$this->db_key)
        );
        
        
        /*
        GET RECORDS
        */
        $records   = Client::where("office_id","=",Auth::user()->office);
        $records   = $this->search($records,$request,$data)->orderBy('id','DESC');
        /*
        GET TOTAL RECORD BEFORE BEFORE PAGINATE
        */
        $data['count']  = $records->count();
        /*
        PAGINATE THE RECORDS
        */
        $records = $records->paginate($this->perpage);
        $records->appends($request->all())->links();
        $links = $records->links();
        
        $records = $records->toArray();
        $records['pagination'] = $links;
        /*
        ASSIGN DATA FOR VIEW
        */
        $data['list']   =   $records;
        //dd($data);
        return view($this->view.'list',$data);
    }
    public function cleanData(&$data) {
        $unset = ['ConfirmPassword','q','_token'];
        foreach ($unset as $value) {
            if(array_key_exists ($value,$data))  {
                unset($data[$value]);
            }
        }
    }
    public function create(Request $request)
    {
        if ($request->isMethod('POST')) {
            $data = $request->all();
            $this->cleanData($data);
            if ($request->hasFile('client_img')) {
                $sfile = $request->file('client_img');
                $sfilename = $sfile->store('public/uploads/images'); 
                // Fix the path to match the correct URL structure
                $data['client_img'] = 'uploads/images/' . basename($sfilename);
            }
            $data["office_id"] = Auth::user()->office;
            $data["company_id"] = Auth::user()->company;
            $data["created_user"] = Auth::id();
            $Areas = new Client;
            $Areas->insert($data);
            $response = array('flag' => true, 'msg' => $this->singular . ' is added successfully.', 'action' => 'reload');
            echo json_encode($response);
            return;
        }
        
        $data = array(
            "page_title" => "Add " . $this->singular,
            "page_heading" => "Add " . $this->singular,
            "breadcrumbs" => array("dashboard" => "Dashboard", "#" => $this->plural . " List"),
            "action" => url($this->action . '/create')
        );
        return view($this->view . 'create', $data);
    }
    
    public function update(Request $request, $id = NULL)
    {
        if ($request->method() == "POST") {
            $data = $request->all();
            $this->cleanData($data);
            
            // Find the existing client record
            $client = Client::find($id);
            
            // Handle the image upload
            if ($request->hasFile('client_img')) {
                $sfile = $request->file('client_img');
                $sfilename = $sfile->store('public/uploads/images'); 
                // Update the client_img path
                $data['client_img'] = 'uploads/images/' . basename($sfilename);
            }
            
            // Update the client record
            $client->update($data);
            
            // Respond with success message
            $response = array('flag' => true, 'msg' => $this->singular . ' is updated successfully.', 'action' => 'reload');
            echo json_encode($response);
            return;
        }
        
        // Prepare data for the edit view
        $data = array(
            "page_title" => "Edit " . $this->singular,
            "page_heading" => "Edit " . $this->singular,
            "breadcrumbs" => array("dashboard" => "Dashboard", "#" => $this->plural . " List"),
            "action" => url($this->action . '/edit/' . $id),
            "row" => Client::find($id)
        );
        
        return view($this->view . 'edit', $data);
    }
    
    public function delete($id) {
        Client::destroy($id);
        $response = array('flag'=>true,'msg'=>$this->singular.' has been deleted.');
        echo json_encode($response); return;
    }
    public function _bulk(Request $request) {
        $data = $request->all();
        //Categories::destroy($id);
        $response = array('flag'=>true,'msg'=>$this->singular.' has been deleted.','action'=>'reload');
        echo json_encode($response); return;
    }
    
}
