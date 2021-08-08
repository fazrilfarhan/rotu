@extends('layouts.app')

@section('pageTitle', 'Manage Equipments')

@section('content')

<div class="card">
    <div class="card-header">
        <h4><strong>Manage Equipments</strong></h4>
        <div class="table-responsive">
            <div class="card-header-right">    <ul class="list-unstyled card-option">        <li><i class="icofont icofont-simple-left "></i></li>        <li><i class="icofont icofont-maximize full-card"></i></li>        <li><i class="icofont icofont-minus minimize-card"></i></li>        <li><i class="icofont icofont-refresh reload-card"></i></li>        <li><i class="icofont icofont-error close-card"></i></li>    </ul></div>
            </div>
            <table class="table">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>Num</th>
                        <th>Equipment Name</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($equipments as $equipment)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ $equipment->equipName }}</td>
                        <td>{{ $equipment->quantity}}</td>
                        <td>
                            <a href="{{ route('equipments.edit', $equipment->id) }}"><button type="button"  class="btn btn-default-border-blk" class="modal-body" data-toggle="modal"  data-backdrop="static" data-keyboard="false">Update</button></a>

                            {{-- <a href="#" onclick="
                                event.preventDefault();
                                document.getElementById('delete').submit();
                            "><button type="button"  class="btn btn-default-border-blk" class="modal-body" data-toggle="modal"  data-backdrop="static" data-keyboard="false">Delete</button></a>
                            <form id="delete" action="{{ route('equipments.destroy', $equipment->id) }}" method="POST" class="d-none">
                                @method('DELETE')
                                @csrf
                            </form> --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection