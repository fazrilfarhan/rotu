@extends('layouts.app')

@section('pageTitle', 'UiTM ROTU Army Management System ')

@section('content')
        <div class="row mb-4 text-center">
            <div class="col-12 mb-3">
                <span style="text-align: center; font-size: 40px; font-weight: bold; color: white; text-shadow: 0px 0px 10px black;">UiTM ROTU ARMY MANAGEMENT SYSTEM</span>
            </div>
            <div class="col-12">
                <img src="./IMAGE/rotu1.jpg" alt="" style="width: 100%; border-radius: 1%; box-shadow: 0px 0px 10px 0px; object-fit: contain;">
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

            <!-- Data widget start -->
            {{-- <div class="col-md-12 col-xl-6">
                <div class="card project-task">
                    <div class="card-header">
                        <div class="card-header-left ">
                            <h5>Time spent : project &amp; task</h5>
                        </div>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="icofont icofont-simple-left "></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block p-b-10">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Project & Task</th>
                                        <th>Time Spents</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>
                                            <div class="task-contain">
                                                <h6 class="bg-c-yellow d-inline-block text-center">L</h6>
                                                <p class="d-inline-block m-l-20">Logo Design</p>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="d-inline-block m-r-20">4 : 36</p>
                                            <div class="progress d-inline-block">
                                                <div class="progress-bar bg-c-yellow" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="task-contain">
                                                <h6 class="bg-c-green d-inline-block text-center">A</h6>
                                                <p class="d-inline-block m-l-20">Appestia landing Page</p>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="d-inline-block m-r-20">4 : 36</p>
                                            <div class="progress d-inline-block">
                                                <div class="progress-bar bg-c-green" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="task-contain">
                                                <h6 class="bg-c-blue d-inline-block text-center">L</h6>
                                                <p class="d-inline-block m-l-20">Logo Design</p>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="d-inline-block m-r-20">4 : 36</p>
                                            <div class="progress d-inline-block">
                                                <div class="progress-bar bg-c-blue" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-6">
                <div class="card add-task-card">
                    <div class="card-header">
                        <div class="card-header-left">
                            <h5>To do list</h5>
                        </div>
                        <div class="card-header-right">
                            <button class="btn btn-card btn-primary">Add task </button>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="to-do-list">
                            <div class="checkbox-fade fade-in-primary d-block">
                                <label class="check-task d-block">
                                    <input type="checkbox" value="">
                                    <span class="cr">
                                        <i class="cr-icon icofont icofont-ui-check txt-default"></i>
                                    </span>
                                    <span><h6>Schedule Meeting with Compnes <span class="label bg-c-green m-l-10 f-10">2 week</span></h6></span>
                                    <div class="task-card-img m-l-40">
                                        <a href="#!"><img src="assets/images/avatar-2.jpg" data-toggle="tooltip" title="Lary Doe" alt="" class="img-40"></a>
                                        <a href="#!"><img src="assets/images/avatar-3.jpg" data-toggle="tooltip" title="Alia" alt="" class="img-40 m-l-10"></a>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div class="to-do-list">
                            <div class="checkbox-fade fade-in-primary d-block">
                                <label class="check-task d-block">
                                    <input type="checkbox" value="">
                                    <span class="cr">
                                        <i class="cr-icon icofont icofont-ui-check txt-default"></i>
                                    </span>
                                    <span><h6>Meeting With HOD's and borad</h6><p class="text-muted m-l-40">23 january 2003</p></span>
                                </label>
                            </div>
                        </div>
                        {{-- <div class="to-do-list">
                            <div class="checkbox-fade fade-in-primary d-block">
                                <label class="check-task d-block">
                                    <input type="checkbox" value="">
                                    <span class="cr">
                                        <i class="cr-icon icofont icofont-ui-check txt-default"></i>
                                    </span>
                                    <span><h6>Create template, admin with responsive<span class="label bg-c-pink m-l-10">2 week</span></h6></span>
                                    <div class="task-card-img m-l-40">
                                        <a href="#!"><img src="assets/images/avatar-2.jpg" data-toggle="tooltip" title="Alia" alt="" class="img-40"></a>
                                        <a href="#!"><img src="assets/images/avatar-3.jpg" data-toggle="tooltip" title="Suzen" alt="" class="img-40 m-l-10"></a>
                                        <a href="#!"><img src="assets/images/avatar-4.jpg" data-toggle="tooltip" title="Lary Doe" alt="" class="img-40 m-l-10"></a>
                                        <a href="#!"><img src="assets/images/avatar-2.jpg" data-toggle="tooltip" title="Josephin Doe" alt="" class="img-40 m-l-10"></a>
                                    </div>
                                </label>
                            </div>
                        </div> --}}
                        {{-- <div class="to-do-list">
                            <div class="checkbox-fade fade-in-primary d-block">
                                <label class="check-task d-block">
                                    <input type="checkbox" value="">
                                    <span class="cr">
                                        <i class="cr-icon icofont icofont-ui-check txt-default"></i>
                                    </span> --}}
                                    {{-- <span><h6>Meeting With HOD's and borad</h6>
                                        <p class="text-muted m-l-40">23 january 2003</p></span>
                                        {{-- <div class="task-card-img m-l-40">
                                            <a href="#!"><img src="assets/images/avatar-2.jpg" data-toggle="tooltip" title="Lary Doe" alt="" class="img-40"></a>
                                            <a href="#!"><img src="assets/images/avatar-3.jpg" data-toggle="tooltip" title="Alia" alt="" class="img-40 m-l-10"></a>
                                            <a href="#!"><img src="assets/images/avatar-2.jpg" data-toggle="tooltip" title="Josephin Doe" alt="" class="img-40 m-l-10"></a>
                                        </div> --}}
                                {{-- </label>
                            </div>
                        </div>
                    </div>
                </div>Haa???
            </div> --}}
            <!-- Data widget End -->
        </div>
    
@endsection
