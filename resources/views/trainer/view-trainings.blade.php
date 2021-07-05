@extends('layouts.app')

@section('pageTitle', 'View Trainings')

@section('content')



<div class="card">
    <div class="card-header">
        <h4><strong>View Trainings</strong></h4>
        <div class="table-responsive">
            <div class="card-header-right">    <ul class="list-unstyled card-option">        <li><i class="icofont icofont-simple-left "></i></li>        <li><i class="icofont icofont-maximize full-card"></i></li>        <li><i class="icofont icofont-minus minimize-card"></i></li>        <li><i class="icofont icofont-refresh reload-card"></i></li>        <li><i class="icofont icofont-error close-card"></i></li>    </ul></div>
            </div>
            <table class="table">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>#</th>
                        <th>Military Number</th>
                        <th>Rank</th>
                        <th>Full Name</th>
                        <th>Date In</th>
                        <th>Date Out</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cadets as $cadet)
                    <tr>
                        <td>{{$cadet->id}}</td>
                        <td>{{$cadet->cadetID}}</td>
                        <td>{{$cadet->cadetRank}}</td>
                        <td>{{$cadet->cadetName}}</td>
                        <td>{{$cadet->pivot->dateIn}}</td>
                        <td>{{$cadet->pivot->dateOut}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection