@extends('layouts.app')

@section('pageTitle', 'Update Equipments')

@section('content')

<!-- Main-body start -->
<div class="main-body">
  <div class="page-wrapper">
      <!-- Page-header start -->
      <div class="page-header card">
          <div class="row align-items-end">
              <div class="col-lg-8">
                  <div class="page-header-title">
                    <i class="ti-anchor bg-c-dark-green card1-icon"></i>
                      <div class="d-inline">
                          <h4>Update Equipments</h4>
                          <span>Update the quantity and click on ‘Submit’ after updating in the form.</span>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="page-header-breadcrumb">
                     <ul class="breadcrumb-title">
                      <li class="breadcrumb-item">
                          <a href="/home">
                              <i class="icofont icofont-home"></i>
                          </a>
                      </li>
                      <li class="breadcrumb-item"><a href="{{ route('equipments.index') }}">Manage Equipments</a>
                      </li>
                      <li class="breadcrumb-item"><a href="">Update Equipments</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
  <!-- Page-header end -->

<div class="card">
    <div class="col-sm-5">
      <div class="card-header">
          <h4>Equipment Information Form</h4>
          <div class="card-header-right">                                                             
              <i class="icofont icofont-spinner-alt-5"></i>                                                         
          </div>
      </div>
      <div class="card-block tooltip-icon button-list">
        <form action="{{ route('equipments.update', $equipment->id) }}" method="POST">
            @method('PUT')
            @csrf
          <div class="input-group">
            <span class="input-group-addon" id="quantity"><i class="icofont icofont-user-alt-3"></i></span>
            <input type="text" class="form-control" name="quantity" value="{{$equipment->equipName}}" readonly>
          </div>
        <div class="input-group">
          <span class="input-group-addon" id="quantity"><i class="icofont icofont-user-alt-3"></i></span>
          <input type="number" class="form-control" placeholder="Quantity" title="Quantity" data-toggle="tooltip" name="quantity" value="{{$equipment->quantity}}" required>
        </div>
        <button type="Submit" class="btn btn-primary waves-effect waves-light m-r-20" data-toggle="tooltip" data-placement="right">Submit
        </button>
        </form>
      </div>
    </div>
  </div>

@endsection