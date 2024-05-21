<div class="modal-content">
    <div class="modal-header text-white" style="background: #0984e3">
        <h5 class="modal-title" id="exampleModalLabel">
            {{@$page_title}}
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="text-white">×</span>
        </button>
    </div>
    <form action="{{$action}}" method="post" data-action="make_ajax" data-action-after="reload" enctype="multipart/form-data">
    @csrf
    <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="client_name" class="control-label" required="">Client Name</label>
                    <input type="text" name="client_name" id="client_name" class="form-control" required="" value="{{$row->client_name}}"/>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="client_img" class="control-label">Upload Image</label>
                    <input type="file" name="client_img" id="client_img" class="form-control"/>
                    @if($row->client_img)
                        <img src="{{ asset('storage/' . $row->client_img) }}" height="100" width="100" alt="Current Image"/>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-danger m-btn m-btn--icon text-white" id="add_oh_period">
            <span><i class="la la-check"></i><span>Update</span></span>
        </button>
        <button type="button" class="btn btn-secondary m-btn m-btn--icon" data-dismiss="modal"><span>Close</span></button>
    </div>
</form>

</div>
