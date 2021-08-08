@extends('layouts.app')

@section('pageTitle', 'Manage Officers')

@section('content')

<div class="card">
    <div class="card-header">
        <h4><strong>Manage Trainers</strong></h4>
        <div class="table-responsive">

        <div class="card-header-right">    <ul class="list-unstyled card-option">        <li><i class="icofont icofont-simple-left "></i></li>        <li><i class="icofont icofont-maximize full-card"></i></li>        <li><i class="icofont icofont-minus minimize-card"></i></li>        <li><i class="icofont icofont-refresh reload-card"></i></li>        <li><i class="icofont icofont-error close-card"></i></li>    </ul></div>
    </div>
    <div class="card-block table-border-style">
            <table class="table">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>Num</th>
                        <th>Officer ID</th>
                        <th>Rank</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($trainers as $trainer)
                    @if($trainer->id !== Auth::user()->userable->id)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ $trainer->trainerNum }}</td>
                        <td>{{ $trainer->trainerRank}}</td>
                        <td>{{ $trainer->user->fullName }}</td>
                        <td>
                            <a href="{{ route('trainers.edit', $trainer->id) }}"><button type="button"  class="btn btn-default-border-blk" class="modal-body" data-toggle="modal"  data-backdrop="static" data-keyboard="false">Edit</button></a>

                            <a href="#" onclick="
                                event.preventDefault();
                                document.getElementById('delete').submit();
                            "><button type="button"  class="btn btn-default-border-blk" class="modal-body" data-toggle="modal"  data-backdrop="static" data-keyboard="false">Delete</button></a>
                            <form id="delete" action="{{ route('trainers.destroy', $trainer->id) }}" method="POST" class="d-none">
                                @method('DELETE')
                                @csrf
                            </form>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection