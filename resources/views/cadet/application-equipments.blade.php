@extends('layouts.app')

@section('pageTitle', 'Equipment Application')

@section('content')

<!-- Main-body start -->
<div class="main-body">
    <div class="page-wrapper">
        <!-- Page-header start -->
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ti-agenda bg-c-dark-green card1-icon"></i>
                        <div class="d-inline">
                            <h4>Equipment Application</h4>
                            <span>Click on the checkbox of the equipment you want to borrow and click 'Submit' after filling the checkbox.</span>
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
                        <li class="breadcrumb-item"><a href="create">Equipment Application</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->

    <div class="card">
        <div class="card-header">
            <h4>List of Equipments</h4>
            <div class="table-responsive">
                <div class="card-header-right">    <ul class="list-unstyled card-option">        <li><i class="icofont icofont-simple-left "></i></li>        <li><i class="icofont icofont-maximize full-card"></i></li>        <li><i class="icofont icofont-minus minimize-card"></i></li>        <li><i class="icofont icofont-refresh reload-card"></i></li>        <li><i class="icofont icofont-error close-card"></i></li>    </ul></div>
                </div>
                <table class="table">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>Checkbox</th>
                            <th>Equipment Name</th>
                            <th>Current Quantity</th>
                        </tr>
                    </thead>
                <tbody>
                <form action="/cadet-equipments" method="POST">
                 @csrf
                @foreach($equipments as $equipment)
                 <label class="required" for="equipments"></label>
                <tr>
                    <td>
                        <input type="checkbox" class="equipment-enable" name="equipmentArray[]" value="{{ $equipment->id }}"
                        @if($equipment->quantity <= 0) disabled @endif>
                    </td>
                    <td>{{ $equipment->equipName }}</td>
                    <td>{{ $equipment->quantity}}</td>
                    {{-- <td><input data-id="{{ $equipment->id }}" type="text" class="form-control" placeholder="Quantity"></td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>
        <button type="Submit" class="btn btn-primary waves-effect waves-light m-r-20" data-toggle="tooltip" data-placement="right">Submit
        </button>
        </form>
        </div>
    </div>
</div>
@endsection