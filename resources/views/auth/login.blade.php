@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <!-- Authentication card start -->
        <div class="login-card card-block auth-body mr-auto ml-auto">
            <form class="md-float-material" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="text-center">
                    <img src="{{ asset('template/assets/images/auth/logo.png') }}" alt="logo.png">
                </div>
                <div class="auth-box">
                    <div class="row m-b-20">
                        <div class="col-md-12">
                            <h3 class="text-left txt-primary">Sign In</h3>
                        </div>
                    </div>
                    <hr/>
                    <div class="input-group">
                        <span class="input-group-addon" id="militaryNumber"><i class="icofont icofont-ui-email"></i></span>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Your Email Address">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="militaryNumber"><i class="ti-lock"></i></span>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" placeholder="Password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="row m-t-25 text-left">
                        <div class="col-sm-7 col-xs-12">
                            <div class="checkbox-fade fade-in-primary">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                    <span class="text-inverse">Remember me</span>
                                </label>
                            </div>
                        </div>
                        {{-- <div class="col-sm-5 col-xs-12 forgot-phone text-right">
                            @if (Route::has('password.request'))
                            <a  href="{{ route('password.request') }}" class="text-right f-w-600 text-inverse"> Forgot Your Password?</a>
                            @endif
                        </div> --}}
                    </div>
                    <div class="row m-t-30">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign in</button>
                        </div>
                    </div>
                    <hr/>
                    <div class="row m-t-30">
                        <div class="col-md-12">
                            <a href="/register"><button type="button" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Cadet Registration</button>
                            
                        </div>
                    </div>
                </div>
            </form>
            <!-- end of form -->
        </div>
        <!-- Authentication card end -->
    </div>
    <!-- end of col-sm-12 -->
</div>
@endsection
           