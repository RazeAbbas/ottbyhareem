<div class="modal-content">
    <div class="modal-header text-white" style="background: #0984e3">
        <h5 class="modal-title" id="exampleModalLabel">
        {{@$page_title}}
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true" class="text-white">
            ×
        </span>
        </button>
    </div>
    <form action="{{$action}}" method="post" data-action="make_ajax" data-action-after="reload">
        @csrf
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="label" class="control-label">Office Name</label>
                        <input type='text' name="office_name" id="label" class="form-control" required="" value="{{$row->office_name}}"  />
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                    <label for="label" class="control-label">Phone No.</label>
                        <input type='text' name="office_phone" id="label" class="form-control" required="" value="{{$row->office_phone}}"  />
                    </div>
                </div>

                
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="description" class="control-label">Office Address</label>
                        <textarea  name="office_address" id="description" class="form-control">{{$row->office_address}}</textarea>
                    </div>
                </div>  
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-danger m-btn m-btn--icon" id="add_oh_period"><span><i class="la la-check"></i><span>Update</span></span></button>
            <button type="button" class="btn btn-secondary m-btn m-btn--icon" data-dismiss="modal"><span>Close</span></button>
        </div>
    </form>
</div> 