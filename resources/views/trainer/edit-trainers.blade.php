@extends('layouts.app')

@section('pageTitle', 'Edit Trainers')

@section('content')


<div class="card">
    <div class="col-sm-5">
    <div class="card-header">
        <h4><strong>Edit Trainers</strong></h4>
        <div class="card-header-right">                                                             
            <i class="icofont icofont-spinner-alt-5"></i>                                                         
        </div>
    </div>

    <div class="card-block tooltip-icon button-list">
        <form action="{{ route('trainers.update', $trainer->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="input-group">
                <span class="input-group-addon" id="rank"><i class="icofont icofont-user-alt-4"></i></span>
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
                <span class="input-group-addon" id="fullname"><i class="icofont icofont-user-alt-3"></i></span>
                <input type="text" class="form-control" placeholder="Enter Full Name" title="Enter Full Name" data-toggle="tooltip" name="fullname" value="{{$trainer->user->fullName , $trainer->trainerName}}" required>
            </div>
            <div class="input-group">
                <span class="input-group-addon" id="military_number"><i class="icofont icofont-user-alt-3"></i></span>
                <input type="text" class="form-control" placeholder="Enter Military Number" title="Enter Military Number" data-toggle="tooltip" name="military_number" value="{{$trainer->trainerNum}}" required>
            </div>
            <div class="input-group">
                <span class="input-group-addon" id="email"><i class="icofont icofont-ui-email"></i></span>
                <input type="email" class="form-control" placeholder="Enter Email" title="Enter email" data-toggle="tooltip" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" name="email" value="{{$trainer->user->email}}" required>
            </div>
            <div class="row m-t-30">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Update</button>
                </div>
        </div>                

        </form>
    </div>
</div>

@endsection