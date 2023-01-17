@extends('pages.layout')
@section('title', 'login')

{{-- CSS Primary For Login --}}
<link rel="stylesheet" href="{{ asset('frontend/css/log.css') }}">

@section('content')

    <div class="container">
        <!-- First column For Login  -->
        <div class="col">
            <img src="{{url('frontend/images/logo.png')}}" alt="">

            <form id="form" action="{{ route('loginClient') }}" name="myForm" method="POST" autocomplete="on">
                @csrf
                <!-- input Username -->
                <div class="inputBox">
                    <input type="text" name="email" id="email" placeholder="الايميل">
                    <div class="error-email">
                        @error('email')
                            {{ $message }}
                        @enderror

                    </div>
                    <!--user is reqiured-->
                    <ion-icon name="person"></ion-icon>
                </div>
                <!-- input Password -->
                <div class="inputBox">
                    <input type="password" name="pass" id="pass" placeholder="الرقم السري">
                    <div class="error-pass">
                        @error('pass')
                            {{ $message }}
                        @enderror
                    </div>
                    <!--pass is reqiured-->
                    <ion-icon name="lock-closed"></ion-icon>
                </div>
                <!-- button Submit -->
                <div class="inputBox">
                    <button type="submit" id="btn-sign-up">دخول</button>
                    {{-- Error For password --}}
                    @if ($message = Session::get('fail'))
                        <div class="error-submit" style=" background: radial-gradient( rgb(209 205 205) , #f00);">
                            {{ $message }}
                        </div>
                    @endif
                    {{-- Error For Email --}}
                    @if ($message = Session::get('failEmail'))
                        <div class="error-submit" style=" background: radial-gradient( rgb(209 205 205) , #f00);">
                            {{ $message }}
                        </div>
                    @endif

                </div>

                <div class="btn-footer">
                    <p>لاتماك حساب ؟ <a href="register">نعم</a> </p>
                </div>

            </form>
        </div>
        <!-- Second Column For Register -->
        <div class="col">
            <h1>سجل دخولك</h1>
            <img src="{{asset('frontend/images/teacher.png')}}" alt="">
            
        </div>
    </div>

@show
