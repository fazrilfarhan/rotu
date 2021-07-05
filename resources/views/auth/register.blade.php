@extends('layouts.master')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <!-- Authentication card start -->
                <div class="signup-card card-block auth-body mr-auto ml-auto">
                    <form class="md-float-material" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="text-center">
                            <img src="assets/images/auth/logo.png" alt="logo.png">
                        </div>
                        <div class="auth-box">
                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <h3 class="text-center txt-primary">Cadet Registrations</h3>
                                </div>
                            </div>
                            <hr/>
                            <div class="input-group">
                                <input type="numeric" class="form-control @error('militaryNumber') is-invalid @enderror " name="militaryNumber" value="{{ old('militaryNumber') }}" placeholder="Military Number">
                                <span class="md-line"></span>z
                                @error('militaryNumber')
                                    <small class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                            
                            {{-- <div class="input-group">
                                <input type="text" class="form-control @error('rank') is-invalid @enderror" name="rank" value="{{ old('rank') }}" placeholder="Rank">
                                <span class="md-line"></span>
                                @error('rank')
                                <small class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </small>
                            @enderror
                            </div> --}}

                            <div class="input-group">
                                <select name="rank" class="form-control @error('rank') is-invalid @enderror" name="rank" value="{{ old('rank') }}" placeholder="Rank">
                                    <option value="">Enter Rank</option>
                                    <option value="PK I">PK I</option>
                                    <option value="PKW I">PKW I</option>
                                    <option value="PK II">PK II</option>
                                    <option value="PKW II">PKW II</option>
                                    <option value="PKK">PKK</option>
                                    <option value="PKS">PKS</option>
                                    <option value="PRM">PRM</option>
                                    <option value="PRK">PRK</option>
                                </select>
                                @error('rank')
                                <small class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </small>
                                @enderror
                             </div>

                            <div class="input-group">
                                <input type="text" class="form-control @error('fullName') is-invalid @enderror" name="fullName" value="{{ old('fullName') }}" placeholder="Full Name">
                                <span class="md-line"></span>
                                @error('fullName')
                                <small class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </small>
                            @enderror
                            </div>
                            <div class="input-group">
                                    <select name="gender" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" placeholder="Gender">
                                        <option value="">Enter Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    @error('gender')
                                    <small class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                            </div>
                            <div class="input-group">
                                <input type="numeric" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" value="{{ old('phoneNumber') }}" placeholder="Phone Number">
                                <span class="md-line"></span>
                                @error('phoneNumber')
                                <small class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </small>
                            @enderror
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" placeholder="Address">
                                <span class="md-line"></span>
                                @error('address')
                                <small class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </small>
                            @enderror
                            </div>
                            <hr>   
                            <div class="input-group">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Your Email Address">
                                <span class="md-line"></span>
                                @error('email')
                                <small class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </small>
                            @enderror
                            </div>
                            <div class="input-group">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" placeholder="Choose Password">
                                <span class="md-line"></span>
                                @error('password')
                                <small class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </small>
                            @enderror
                            </div>
                            <div class="input-group">
                                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                                <span class="md-line"></span>
                            </div>
                            <div class="row m-t-30">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign Up</button>
                                </div>
                            </div>
                            <hr/>
                        </div>
                    </form>
                    <!-- end of form -->
                </div>
                <!-- Authentication card end -->
            </div>
            <!-- end of col-sm-12 -->
        </div>
@endsection           