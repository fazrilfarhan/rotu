@extends('layouts.app')

@section('pageTitle', 'My Profile')

@section('content')

<div class="card">
    <div class="col-sm-5">
    <div class="card-header">
        <h4><strong>My Profile</strong></h4>
        <div class="card-header-right">                                                             
            <i class="icofont icofont-spinner-alt-5"></i>                                                         
        </div>
    </div>

    <div class="card-block tooltip-icon button-list">
        <form action="{{ route('profile-cadet.update', $cadet->id) }}" method="POST">
            @method('PUT')
            @csrf
                <div class="input-group">
                    <span class="input-group-addon" id="militaryNumber"><i class="ti-id-badge"></i></span>
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
                    <span class="input-group-addon" id="militaryNumber"><i class="ti-user"></i></span>
                    <input type="text" class="form-control" placeholder="Enter Full Name" title="Enter Full Name" data-toggle="tooltip" name="fullName" value="{{$cadet->user->fullName}}" required>
                </div>
                <div class="input-group">
                    <span class="input-group-addon" id="militaryNumber"><i class="ti-anchor"></i></span>
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
                    <span class="input-group-addon" id="militaryNumber"><i class="ti-tablet"></i></span>
                        <input type="numeric" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" placeholder="Phone Number" value="{{ $cadet->phoneNum }}" required>
                        @error('phoneNumber')
                        <small class="invalid-feedback" role="alert">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="input-group">
                    <span class="input-group-addon" id="militaryNumber"><i class="ti-tag"></i></span>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Address" value="{{ $cadet->cadetAddress }}" required>
                        <span class="md-line"></span>
                        @error('address')
                        <small class="invalid-feedback" role="alert">
                            {{ $message }}
                        </small>
                    @enderror
                </div>   
                <div class="input-group">
                    <span class="input-group-addon" id="militaryNumber"><i class="ti-email"></i></span>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email Address" value="{{ $cadet->user->email }}" required>
                        @error('email')
                        <small class="invalid-feedback" role="alert">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="row m-t-30">
                    <div class="col-md-12">
                        <a href="/home"><button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Update</button>
                    </div>
            </form>
    </div>
</div>

@endsection