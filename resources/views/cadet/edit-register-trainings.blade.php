@extends('layouts.app')

@section('pageTitle', 'Edit Date')

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
                          <h4>Edit Date</h4>
                          <span>Click on the calendar button to update the date and click on ‘Update’ after updating in the form.</span>
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
                      <li class="breadcrumb-item"><a href="">Trainings</a>
                      </li>
                      <li class="breadcrumb-item"><a href="{{ route('register-trainings.index') }}">Manage Registration</a>
                      </li>
                      <li class="breadcrumb-item"><a href="">Edit</a>
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
        <b>Start Date: {{\Carbon\Carbon::parse($training->startDate)->format('d/m/Y')}} -
        End Date: {{\Carbon\Carbon::parse($training->endDate)->format('d/m/Y')}}</b>
        <div class="card-header-right">                                                             
            <i class="icofont icofont-spinner-alt-5"></i>                                                         
        </div>
    </div>
    <div class="card-block tooltip-icon button-list">
      <form action="{{ route('register-trainings.update', $registration->id) }}" method="POST">
      @method('PUT')  
      @csrf
      <div class="input-group">
        <span class="input-group-addon" id="dateIn"><i class="icofont icofont-user-alt-3"></i></span>
        <input type="date" class="form-control" title="Enter Date In" data-toggle="tooltip" name="dateIn" value="{{$registration->dateIn}}" required>
      </div>
      <div class="input-group">
        <span class="input-group-addon" id="dateOut"><i class="icofont icofont-user-alt-3"></i></span>
        <input type="date" class="form-control" title="Enter Date Out" data-toggle="tooltip" name="dateOut" value="{{$registration->dateOut}}" required>
      </div>
      <button type="submit" class="btn btn-primary waves-effect waves-light m-r-20" data-toggle="tooltip" data-placement="right">Update</button>
    </div>
  </form>
  </div>
</div>

@endsection