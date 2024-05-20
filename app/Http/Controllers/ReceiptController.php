<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Models\Receipts;

class ReceiptController extends Controller
{
    private $type     =  "receipts";
    private $singular =  "Receipts";
    private $plural   =  "Receipts";
    private $view     =  "receipts.";
    private $action   =  "/dashboard/receipts";
    private $db_key   =  "id";
    private $perpage = 5;
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
        $records   = Receipts::where("office_id","=",Auth::user()->office);
        $records   = $this->search($records,$request,$data)->orderBy('id','DESC');
        /*
        GET TOTAL RECORD BEFORE BEFORE PAGINATE
        */
        $data['count']      = $records->count();
        /*
        PAGINATE THE RECORDS
        */
        $records            = $records->paginate($this->perpage);
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
            $data['office_id'] = Auth::user()->office;
            $data['company_id'] = Auth::user()->company;
            $data['created_user'] = Auth::id();
            
            // Check if a receipt with the same name already exists
            $isDuplicate = Receipts::where('SerialNumber', $data['SerialNumber'])->exists();
            if ($isDuplicate) {
                $response = ['flag' => false, 'msg' => $this->singular.' with the same name already exists.'];
                return response()->json($response);
            }
            
            // If not a duplicate, create the receipt
            Receipts::create($data);
            
            $response = ['flag' => true, 'msg' => $this->singular.' has been added successfully.', 'action' => 'reload'];
            return response()->json($response);
        }
        
        $data = [
            "page_title" => "Add ".$this->singular,
            "page_heading" => "Add ".$this->singular,
            "breadcrumbs" => ["dashboard" => "Dashboard", "#" => $this->plural." List"],
            "action" => url($this->action.'/create')
        ];
        return view($this->view.'create', $data);
    }
    
    public function update(Request $request,$id = NULL)
    {
        if($request->method() == "POST"){
            $data = $request->all();
            $this->cleanData($data);
            
            if(isset($data['SerialNumber'])) {
                $is_save = Receipts::where('SerialNumber','=',
                $data['SerialNumber'])
                ->where($this->db_key,'!=',
                $id)
                ->count();
                if($is_save > 0)    {
                    $response = array('flag'=>false,'msg'=>$this->singular.' with name already exist.');
                    echo json_encode($response); return;
                }
            }
            $obj = Receipts::find($id);
            $obj->update($data);
            $response = array('flag'=>true,'msg'=>$this->singular.' is updated sucessfully.','action'=>'reload');
            echo json_encode($response); return;
        }
        $data   = array(
            "page_title"=>"Edit ".$this->singular,
            "page_heading"=>"Edit ".$this->singular,
            "breadcrumbs"=>array("dashboard"=>"Dashboard","#"=>$this->plural." List"),
            "action"=> url($this->action.'/edit/'.$id),
            "row" => Receipts::find($id)
        );
        // dd($data);
        return view($this->view.'edit',$data);
    }
    public function delete($id) {
        Receipts::destroy($id);
        $response = array('flag'=>true,'msg'=>$this->singular.' has been deleted.');
        echo json_encode($response); return;
    }
    public function _bulk(Request $request) {
        $data = $request->all();
        //Categories::destroy($id);
        $response = array('flag'=>true,'msg'=>$this->singular.' has been deleted.','action'=>'reload');
        echo json_encode($response); return;
    }
    
    

    public function print(Request $request,$id = NULL){
        $data['receipts'] = Receipts::find($id)->toArray();
        // dd($data);
        return view($this->view.'.receipt',$data);
    }
}
