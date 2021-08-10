@extends('layouts.app')

@section('pageTitle', 'UiTM ROTU Army Management System ')

@section('content')
        <div class="row mb-4 text-center">
            <div class="col-12 mb-3">
                <span style="text-align: center; font-size: 40px; font-weight: bold; color: white; text-shadow: 0px 0px 10px black;">UiTM ROTU ARMY MANAGEMENT SYSTEM</span>
            </div>
            <div class="col-12">
                <img src="./IMAGE/rotu1.png" alt="" style="width: 100%; border-radius: 1%; box-shadow: 0px 0px 10px 0px; object-fit: contain;">
            </div>
        </div>
        <div class="row" style="visibility: hidden"> 
            <!-- card1 start -->
            <div class="col-md-6 col-xl-3">
                <div class="card widget-card-1">
                    <div class="card-block-small">
                        <i class="ti-medall bg-c-dark-green card1-icon"></i>
                        <span class="text-c-dark-green f-w-600">Total Trainers</span>
                        <h4>5</h4>
                    </div>
                </div>
            </div>
            <!-- card1 end -->
            <!-- card1 start -->
            <div class="col-md-6 col-xl-3">
                <div class="card widget-card-1">
                    <div class="card-block-small">
                        <i class="ti-user bg-c-dark-green card1-icon"></i>
                        <span class="text-c-dark-green f-w-600">Total Cadets</span>
                        <h4>20</h4>
                    </div>
                </div>
            </div>
            <!-- card1 end -->
            <!-- card1 start -->
            <div class="col-md-6 col-xl-3">
                <div class="card widget-card-1">
                    <div class="card-block-small">
                        <i class="ti-anchor bg-c-dark-green card1-icon"></i>
                        <span class="text-c-dark-green f-w-600">Total Trainings</span>
                        <h4>3</h4>
                    </div>
                </div>
            </div>
            <!-- card1 end -->
            <!-- card1 start -->
            <div class="col-md-6 col-xl-3">
                <div class="card widget-card-1">
                    <div class="card-block-small">
                        <i class="ti-agenda bg-c-dark-green card1-icon"></i>
                        <span class="text-c-dark-green f-w-600">Total Equipments</span>
                        <h4>1500</h4>
                    </div>
                </div>
            </div>
            <!-- card1 end -->
        </div>
@endsection
