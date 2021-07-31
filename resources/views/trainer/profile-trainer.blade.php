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
        <form action="{{ route('profile-trainer.update', $trainer->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="input-group">
                <span class="input-group-addon" id="rank"><i class="ti-medall-alt"></i></span>
                    <select name="rank" class="form-control @error('rank') is-invalid @enderror">
                        <option value="">Enter Rank</option>
                        <option value="Lans Koperal" @if($trainer->trainerRank == 'Lans Koperal') selected @endif>Lans Koperal</option>
                        <option value="Koperal" @if($trainer->trainerRank == 'Koperal') selected @endif>Koperal</option>
                        <option value="Sarjan" @if($trainer->trainerRank == 'Sarjan') selected @endif>Sarjan</option>
                        <option value="Kapten" @if($trainer->trainerRank == 'Kapten') selected @endif>Kapten</option>
                    </select>
                    @error('rank')
                    <small>{{ $message }}</small>
                    @enderror
            </div>
            <div class="input-group">
                <span class="input-group-addon" id="fullname"><i class="ti-user"></i></span>
                <input type="text" class="form-control" placeholder="Enter Full Name" title="Enter Full Name" data-toggle="tooltip" name="fullname" value="{{$trainer->user->fullName}}" required>
            </div>
            <div class="input-group">
                <span class="input-group-addon" id="military-number"><i class="ti-id-badge"></i></span>
                <input type="text" class="form-control" placeholder="Enter Military Number" title="Enter Military Number" data-toggle="tooltip" name="military_number" value="{{$trainer->trainerNum}}" required>
            </div>
            <div class="input-group">
                <span class="input-group-addon" id="email"><i class="icofont icofont-ui-email"></i></span>
                <input type="email" class="form-control" placeholder="Enter Email" title="Enter email" data-toggle="tooltip" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" name="email" value="{{$trainer->user->email}}" required>
            </div>
            <button type="submit" class="btn btn-primary waves-effect waves-light m-r-20" data-toggle="tooltip" data-placement="right">Confirm Update
            </button>
        </form>
    </div>
</div>

@endsection