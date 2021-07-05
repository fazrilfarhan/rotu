@extends('layouts.app')

@section('pageTitle', 'Add Trainers')

@section('content')


<div class="card">
    <div class="col-sm-5">
    <div class="card-header">
        <h4><strong>Add Trainers</strong></h4>
        <div class="card-header-right">                                                             
            <i class="icofont icofont-spinner-alt-5"></i>                                                         
        </div>
    </div>

    <div class="card-block tooltip-icon button-list">
        <form action="{{ route('trainers.store') }}" method="POST">
            @csrf
            <div class="input-group">
                <span class="input-group-addon" id="password"><i class="icofont icofont-user-alt-4"></i></span>
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
                <span class="input-group-addon" id="fullname"><i class="icofont icofont-user-alt-3"></i></span>
                <input type="text" class="form-control" placeholder="Enter Full Name" title="Enter Full Name" data-toggle="tooltip" name="fullname" required>
            </div>
            <div class="input-group">
                <span class="input-group-addon" id="military-number"><i class="icofont icofont-user-alt-3"></i></span>
                <input type="text" class="form-control" placeholder="Enter Military Number" title="Enter Military Number" data-toggle="tooltip" name="military_number" required>
            </div>
            {!!"&nbsp;"!!}
            <div class="input-group">
                <span class="input-group-addon" id="email"><i class="icofont icofont-ui-email"></i></span>
                <input type="email" class="form-control" placeholder="Enter Email" title="Enter email" data-toggle="tooltip" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" name="email" required>
            </div>
            <div class="input-group">
                <span class="input-group-addon" id="password"><i class="icofont icofont-ui-lock"></i></span>
                <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter Password" title="Enter Password" data-toggle="tooltip" name="password" required>
                @error('password')
                <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="input-group">
                <span class="input-group-addon" id="confirm-password"><i class="icofont icofont-ui-lock"></i></span>
                <input type="password" class="form-control" placeholder="Confirm Password" title="Confirm Password" data-toggle="tooltip" name="password_confirmation" required>
            </div>
            <button type="submit" class="btn btn-primary waves-effect waves-light m-r-20" data-toggle="tooltip" data-placement="right" title="submit">Submit
            </button>
        </form>
    </div>
</div>

@endsection