@extends('layouts.app')

@section('pageTitle', 'Manage Equipment Lending Application')

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
                            <h4>Manage Equipment Lending Application</h4>
                            <span>Look at the application status column to find out the status of the lending application.</span>
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
                        <li class="breadcrumb-item"><a href="">Equipments</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('cadet-equipments.index') }}">Manage Application</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->

<div class="card" background-color="#a69d82">
    <div class="card-header">
        <h4>List of Application</h4>
        <div class="table-responsive">
            <div class="card-header-right">    <ul class="list-unstyled card-option">        <li><i class="icofont icofont-simple-left "></i></li>        <li><i class="icofont icofont-maximize full-card"></i></li>        <li><i class="icofont icofont-minus minimize-card"></i></li>        <li><i class="icofont icofont-refresh reload-card"></i></li>        <li><i class="icofont icofont-error close-card"></i></li>    </ul></div>
        </div>
    </div>
    <div class="card-block">
        <table class="table">
            <thead class="bg-primary text-white">
                <tr>
                    <th style="width: 60%">Equipments</th>
                    <th>Status Application</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <ul style="list-style-position:inside;">
                            @foreach ($details as $detail)
                                <li style="list-style-type: disc;">{{$detail->equipName}}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        {{$item->pivot->status}}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection