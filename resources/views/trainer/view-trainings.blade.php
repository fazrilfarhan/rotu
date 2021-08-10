@extends('layouts.app')

@section('pageTitle', 'View Trainings')

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
                            <h4>View Trainings</h4>
                            <span>Click on ‘Print’ at the bottom of table to print list of Cadet Officers registered.</span>
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
                        <li class="breadcrumb-item"><a href="">View Trainings</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->

<div class="card">
    <div class="card-header">
        <div class="table-responsive">
            <div class="card-header-right">    <ul class="list-unstyled card-option">        <li><i class="icofont icofont-simple-left "></i></li>        <li><i class="icofont icofont-maximize full-card"></i></li>        <li><i class="icofont icofont-minus minimize-card"></i></li>        <li><i class="icofont icofont-refresh reload-card"></i></li>        <li><i class="icofont icofont-error close-card"></i></li>    </ul></div>
            </div>
            <table class="table">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>Num</th>
                        <th>Military Number</th>
                        <th>Rank</th>
                        <th>Full Name</th>
                        <th>Date In</th>
                        <th>Date Out</th>
                        <th>Registered Days</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cadets as $cadet)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$cadet->id}}</td>
                        <td>{{$cadet->cadetID}}</td>
                        <td>{{$cadet->cadetRank}}</td>
                        <td>{{$cadet->cadetName}}</td>
                        <td>{{$cadet->pivot->dateIn}}</td>
                        <td>{{$cadet->pivot->dateOut}}</td>
                        <td>{{$cadet->registeredDays}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="form-group">
    <a href="/training/PDF/{{$id}}"><button class="btn btn-primary btn-block">Print</button></a>
</div>

@endsection