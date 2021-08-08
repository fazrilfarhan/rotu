@extends('layouts.app')

@section('pageTitle', 'Manage Applications')

@section('content')

<div class="card" background-color="#a69d82">
    <div class="card-header">
        <h4><strong>Manage Applications</strong></h4>
        <div class="table-responsive">
            <div class="card-header-right">    <ul class="list-unstyled card-option">        <li><i class="icofont icofont-simple-left "></i></li>        <li><i class="icofont icofont-maximize full-card"></i></li>        <li><i class="icofont icofont-minus minimize-card"></i></li>        <li><i class="icofont icofont-refresh reload-card"></i></li>        <li><i class="icofont icofont-error close-card"></i></li>    </ul></div>
        </div>
    </div>
    <div class="card-block">
        <table class="table">
            <thead class="bg-primary text-white">
                <tr>
                    <th style="width: 60%">Equipments</th>
                    <th>Status Application</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <ul style="list-style-position:inside;">
                            @foreach ($details as $detail)
                                <li style="list-style-type: disc;">{{$detail->equipName}}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        {{$item->pivot->status}}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection