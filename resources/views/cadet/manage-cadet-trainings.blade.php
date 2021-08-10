@extends('layouts.app')

@section('pageTitle', 'Manage Training Registration')

@section('content')

<!-- Main-body start -->
<div class="main-body">
    <div class="page-wrapper">
        <!-- Page-header start -->
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ti-anchor bg-c-dark-green card1-icon"></i>
                        <div class="d-inline">
                            <h4>Manage Training Registration</h4>
                            <span>Click on ‘View’ to view list of Cadet Officers registered in the training.</span>
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
                        <li class="breadcrumb-item"><a href="">Trainings</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('register-trainings.index') }}">Manage Registration</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->

<div class="card">
    <div class="card-header">
        <h4>List of Registered Training</strong></h4>
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
                            <form action="{{ route('register-trainings.destroy', $training->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit"  class="btn btn-default-border-blk">Unregister</button>
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
@endsection