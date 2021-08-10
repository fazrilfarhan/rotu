@extends('layouts.app')

@section('pageTitle', 'Trainer Registration')

@section('content')

<!-- Main-body start -->
<div class="main-body">
    <div class="page-wrapper">
        <!-- Page-header start -->
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ti-medall bg-c-dark-green card1-icon"></i>
                        <div class="d-inline">
                            <h4>Trainer Registration</h4>
                            <span>Fill up the form and click on ‘Submit’ after filling in the form.</span>
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
                        <li class="breadcrumb-item"><a href="{{ route('trainers.create') }}">Trainer Registration</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->
<div class="card">
    <div class="col-sm-5">
    <div class="card-header">
        <h4>Trainer Registration Form</h4>
        <div class="card-header-right">                                                             
            <i class="icofont icofont-spinner-alt-5"></i>                                                         
        </div>
    </div>

    <div class="card-block tooltip-icon button-list">
        <form action="{{ route('trainers.store') }}" method="POST">
            @csrf
            <div class="input-group">
                <span class="input-group-addon" id="password"><i class="ti-medall-alt"></i></span>
                    <select name="rank" class="form-control @error('rank') is-invalid @enderror">
                        <option value="">Enter Rank</option>
                        <option value="Lans Koperal">Lans Koperal</option>
                        <option value="Koperal">Koperal</option>
                        <option value="Sarjan">Sarjan</option>
                        <option value="Kapten">Kapten</option>
                    </select>
                    @error('rank')
                    <small>{{ $message }}</small>
                    @enderror
            </div>
            <div class="input-group">
                <span class="input-group-addon" id="fullname"><i class="ti-user"></i></span>
                <input type="text" class="form-control" placeholder="Enter Full Name" title="Enter Full Name" data-toggle="tooltip" name="fullname" required>
            </div>
            <div class="input-group">
                <span class="input-group-addon" id="military-number"><i class="ti-id-badge"></i></span>
                <input type="text" class="form-control" placeholder="Enter Military Number" title="Enter Military Number" data-toggle="tooltip" name="military_number" required>
            </div>
            {!!"&nbsp;"!!}
            <div class="input-group">
                <span class="input-group-addon" id="email"><i class="icofont icofont-ui-email"></i></span>
                <input type="email" class="form-control" placeholder="Enter Email" title="Enter email" data-toggle="tooltip" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" name="email" required>
            </div>
            <div class="input-group">
                <span class="input-group-addon" id="password"><i class="icofont icofont-ui-lock"></i></span>
                <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Please use trainer<<Rank Number>> as a password" title="Enter Password" data-toggle="tooltip" name="password" required>
                @error('password')
                <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="input-group">
                <span class="input-group-addon" id="confirm-password"><i class="icofont icofont-ui-lock"></i></span>
                <input type="password" class="form-control" placeholder="Please use trainer<<Rank Number>> as a password" title="Confirm Password" data-toggle="tooltip" name="password_confirmation" required>
            </div>
            <button type="submit" class="btn btn-primary waves-effect waves-light m-r-20" data-toggle="tooltip" data-placement="right">Submit
            </button>
        </form>
    </div>
</div>

@endsection