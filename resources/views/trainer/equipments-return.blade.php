@extends('layouts.app')

@section('pageTitle', 'Equipments Return')

@section('content')

<div class="card" background-color="#a69d82">
    <div class="card-header">
        <h4><strong>Equipments Return</strong></h4>
        <div class="table-responsive">

        <div class="card-header-right">    <ul class="list-unstyled card-option">        <li><i class="icofont icofont-simple-left "></i></li>        <li><i class="icofont icofont-maximize full-card"></i></li>        <li><i class="icofont icofont-minus minimize-card"></i></li>        <li><i class="icofont icofont-refresh reload-card"></i></li>        <li><i class="icofont icofont-error close-card"></i></li>    </ul></div>
    </div>
    <div class="card-block table-border-style">
            <table class="table">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>#</th>
                        <th>Military Number</th>
                        <th>Rank</th>
                        <th>Full Name</th>
                        <th>Equipments</th>
                        <th>Date Application</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
<div>
</div>
{{-- <div class="card">
    <div class="card-header">
        <h4 class="card-title">Recently Return</h4>
        <div class="table-responsive">
            <table class="table">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>#</th>
                        <th>Military Number</th>
                        <th>Rank</th>
                        <th>Full Name</th>
                        <th>Items</th>
                        <th>Date Return</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div> --}}

@endsection