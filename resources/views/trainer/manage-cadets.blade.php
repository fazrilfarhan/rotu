@extends('layouts.app')

@section('pageTitle', 'Manage Cadets')

@section('content')

<!-- Main-body start -->
<div class="main-body">
    <div class="page-wrapper">
        <!-- Page-header start -->
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ti-user bg-c-dark-green card1-icon"></i>
                        <div class="d-inline">
                            <h4>Manage Cadets</h4>
                            <span>Click on ‘Edit’ to view and update Cadet information. Click on 'Delete' to delete Cadet information.</span>
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
                        <li class="breadcrumb-item"><a href="{{ route('cadets.index') }}">Manage Cadets</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->

<div class="card">
    <div class="card-header">
        <h4>List of Cadet Officers</h4>
        <div class="table-responsive">
            <div class="card-header-right">    <ul class="list-unstyled card-option">        <li><i class="icofont icofont-simple-left "></i></li>        <li><i class="icofont icofont-maximize full-card"></i></li>        <li><i class="icofont icofont-minus minimize-card"></i></li>        <li><i class="icofont icofont-refresh reload-card"></i></li>        <li><i class="icofont icofont-error close-card"></i></li>    </ul></div>
            </div>
            <table class="table">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>Num</th>
                        <th>Military Number</th>
                        <th>Rank</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cadets as $cadet)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ $cadet->cadetID }}</td>
                        <td>{{ $cadet->cadetRank}}</td>
                        <td>{{ $cadet->cadetName}}</td>
                        <td>
                            <a href="{{ route('cadets.edit', $cadet->id) }}"><button type="button"  class="btn btn-default-border-blk" class="modal-body" data-toggle="modal"  data-backdrop="static" data-keyboard="false">Edit</button></a>

                            <a href="#" onclick="
                                event.preventDefault();
                                document.getElementById('delete').submit();
                            "><button type="button"  class="btn btn-default-border-blk" class="modal-body" data-toggle="modal"  data-backdrop="static" data-keyboard="false">Delete</button></a>
                            <form id="delete" action="{{ route('cadets.destroy', $cadet->id) }}" method="POST" class="d-none">
                                @method('DELETE')
                                @csrf
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection