@extends('layouts.app')

@section('pageTitle', 'Manage Training Registration')

@section('content')

<div class="card">
    <div class="card-header">
        <h4><strong>Manage Training Registration</strong></h4>
        <div class="table-responsive">
            <div class="card-header-right">    <ul class="list-unstyled card-option">        <li><i class="icofont icofont-simple-left "></i></li>        <li><i class="icofont icofont-maximize full-card"></i></li>        <li><i class="icofont icofont-minus minimize-card"></i></li>        <li><i class="icofont icofont-refresh reload-card"></i></li>        <li><i class="icofont icofont-error close-card"></i></li>    </ul></div>
            </div>
            <table class="table">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>Num</th>
                        <th>Level</th>
                        <th>Training Name</th>
                        <th>Year</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Total Days</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($trainings as $training)
                    {{-- @foreach ($cadets as $cadet) --}}
                        {{-- @foreach ($cadet->trainings as $training) --}}
                        <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ $training->level }}</td>
                        <td>{{ $training->trainingName }}</td>
                        <td>{{ $training->year }}</td>
                        <td>{{ $training->startDate }}</td>
                        <td>{{ $training->endDate }}</td>
                        <td>{{ $training->totalDays}}</td>
                        <td class="d-flex">
                            <a href="{{ route('register-trainings.show', $training->id) }}"><button type="button"  class="btn btn-default-border-blk mr-1">View</button></a>
                            <a href="{{ route('register-trainings.edit', $training->id) }}"><button type="button"  class="btn btn-default-border-blk mr-1">Edit</button></a>
                            <form action="/trainings/{{$training->id}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit"  class="btn btn-default-border-blk">Delete</button>
                            </form>
                        </td>
                    </tr>
                    {{-- @endforeach --}}
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
{{-- <div class="card">
    <div class="card-header">
        <h4><strong>Recently Registered</strong></h4>
        <div class="card-header-right">    <ul class="list-unstyled card-option">        <li><i class="icofont icofont-simple-left "></i></li>        <li><i class="icofont icofont-maximize full-card"></i></li>        <li><i class="icofont icofont-minus minimize-card"></i></li>        <li><i class="icofont icofont-refresh reload-card"></i></li>        <li><i class="icofont icofont-error close-card"></i></li>    </ul></div>
    </div>
    <div class="card-block table-border-style">
        <div class="table-responsive">
            <table class="table">
                <thead>
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
                        <td>    
                            <a href="">View</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div> --}}

@endsection