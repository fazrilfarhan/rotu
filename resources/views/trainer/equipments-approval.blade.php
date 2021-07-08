@extends('layouts.app')

@section('pageTitle', 'Equipments Approval')

@section('content')

<div class="card" background-color="#a69d82">
    <div class="card-header">
    <h4><strong>Equipments Approval</strong></h4>
    <div class="card-block table-border-style">
            <table class="table">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>Military Number</th>
                        <th>Rank</th>
                        <th>Full Name</th>
                        <th>Equipments</th>
                        <th>Date Application</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cadets as $cadet)
                        <tr>
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
                                    $created = $cadet->equipments;
                                    echo $created[0]->pivot->created_at;
                                @endphp
                            </td>
                            <td>
                                @php
                                    $application = $cadet->equipments;
                                    echo $application[0]->pivot->status;
                                @endphp
                            </td>
                            <td>
                                {{-- <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button> --}}
                                <a href="/equipments-approve/{{$cadet->id}}" class="btn btn-primary waves-effect waves-light">Approve</a>
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
        <h4 class="card-title"><b>Recently Approved</b></h4>
        <div class="table-responsive">
            <table class="table">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>Military Number</th>
                        <th>Rank</th>
                        <th>Full Name</th>
                        <th>Equipments</th>
                        <th>Date Application</th>
                        <th>Date Approved</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($approvedList as $approved)
                        <tr>
                            <td>{{$approved->cadetID}}</td>
                            <td>{{$approved->cadetRank}}</td>
                            <td>{{$approved->cadetName}}</td>
                            <td>
                                <ul>
                                    @foreach ($approved->equipments as $equipment)
                                        <li style="list-style-type: disc;">{{$equipment->equipName}}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                @php
                                    $created = $approved->equipments;
                                    echo $created[0]->pivot->created_at;
                                @endphp
                            </td>
                            <td>
                                @php
                                    $application = $approved->equipments;
                                    echo $application[0]->pivot->updated_at;
                                @endphp
                            </td>
                            <td>
                                @php
                                    $application = $approved->equipments;
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