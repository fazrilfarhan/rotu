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
                        <th>Num</th>
                        <th>Military Number</th>
                        <th>Rank</th>
                        <th>Full Name</th>
                        <th>Equipments</th>
                        <th>Date Approved</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cadetApproved as $cadet)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$cadet->cadetID}}</td>
                            <td>{{$cadet->cadetRank}}</td>
                            <td>{{$cadet->cadetName}}</td>
                            <td>
                                <ul>
                                    @foreach ($cadet->equipments as $equipment)
                                        <li style="list-style-type: disc;">{{$equipment->equipName}}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                @php
                                    $application = $cadet->equipments;
                                    echo $application[0]->pivot->updated_at;
                                @endphp
                            </td>
                            <td>
                                @php
                                    $application = $cadet->equipments;
                                    echo $application[0]->pivot->status;
                                @endphp
                            </td>
                            <td>
                                <a href="/equipments-return/{{$cadet->id}}" class="btn btn-primary waves-effect waves-light">Return</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<div>
</div>
<div class="card">
    <div class="card-header">
        <h4 class="card-title"><b>Recently Return</b></h4>
        <div class="table-responsive">
            <table class="table">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>Num</th>
                        <th>Military Number</th>
                        <th>Rank</th>
                        <th>Full Name</th>
                        <th>Items</th>
                        <th>Date Application</th>
                        <th>Date Returned</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cadetReturned as $cadet)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$cadet->cadetID}}</td>
                            <td>{{$cadet->cadetRank}}</td>
                            <td>{{$cadet->cadetName}}</td>
                            <td>
                                <ul>
                                    @foreach ($cadet->equipments as $equipment)
                                        <li style="list-style-type: disc;">{{$equipment->equipName}}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                @php
                                    $application = $cadet->equipments;
                                    echo $application[0]->pivot->created_at;
                                @endphp
                            </td>
                            <td>
                                @php
                                    $application = $cadet->equipments;
                                    echo $application[0]->pivot->updated_at;
                                @endphp
                            </td>
                            <td>
                                @php
                                    $application = $cadet->equipments;
                                    echo $application[0]->pivot->status;
                                @endphp
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection