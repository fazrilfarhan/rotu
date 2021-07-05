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
          <span class="input-group-addon"><i class="icofont icofont-user-alt-4"></i></span>
          <select name="level" class="form-control">
            <option value="">Level</option>
            <option value="Junior">Junior</option>
            <option value="Intermediate">Intermediate</option>
            <option value="Senior">Senior</option>
          </select>
        </div>  
        <div class="input-group">
            <span class="input-group-addon"><i class="icofont icofont-user-alt-4"></i></span>
            <select name="trainingName" class="form-control">
              <option value="">Training Name</option>
              <option value="Latihan Tempatan I">Latihan Tempatan I</option>
              <option value="Latihan Tempatan II">Latihan Tempatan II</option>
              <option value="Latihan Tempatan III">Latihan Tempatan III</option>
              <option value="Latihan Tempatan IV">Latihan Tempatan IV</option>
              <option value="Latihan Tempatan V">Latihan Tempatan V</option>
              <option value="Latihan Berterusan">Latihan Berterusan</option>
              <option value="Latihan Kem Tahunan">Latihan Kem Tahunan</option>
            </select>
        </div>
        <div class="input-group">
          <span class="input-group-addon" id="year"><i class="icofont icofont-user-alt-3"></i></span>
          <input type="year" class="form-control" placeholder="Enter Year" title="Enter Year" data-toggle="tooltip" name="year" required>
        </div>
        <div class="input-group">
          <span class="input-group-addon" id="startDate"><i class="icofont icofont-user-alt-3"></i></span>
          <input type="date" class="form-control @error('startDate') is-invalid @enderror" placeholder="Valid To" title="Enter Start Date" data-toggle="tooltip" name="startDate" required>
          {{-- <input name = "startDate" type="date" class = "form-control datepicker valid_to" placeholder = "Valid To" data-date-start-date="d"> --}}
          @error('startDate')
              <small class="invalid-feedback" role="alert">
                  {{ $message }}
              </small>
          @enderror


        </div>
        <div class="input-group">
          <span class="input-group-addon" id="endDate"><i class="icofont icofont-user-alt-3"></i></span>
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