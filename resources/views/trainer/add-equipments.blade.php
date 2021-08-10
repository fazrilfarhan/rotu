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
        <form action=" {{ route('equipments.store') }} " method="POST">
          @csrf
        <div class="input-group">
          <span class="input-group-addon"><i class="icofont icofont-user-alt-4"></i></span>
          <select name="equipName" class="form-control">
            <option value="">Equipment Name</option>
            <option value="Bag Pack">Bag Pack</option>
            <option value="Belt">Belt</option>
            <option value="Carrier Water Bottle">Carrier Water Bottle</option>
            <option value="Compass Bag">Compass Bag</option>
            <option value="Mess Cup">Mess Cup</option>
            <option value="Mess Tin">Mess Tin</option>
            <option value="Patrol Pack">Patrol Pack</option>
            <option value="Pouches">Pouches</option>
            <option value="Water Bottle">Water Bottle</option>
          </select>
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