@extends('layouts.app')

@section('pageTitle', 'Edit Date')

@section('content')

<div class="card">
  <div class="col-sm-5">
    <div class="card-header">
        <h4><strong>Edit Date</strong></h4>
        (Start Date: {{\Carbon\Carbon::parse($training->startDate)->format('d/m/Y')}} -
        End Date: {{\Carbon\Carbon::parse($training->endDate)->format('d/m/Y')}})
        
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
      <button type="submit" class="btn btn-primary waves-effect waves-light m-r-20" data-toggle="tooltip" data-placement="right" title="submit">Confirm Update</button>
    </div>
  </form>
  </div>
</div>

@endsection