@extends('pages.layout')
@section('title', 'register')


{{-- CSS Primary For Register --}}
<link rel="stylesheet" href="{{ asset('frontend/css/reg.css') }}">

{{-- the section is FORM Register --}}
@section('content')
    <div class="container">
        <!-- First column For Register  -->
        <div class="col">
            {{-- <h1>sign up</h1> --}}
            
            <form id="form" action="{{ route('registerClient') }}" method="POST" autocomplete="on">
                @csrf
                <!-- input Email -->
                <img src="{{url('frontend/images/logo.png')}}" alt="">
                <div class="inputBox">
                    <input type="text" name="email" id="email" placeholder="الايميل">
                    <div class="error-email">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>
                    <!--email is reqiured-->
                    <ion-icon name="mail"></ion-icon>
                </div>
                <!-- input Phone-Number -->
                <div class="inputBox">
                    <input type="text" name="phone" id="phone" placeholder="رقم الهاتف">
                    <div class="error-phone">
                        @error('phone')
                            {{ $message }}
                        @enderror
                    </div>
                    <!--phone is reqiured-->
                    <ion-icon name="call"></ion-icon>
                </div>
                <!-- input Username -->
                <div class="inputBox">
                    <input type="text" name="user" id="user" placeholder="اسم المستخدم">
                    <div class="error-user">
                        @error('user')
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
                    <button type="submit" id="btn-sign-up">أنشاء الحساب</button>

                    {{-- Session::has("here write ->with('success','............'))") --}}
                    {{-- @if (Session::has('success'))
                        <div class="error-submit">
                         
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if (Session::has('fail'))
                        <div class="error-submit">
                            {{ Session::get('fail') }}
                        </div>
                    @endif --}}

                    @if ($message = Session::get('success'))
                        <div class="error-submit">
                            {{ $message }}
                        </div>
                    @endif

                </div>

                <div class="btn-footer">
                    <p>تملك حساب ؟  <a href="login">نعم</a> </p>
                </div>

            </form>
        </div>
        <!-- Second Column For Login -->
        <div class="col">
            <h2>أنشاء حسابك</h2>
            <img src="{{asset('frontend/images/teacher.png')}}" alt="">
        </div>
    </div>

@show

