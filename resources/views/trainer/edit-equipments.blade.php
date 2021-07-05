@extends('layouts.app')

@section('pageTitle', 'Add Equipments')

@section('content')

<div class="card">
    <div class="col-sm-5">
      <div class="card-header">
          <h4><strong>Add Equipments</strong></h4>
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
        <button type="Submit" class="btn btn-primary waves-effect waves-light m-r-20" data-toggle="tooltip" data-placement="right" title="submit">Submit
        </button>
        </form>
      </div>
    </div>
  </div>

@endsection