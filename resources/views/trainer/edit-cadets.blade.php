@extends('layouts.app')

@section('pageTitle', 'Edit Cadets')

@section('content')

<div class="card">
    <div class="col-sm-5">
    <div class="card-header">
        <h4><strong>Edit Cadets</strong></h4>
        <div class="card-header-right">                                                             
            <i class="icofont icofont-spinner-alt-5"></i>                                                         
        </div>
    </div>

    <div class="card-block tooltip-icon button-list">
        <h6 class="heading-small text-muted mb-4">CADET INFORMATION</h6>
        <form action="{{ route('cadets.update', $cadet->id) }}" method="POST">
            @method('PUT')
            @csrf
                <div class="input-group">
                    <span class="input-group-addon" id="military_number"><i class="icofont icofont-user-alt-3"></i></span>
                    <input type="text" class="form-control" placeholder="Enter Full Name" title="Enter Full Name" data-toggle="tooltip" name="military_number" value="{{$cadet->cadetID}}" required>
                </div>
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
                    <span class="input-group-addon" id="rank"><i class="icofont icofont-user-alt-4"></i></span>
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
                    <span class="input-group-addon" id="fullName"><i class="icofont icofont-user-alt-3"></i></span>
                    <input type="text" class="form-control" placeholder="Enter Full Name" title="Enter Full Name" data-toggle="tooltip" name="fullName" value="{{$cadet->user->fullName}}" required>
                </div>
                {{-- <div class="input-group">
                    <span class="input-group-addon" id="fullName"><i class="icofont icofont-user-alt-4"></i></span>
                        <input type="text" class="form-control @error('fullName') is-invalid @enderror" placeholder="Enter Full Name" title="Enter Full Name" data-toggle="tooltip" name="fullname" value="{{$cadet->user->fullName , $cadet->cadetName}}" required>
                        @error('fullName')
                        <small class="invalid-feedback" role="alert">
                            {{ $message }}
                        </small>
                    @enderror
                </div> --}}
                <div class="input-group">
                    <span class="input-group-addon" id="gender"><i class="icofont icofont-user-alt-4"></i></span>
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
                    <span class="input-group-addon" id="phoneNumber"><i class="icofont icofont-user-alt-4"></i></span>
                        <input type="numeric" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" placeholder="Phone Number" value="{{ $cadet->phoneNum }}" required>
                        @error('phoneNumber')
                        <small class="invalid-feedback" role="alert">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="input-group">
                    <span class="input-group-addon" id="address"><i class="icofont icofont-user-alt-4"></i></span>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Address" value="{{ $cadet->cadetAddress }}" required>
                        <span class="md-line"></span>
                        @error('address')
                        <small class="invalid-feedback" role="alert">
                            {{ $message }}
                        </small>
                    @enderror
                </div>   
                <div class="input-group">
                    <span class="input-group-addon" id="email'"><i class="icofont icofont-user-alt-4"></i></span>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email Address" value="{{ $cadet->user->email }}" required>
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