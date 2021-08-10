@extends('layouts.app')

@section('pageTitle', 'Edit Training')

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
                          <h4>Edit Training Information</h4>
                          <span>Edit the form and click on ‘Update’ after editing in the form.</span>
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
                      <li class="breadcrumb-item"><a href="{{ route('trainings.index') }}">Manage Trainings</a>
                      </li>
                      <li class="breadcrumb-item"><a href="">Edit Trainings</a>
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
        <form action=" {{ route('trainings.update', $training->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-server"></i></span>
                <select name="level" class="form-control @error('level') is-invalid @enderror">
                  <option value="">Level</option>
                      <option value="JUNIOR" @if($training->level == 'JUNIOR') selected @endif>JUNIOR</option>
                      <option value="INTERMEDIATE" @if($training->level == 'INTERMEDIATE') selected @endif>INTERMEDIATE</option>
                      <option value="SENIOR" @if($training->level == 'SENIOR') selected @endif>SENIOR</option>
                  </select>
                  @error('level')
                  <small>{{ $message }}</small>
                  @enderror
            </div>
            <div class="input-group">
              <span class="input-group-addon" id="password"><i class="icofont icofont-user-alt-4"></i></span>
                <select name="trainingName" class="form-control @error('trainingName') is-invalid @enderror">
                  <option value="">Training Name</option>
                  <option value="LATIHAN TEMPATAN I" @if($training->trainingName == 'LATIHAN TEMPATAN I') selected @endif>LATIHAN TEMPATAN I</option>
                  <option value="LATIHAN TEMPATAN II" @if($training->trainingName == 'LATIHAN TEMPATAN II') selected @endif>LATIHAN TEMPATAN II</option>
                  <option value="LATIHAN TEMPATAN III" @if($training->trainingName == 'LATIHAN TEMPATAN III') selected @endif>LATIHAN TEMPATAN III</option>
                  <option value="LATIHAN TEMPATAN IV" @if($training->trainingName == 'LATIHAN TEMPATAN IV') selected @endif>LATIHAN TEMPATAN IV</option>
                  <option value="LATIHAN TEMPATAN V" @if($training->trainingName == 'LATIHAN TEMPATAN V') selected @endif>LATIHAN TEMPATAN V</option>
                  <option value="LATIHAN BERTERUSAN" @if($training->trainingName == 'LATIHAN BERTERUSAN') selected @endif>LATIHAN BERTERUSAN</option>
                  <option value="LATIHAN KEM TAHUNAN" @if($training->trainingName == 'LATIHAN KEM TAHUNAN') selected @endif>LATIHAN KEM TAHUNAN</option>
                </select>
                @error('trainingName')
                <small>{{ $message }}</small>
                @enderror
            </div>
        <div class="input-group">
          <span class="input-group-addon" id="year"><i class="icofont icofont-user-alt-3"></i></span>
          <input type="year" class="form-control" placeholder="Enter Year" title="Enter Year" data-toggle="tooltip" name="year" value="{{$training->year}}" required>
        </div>
          <div class="input-group">
            <span class="input-group-addon" id="startDate"><i class="icofont icofont-user-alt-3"></i></span>
            <input type="date" class="form-control" placeholder="Enter Start Date" title="Enter Start Date" data-toggle="tooltip" name="startDate" value="{{$training->startDate}}" required>
          </div>
          <div class="input-group">
            <span class="input-group-addon" id="endDate"><i class="icofont icofont-user-alt-3"></i></span>
            <input type="date" class="form-control" placeholder="Enter End Date" title="Enter End Date" data-toggle="tooltip" name="endDate" value="{{$training->endDate}}" required>
          </div>
          <button type="submit" class="btn btn-primary waves-effect waves-light m-r-20" data-toggle="tooltip" data-placement="right">Update
          </button>
        </form>
      </div>
    </div>
  </div>

@endsection