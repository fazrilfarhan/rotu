@extends('layouts.app')

@section('pageTitle', 'Edit Cadet Information')

@section('content')

<!-- Main-body start -->
<div class="main-body">
    <div class="page-wrapper">
        <!-- Page-header start -->
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ti-user bg-c-dark-green card1-icon"></i>
                        <div class="d-inline">
                            <h4>Edit Cadet Information</h4>
                            <span>Edit the form and click on ‘Update’ after updating in the form.</span>
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
                        <li class="breadcrumb-item"><a href="{{ route('cadets.index') }}">Manage Cadets</a>
                        </li>
                        <li class="breadcrumb-item"><a href="">Cadet Information</a>
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
        <h4>Cadet Information Form</h4>
        <div class="card-header-right">                                                             
            <i class="icofont icofont-spinner-alt-5"></i>                                                         
        </div>
    </div>

    <div class="card-block tooltip-icon button-list">
        <form action="{{ route('cadets.update', $cadet->id) }}" method="POST">
            @method('PUT')
            @csrf
                {{-- <div class="input-group">
                    <span class="input-group-addon" id="military_number"><i class="ti-id-badge"></i></span>
                    <input type="text" class="form-control" placeholder="Enter Military Number" title="Enter Military Number" data-toggle="tooltip" name="military_number" value="{{$cadet->cadetID}}" required>
                </div> --}}
                {{-- <div class="input-group">
                    <span class="input-group-addon" id="military_number"><i class="icofont icofont-user-alt-4"></i></span>
                        <input type="text" class="form-control" placeholder="Enter Military Number" title="Enter Military Number" data-toggle="tooltip" name="military_number" value="{{$cadet->cadetID}}" required>
                        @error('military_number')
                            <small class="invalid-feedback" role="alert">
                                {{ $message }}
                            </small>
                        @enderror
                </div> --}}
                <div class="input-group">
                    <span class="input-group-addon" id="rank"><i class="ti-medall-alt"></i></span>
                        <select name="rank" class="form-control @error('rank') is-invalid @enderror" value="{{ $cadet->cadetRank }}">
                            <option value="">Enter Rank</option>
                            <option value="PK I" @if($cadet->cadetRank == 'PK I') selected @endif>PK I</option>
                            <option value="PKW I" @if($cadet->cadetRank == 'PKW I') selected @endif>PKW I</option>
                            <option value="PK II" @if($cadet->cadetRank == 'PK II') selected @endif>PK II</option>
                            <option value="PKW II" @if($cadet->cadetRank == 'PKW II') selected @endif>PKW II</option>
                            <option value="PKK" @if($cadet->cadetRank == 'PKK') selected @endif>PKK</option>
                            <option value="PKS" @if($cadet->cadetRank == 'PKS') selected @endif>PKS</option>
                            <option value="PRM" @if($cadet->cadetRank == 'PRM') selected @endif>PRM</option>
                            <option value="PRK" @if($cadet->cadetRank == 'PRK') selected @endif>PRK</option>
                        </select>
                        @error('rank')
                        <small class="invalid-feedback" role="alert">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="input-group">
                    <span class="input-group-addon" id="fullName"><i class="ti-user"></i></span>
                    <input type="text" class="form-control" placeholder="Enter Full Name" title="Enter Full Name" data-toggle="tooltip" name="fullName" value="{{$cadet->user->fullName}}" required>
                </div>
                {{-- <div class="input-group">
                    <span class="input-group-addon" id="fullName"><i class="ti-user"></i></span>
                        <input type="text" class="form-control @error('fullName') is-invalid @enderror" placeholder="Enter Full Name" title="Enter Full Name" data-toggle="tooltip" name="fullname" value="{{$cadet->user->fullName , $cadet->cadetName}}" required>
                        @error('fullName')
                        <small class="invalid-feedback" role="alert">
                            {{ $message }}
                        </small>
                    @enderror
                </div> --}}
                <div class="input-group">
                    <span class="input-group-addon" id="gender"><i class="ti-anchor"></i></span>
                        <select name="gender" class="form-control @error('gender') is-invalid @enderror" value="{{ $cadet->cadetGender }}" required>
                            <option value="">Enter Gender</option>
                            <option value="Male" @if($cadet->cadetGender == 'Male') selected @endif>Male</option>
                            <option value="Female" @if($cadet->cadetGender == 'Female') selected @endif>Female</option>
                        </select>
                        @error('gender')
                        <small class="invalid-feedback" role="alert">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="input-group">
                    <span class="input-group-addon" id="phoneNumber"><i class="ti-tablet"></i></span>
                        <input type="numeric" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" placeholder="Enter Phone Number" title="Enter Phone Number" data-toggle="tooltip" value="{{ $cadet->phoneNum }}" required>
                        @error('phoneNumber')
                        <small class="invalid-feedback" role="alert">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="input-group">
                    <span class="input-group-addon" id="address"><i class="ti-tag"></i></span>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Enter Address" title="Enter Address" data-toggle="tooltip" value="{{ $cadet->cadetAddress }}" required>
                        <span class="md-line"></span>
                        @error('address')
                        <small class="invalid-feedback" role="alert">
                            {{ $message }}
                        </small>
                    @enderror
                </div>   
                <div class="input-group">
                    <span class="input-group-addon" id="email'"><i class="ti-email"></i></span>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter Email Address" title="Enter Email Address" data-toggle="tooltip" value="{{ $cadet->user->email }}" required>
                        @error('email')
                        <small class="invalid-feedback" role="alert">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="row m-t-30">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Update</button>
                    </div>
            </form>
    </div>
</div>

@endsection