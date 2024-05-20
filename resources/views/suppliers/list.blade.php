@extends('layouts.app')
@section('content')

<div class="col">
  <div>
    <h4 class="text-center p-3">{{$page_title}}</h4>
  </div>
  
  <div>
    <a href="#data_modal" data-toggle="modal" data-url="{{url($module['action'].'/create')}}" data-action="data_modal" class="btn btn-danger" style="margin-bottom: 20px; float: right;">+ Add Area</a>
  </div>
  
  <div class="single-table">
    <div class="table-responsive">
      <table class="table">
        <thead class="text-uppercase text-white" style="background: #0984e3">
          <tr>
            <th scope="col"># ({{$count}})</th>
            <th scope="col">Supplier</th>
            <th scope="col">Phone</th>
            <th scope="col">Bank</th>
            <th scope="col">Account</th>
            <th scope="col">City</th>
            <th scope="col">Country</th>
            <th scope="col">Address</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @if($list['data'])
          @foreach($list['data'] as $key=>$val)
          <tr>
            <td scope="row">{{$sindex++}}</th>
              <td>{{$val['name']}}</td>
              <td>{{$val['phone']}}</td>
              <td>{{App\Models\Supplier::find($val['id'])->getBank->name}}</td>
              <td>{{$val['account']}}</td>
              <td>{{$val['city']}}</td>
              <td>{{$val['country']}}</td>
              <td>{{$val['address']}}</td>
              <td>
                <div class="dropdown">
                  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    More Actions
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a data-action="delete_record"  href="javascript:void(0);" data-url="{{url($module['action'].'/delete/'.$val[$module['db_key']])}}" class="dropdown-item" >Delete</a>
                    <a href="#data_modal" data-toggle="modal"  data-url="{{url($module['action'].'/edit/'.$val[$module['db_key']])}}" data-action="data_modal" class="dropdown-item"> Edit </a>
                    <a href="#data_modal" data-toggle="modal"  data-url="{{url('dashboard/suppliers/quickPayments/create/'.$val[$module['db_key']])}}" data-action="data_modal" class="dropdown-item"> Quick Payment </a>
                    <a href="{{url('dashboard/suppliers/quickPayments/list/'.$val[$module['db_key']])}}" class="dropdown-item">View Payments</a>
                    <a href="{{ url('dashboard/suppliers/ledger/'.$val[$module['db_key']]) }}" class="dropdown-item">View Ledger</a>
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
        @include('paging')
      </div>
    </div>
  </div>
  @endsection