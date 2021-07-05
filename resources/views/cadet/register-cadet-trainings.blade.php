@extends('layouts.app')

@section('pageTitle', 'Register Trainings')

@section('content')

<div class="card">
    <div class="card-header">
        <h4><strong>Register Trainings</strong></h4>
        <div class="table-responsive">
            <div class="card-header-right">    <ul class="list-unstyled card-option">        <li><i class="icofont icofont-simple-left "></i></li>        <li><i class="icofont icofont-maximize full-card"></i></li>        <li><i class="icofont icofont-minus minimize-card"></i></li>        <li><i class="icofont icofont-refresh reload-card"></i></li>        <li><i class="icofont icofont-error close-card"></i></li>    </ul></div>
            </div>
            <table class="table">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>#</th>
                        <th>Level</th>
                        <th>Training Name</th>
                        <th>Year</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($trainings as $training)
                    <tr>
                        <td>#</td>
                        <td>{{ $training->level }}</td>
                        <td>{{ $training->trainingName}}</td>
                        <td>{{ $training->year}}</td>
                        <td>{{ $training->startDate}}</td>
                        <td>{{ $training->endDate}}</td>
                        <td><a href="{{ route('register-trainings.create', $training->id) }}">
                            <button type="button"  class="btn btn-default-border-blk" class="modal-body" data-toggle="modal"  data-backdrop="static" data-keyboard="false">Register</button></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection