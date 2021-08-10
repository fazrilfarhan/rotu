@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/foundation-datepicker.min.css') }}">
@endsection

@section('pageTitle', 'Add Trainings')

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
                          <h4>Add Training</h4>
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
                      <li class="breadcrumb-item"><a href="">Trainings</a>
                      </li>
                      </li>
                      <li class="breadcrumb-item"><a href="{{ route('trainings.create') }}">Add Training</a>
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
        <h4>Training Information Form</h4>
        <div class="card-header-right">                                                             
            <i class="icofont icofont-spinner-alt-5"></i>                                                         
        </div>
    </div>
    <div class="card-block tooltip-icon button-list">
      <form action=" {{ route('trainings.store') }} " method="POST">
        @csrf
        <div class="input-group">
          <span class="input-group-addon"><i class="ti-server"></i></span>
          <select name="level" class="form-control">
            <option value="">Level</option>
            <option value="JUNIOR">JUNIOR</option>
            <option value="INTERMEDIATE">INTERMEDIATE</option>
            <option value="SENIOR">SENIOR</option>
          </select>
        </div>  
        <div class="input-group">
            <span class="input-group-addon"><i class="ti-clipboard"></i></span>
            <select name="trainingName" class="form-control">
              <option value="">Training Name</option>
              <option value="LATIHAN TEMPATAN I">LATIHAN TEMPATAN I</option>
              <option value="LATIHAN TEMPATAN II">LATIHAN TEMPATAN II</option>
              <option value="LATIHAN TEMPATAN III">LATIHAN TEMPATAN III</option>
              <option value="LATIHAN TEMPATAN IV">LATIHAN TEMPATAN IV</option>
              <option value="LATIHAN TEMPATAN V">LATIHAN TEMPATAN V</option>
              <option value="LATIHAN BERTERUSAN">LATIHAN BERTERUSAN</option>
              <option value="LATIHAN KEM TAHUNAN">LATIHAN KEM TAHUNAN</option>
            </select>
        </div>
        <div class="input-group">
          <span class="input-group-addon" id="year"><i class="ti-agenda"></i></span>
          <input type="year" class="form-control" placeholder="Enter Year" title="Enter Year" data-toggle="tooltip" name="year" required>
        </div>
        <div class="input-group">
          <span class="input-group-addon" id="startDate"><i class="ti-time"></i></span>
          <input type="date" class="form-control @error('startDate') is-invalid @enderror" placeholder="Valid To" title="Enter Start Date" data-toggle="tooltip" name="startDate" required>
          {{-- <input name = "startDate" type="date" class = "form-control datepicker valid_to" placeholder = "Valid To" data-date-start-date="d"> --}}
          @error('startDate')
              <small class="invalid-feedback" role="alert">
                  {{ $message }}
              </small>
          @enderror


        </div>
        <div class="input-group">
          <span class="input-group-addon" id="endDate"><i class="ti-time"></i></span>
          <input type="date" class="form-control" placeholder="Enter End Date" title="Enter End Date" data-toggle="tooltip" name="endDate" required>
        </div>
        <button type="submit" class="btn btn-primary waves-effect waves-light m-r-20" data-toggle="tooltip" data-placement="right">Submit
        </button>
      </form>
    </div>
  </div>
</div>

<script src="{{ asset('js/foundation-datepicker.min.js') }}" defer></script>
<script>
$(document).ready(function(){
  $('#date-in').fdatepicker();
}) 
</script>

@endsection