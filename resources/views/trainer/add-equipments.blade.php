@extends('layouts.app')

@section('pageTitle', 'Add Equipment')

@section('content')

<!-- Main-body start -->
<div class="main-body">
  <div class="page-wrapper">
      <!-- Page-header start -->
      <div class="page-header card">
          <div class="row align-items-end">
              <div class="col-lg-8">
                  <div class="page-header-title">
                      <i class="ti-medall bg-c-dark-green card1-icon"></i>
                      <div class="d-inline">
                          <h4>Add Equipment</h4>
                          <span>Fill up the form and click on ‘Submit’ after filling in the form.</span>
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
                    </li>
                    <li class="breadcrumb-item"><a href="">Add Equipment</a>
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
          <h4><strong>Add Equipments</strong></h4>
          <div class="card-header-right">                                                             
              <i class="icofont icofont-spinner-alt-5"></i>                                                         
          </div>
      </div>
      <div class="card-block tooltip-icon button-list">
        <form action=" {{ route('equipments.store') }} " method="POST">
          @csrf
        <div class="input-group">
          <span class="input-group-addon"><i class="ti-user"></i></span>
          <input type="text" class="form-control" placeholder="Enter Equipment Name" title="Enter Equipment Name" data-toggle="tooltip" name="equipName" required>
        </div>  
        <div class="input-group">
          <span class="input-group-addon" id="quantity"><i class="icofont icofont-user-alt-3"></i></span>
          <input type="number" class="form-control" placeholder="Quantity" title="Quantity" data-toggle="tooltip" name="quantity" required>
        </div>
        <button type="Submit" class="btn btn-primary waves-effect waves-light m-r-20" data-toggle="tooltip" data-placement="right">Submit
        </button>
        </form>
      </div>
    </div>
  </div>

@endsection