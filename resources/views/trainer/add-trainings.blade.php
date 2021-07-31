@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/foundation-datepicker.min.css') }}">
@endsection

@section('pageTitle', 'Add Trainings')

@section('content')

<div class="card">
  <div class="col-sm-5">
    <div class="card-header">
        <h4><strong>Add Training</strong></h4>
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
        <button type="submit" class="btn btn-primary waves-effect waves-light m-r-20" data-toggle="tooltip" data-placement="right" title="submit">Submit
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