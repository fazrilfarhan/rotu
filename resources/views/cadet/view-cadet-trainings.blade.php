@extends('layouts.app')

@section('pageTitle', 'View Trainings')

@section('content')



<div class="card">
    <div class="card-header">
        <h4><strong>View Trainings</strong></h4>
        <div class="card-header-right">    <ul class="list-unstyled card-option">        <li><i class="icofont icofont-simple-left "></i></li>        <li><i class="icofont icofont-maximize full-card"></i></li>        <li><i class="icofont icofont-minus minimize-card"></i></li>        <li><i class="icofont icofont-refresh reload-card"></i></li>        <li><i class="icofont icofont-error close-card"></i></li>    </ul></div>
        <div class="card-header-right">                                                             
            <i class="icofont icofont-spinner-alt-5"></i>                                                         
        </div>
<div class="form-group row">    
    <div class="card-block tooltip-icon button-list"></div>
        {{-- <span class="input-group-addon" id="level"><i class="icofont icofont-user-alt-3"></i></span>
        <input type="text" data-toggle="tooltip" name="level" value="{{$training->level}}" readonly>
        <span class="input-group-addon" id="trainingName"><i class="icofont icofont-user-alt-3"></i></span>
        <input type="text" data-toggle="tooltip" name="trainingName" value="{{$training->trainingName}}" readonly>
        <span class="input-group-addon" id="year"><i class="icofont icofont-user-alt-3"></i></span>
        <input type="text" data-toggle="tooltip" name="year" value="{{$training->year}}" readonly>
        <span class="input-group-addon" id="startDate"><i class="icofont icofont-user-alt-3"></i></span>
        <input type="text" data-toggle="tooltip" name="startDate" value="{{$training->startDate}}" readonly>
        <span class="input-group-addon" id="endDate"><i class="icofont icofont-user-alt-3"></i></span>
        <input type="text" data-toggle="tooltip" name="endDate" value="{{$training->endDate}}" readonly> --}}
    </div>
    <div class="card-block table-border-style">
        <div class="table-responsive">
            <table class="table">
                <thead>
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
                        {{-- <td>{{$cadet->id}}</td> --}}
                        <td>{{$loop->iteration}}</td>
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
@endsection