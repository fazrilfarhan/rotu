@extends('layouts.app')

@section('pageTitle', 'Equipment Application')

@section('content')

<div class="card">
    <div class="col-sm-5">
      <div class="card-header">
          <h4><strong>Equipment Application</strong></h4>
          <div class="card-header-right">                                                             
              <i class="icofont icofont-spinner-alt-5"></i>                                                         
          </div>
      </div>
      <div class="card-block tooltip-icon button-list">
        <form action="/cadet-equipments" method="POST">
          @csrf
        <div class="input-group">
    @foreach($equipments as $equipment)
        <div class="form-group">
            <label class="required" for="equipments"></label>
            <tr>
                <td><input type="checkbox" class="equipment-enable" name="equipmentArray[]" value="{{ $equipment->id }}"></td>
                <td>{{ $equipment->equipName }}</td>
                {{-- <td><input data-id="{{ $equipment->id }}" type="text" class="form-control" placeholder="Quantity"></td> --}}
                </tr>
        
            @endforeach
        </div>

    <button type="Submit" class="btn btn-primary waves-effect waves-light m-r-20" data-toggle="tooltip" data-placement="right" title="submit">Submit
    </button>
    </form>
    
  </div>
</div>
</div>

{{-- @section('scripts')
    @parent
    <script>
        $('document').ready(function () {
            $('.ingredient-enable').on('click', function () {
                let id = $(this).attr('data-id')
                let enabled = $(this).is(":checked")
                $('.ingredient-amount[data-id="' + id + '"]').attr('disabled', !enabled)
                $('.ingredient-amount[data-id="' + id + '"]').val(null)
            })
        });
    </script> --}}



@endsection