@extends('layouts.app')

@section('pageTitle', 'Register Training')

@section('content')

<div class="card">
  <div class="col-sm-5">
    <div class="card-header">
        <h4><strong>Register Training</strong></h4>
        <div class="card-header-right">                                                             
            <i class="icofont icofont-spinner-alt-5"></i>                                                         
        </div>
    </div>
    <div class="card-block tooltip-icon button-list">
      <form action=" {{ route('register-trainings.store', $id) }} " method="POST">
        @csrf
      <div class="input-group">
        <span class="input-group-addon" id="dateIn"><i class="icofont icofont-user-alt-3"></i></span>
        <input type="date" class="form-control" placeholder="Enter Date In" title="Enter Date In" data-toggle="tooltip" name="dateIn" required>
      </div>
      <div class="input-group">
        <span class="input-group-addon" id="dateOut"><i class="icofont icofont-user-alt-3"></i></span>
        <input type="date" class="form-control" placeholder="Enter Date Out" title="Enter Date Out" data-toggle="tooltip" name="dateOut" required>
      </div>
      <button type="submit" class="btn btn-primary waves-effect waves-light m-r-20" data-toggle="tooltip" data-placement="right" title="submit">Confirm Register
      </button>
    </div>
  
  </div>
</div>

@endsection