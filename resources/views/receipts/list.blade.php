@extends('layouts.app')
@section('content')

<div class="col">
  <div class="card">
    <div class="card-header">
      <div class="row">
        <div class="col-md-6">
          <h2>{{$page_heading}}</h2>
        </div>
        <div class="col-md-6">
        <a href="{{url($module['action'].'/create')}}"  class="btn btn-danger text-white" style="margin-bottom: 20px; float: right;">+ Create Receipt</a>
        <a class="btn btn-danger text-white mr-2" id="printButton" style="margin-bottom: 20px; float: right;">Print</a>
        </div>
      </div>
    </div>
    <div class="card-body">
    <div class="single-table">
      <div class="table-responsive" id="printableArea">
        <table class="table table-bordered" id="myTable" class="display" width="100%" cellspacing="0">
          <thead class="text-uppercase text-white" style="background: #0984e3">
            <tr>
              <th scope="col"># ({{$count}})</th>
              <th scope="col">Issue Date</th>
              <th scope="col">Due Date</th>
              <th scope="col">Serial Number</th>
              <th scope="col">Debtors</th>
              <th scope="col">Particular</th>
              <th scope="col">Amount</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @if($list['data'])
            @foreach($list['data'] as $key=>$val)
            <tr>
              <td scope="row">{{$sindex++}}</th>
                <td>{{$val['IssueDate']}}</td>
                <td>{{$val['DueDate']}}</td>
                <td>{{$val['SerialNumber']}}</td>
                <td>{{$val['FranchiseName']}}</td>
                <td>{{$val['Particular']}}</td>
                <td>{{$val['Amount']}}</td>
                <td>
                  <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      More Actions
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a data-action="delete_record"  href="javascript:void(0);" data-url="{{url($module['action'].'/delete/'.$val[$module['db_key']])}}" class="dropdown-item">Delete</a>
                      <a href="{{url($module['action'].'/edit/'.$val[$module['db_key']])}}" class="dropdown-item"> Edit </a>
                      <a href="{{ route('receipts.print', ['id' => $val[$module['db_key']]]) }}" class="dropdown-item"> Print Invoice </a>
                    </div>
                  </div>
                </td>
              </tr>
              @endforeach
              @else
              <tr>
                <td colspan="8" align="center">
                  <h5 style="text-align: center;"><strong>No {{$module['singular']}} found !</strong> <a href="#data_modal" data-toggle="modal" data-url="{{url($module['action'].'/create')}}" data-action="data_modal">+Add New</a></h5>
                </td>
              </tr>
              @endif
              
            </tbody>
          </table>
        </div>
      </div>
      
        @include('paging')
      </div>
      
    </div>
    
    </div>
   
    @endsection