@extends('layouts.app')
@section('content')
<div class="col">
    <div class="card-content">
        <div class="card-header text-white" style="background: #0984e3">
            <h5 class="card-title" id="exampleModalLabel">
            {{@$page_title}}
            </h5>
            {{-- <div class="justify-content-end d-flex">
                <a href="{{url('dashboard/receipts')}}"  class="btn btn-success">View Receipt</a>
            </div> --}}
            <i class="fa fa-money" aria-hidden="true"></i>
        </div>
        <form action="{{$action}}" method="post" data-action="make_ajax" data-action-after="reload" >
            @csrf
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="label" class="control-label">Isseu Date</label>
                            <input type="date" name="IssueDate" id="label" value="{{$row['IssueDate']}}" class="form-control" required=""/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="label" class="control-label">Due Date</label>
                            <input type="date" name="DueDate" id="label" value="{{$row['DueDate']}}" class="form-control" required=""/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="label" class="control-label">Serial Number</label>
                            <input type="text" name="SerialNumber" id="label" class="form-control" value="{{$row['SerialNumber']}}" required=""/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="label" class="control-label">Franchise Name</label>
                            <input type="text" name="FranchiseName" id="label" class="form-control" value="{{$row['FranchiseName']}}" required=""/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="label" class="control-label">Particular</label>
                            <input type="text" name="Particular" id="label" class="form-control" value="{{$row['Particular']}}" required=""/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="label" class="control-label">Amount</label>
                            <input type="number" name="Amount" id="label" class="form-control" value="{{$row['Amount']}}" required=""/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn text-white" style="background: #0984e3">Update</button>
            </div>
        </form>
    </div> 
</div>
@endsection