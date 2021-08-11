@extends('layouts.app')

@section('pageTitle', 'Application Approval')

@section('content')

<!-- Main-body start -->
<div class="main-body">
    <div class="page-wrapper">
        <!-- Page-header start -->
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ti-agenda bg-c-dark-green card1-icon"></i>
                        <div class="d-inline">
                            <h4>Application Approval</h4>
                            <span>Click on ‘Approve’ to approve the application from Cadet Officers.</span>
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
                            <li class="breadcrumb-item"><a href="">Application Approval</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-header end -->

        <div class="card" background-color="#a69d82">
            <div class="card-header">
                <h4>List of Application</h4>
                <div class="table-responsive">
        
                    <div class="card-header-right">    <ul class="list-unstyled card-option">        <li><i class="icofont icofont-simple-left "></i></li>        <li><i class="icofont icofont-maximize full-card"></i></li>        <li><i class="icofont icofont-minus minimize-card"></i></li>        <li><i class="icofont icofont-refresh reload-card"></i></li>        <li><i class="icofont icofont-error close-card"></i></li>    </ul></div>
                </div>
            </div>
            <div class="card-block table-border-style px-3 pb-3">
                <table class="table">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>Num</th>
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
                                <td>{{$loop->iteration}}</td>
                                <td>{{$cadet->cadetID}}</td>
                                <td>{{$cadet->cadetRank}}</td>
                                <td>{{$cadet->cadetName}}</td>
                                <td>
                                    <ul>
                                        @foreach ($cadet->equipments as $equipment)
                                            <li style="list-style-type: disc; white-space: break-spaces">{{$equipment->equipName}}</li>
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
        {{-- end card --}}
        
        <div class="card" background-color="#a69d82">
            <div class="card-header">
                <h4>Recently Approved</h4>
                <div class="table-responsive">

                    <div class="card-header-right">    <ul class="list-unstyled card-option">        <li><i class="icofont icofont-simple-left "></i></li>        <li><i class="icofont icofont-maximize full-card"></i></li>        <li><i class="icofont icofont-minus minimize-card"></i></li>        <li><i class="icofont icofont-refresh reload-card"></i></li>        <li><i class="icofont icofont-error close-card"></i></li>    </ul></div>
                </div>
            </div>
            <div class="card-block table-border-style px-3 pb-3">
                <table class="table">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>Num</th>
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
                                <td>{{$loop->iteration}}</td>
                                <td>{{$approved->cadetID}}</td>
                                <td>{{$approved->cadetRank}}</td>
                                <td>{{$approved->cadetName}}</td>
                                <td>
                                    <ul>
                                        @foreach ($approved->equipments as $equipment)
                                            <li style="list-style-type: disc; white-space: break-spaces">{{$equipment->equipName}}</li>
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
        {{-- End card --}}
    </div>
    {{-- End page wrapper --}}
</div>
{{-- End main page --}}

@endsection