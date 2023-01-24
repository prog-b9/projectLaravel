@extends('pages.layout')
@section('title', 'Pay Page')

@section('content')

    <link rel="stylesheet" href="{{ asset('frontend/css/payPage.css') }}">
    <link rel="icon" href="{{ url('frontend/images/logo.png') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>


    <header>
        <div class="container">
            <ul>
                <li><a href="#">الصفحة الرئسية</a></li>
                <li><a href="#">المدرسين </a></li>
                <li class="active"><a href="#">{{ $data->email }}</a></li>
            </ul>
            <img src="{{ url('frontend/images/logo.png') }}" alt="">
        </div>
    </header>
    @php
        $myEmail = $data->email;
    @endphp


    <div class="teachers">
        <div class="container">
            <div class="content">
                <div class="box">
                    <div class="head">
                        <div class="materials">
                            <div class="material-ar">{{ $dataTeacher[$id]['materialAr'] }}</div>
                            <div class="material-en">{{ $dataTeacher[$id]['materialEn'] }}</div>
                        </div>
                        <img src="{{ url('frontend/images/profile.png') }}" alt="">
                    </div>
                    <div class="center">
                        <span>الاستاذ : </span><span class="name-teacher">{{ $dataTeacher[$id]['nameTeacher'] }} </span>
                    </div>
                    <div class="detail">
                        <h3>نبذة عن المدرس : </h3>
                        <p>{{ $dataTeacher[$id]['detail'] }}</p>
                    </div>
                    @php
                        $mail = $dataTeacher[$id]['emailTeacher'];
                    @endphp
                    <h3>للتواصل مع المدرس اضغط على الإيميل </h3>
                    <a class="txt-mail" href="mailto:{{$mail}}">{{$mail}}</a>
                </div>
            </div>
        </div>
    </div>

    {{-- <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>
        let btn = document.querySelector(".btn");
        let name = document.getElementById("yourName");
        let email = document.getElementById("yourEmail");
        let msg = document.getElementById("yourMessage");

        btn.addEventListener("click", (e) => {
            // e.preventDefault();

            console.log("clickable");
            console.log(name.value);
            console.log(email.value);
            console.log(msg.value);
            Email.send({
                Host: "smtp.gmail.com",
                Username: "pasel001001@gmail.com",
                Password: "iyioknmdoczlbimk",
                To: "pasel001001@gmail.com",
                From: email.value,
                Subject:name.value,
                Body: msg.value + " <br>: أهلاً بك وشكراً على أختياري لتدريسك "
            }).then(
                message => alert(message)
            );
        });
    </script> --}}












    {{-- 

    <h1>page Dashboard</h1>
<br><br><br>
    <h1>My Account: </h1>
    <table border="1">
        <tr>
            <th>Email</th>
            <th>PhoneNumber</th>
            <th>Username</th>
        </tr>
        
        <tr>
            {{-- this Account from login  session --}}
    {{-- <td>{{$data->email}}</td>
           <td>{{$data->phone_number}}</td>
           <td>{{$data->username}}</td>
           <td><a href="login">logout</a></td>
        </tr>
    </table>
    <br><br><br><br><br><br><br>


    <h1>All Data : </h1>
    <table border="1">
        <tr>
            <th>Email</th>
            <th>PhoneNumber</th>
            <th>Username</th>
        </tr>
        <tr>
            @foreach ($clients as $item)
            <tr>
            {{-- this Accounts all Data --}}
    {{-- <td>{{$item->email}}</td>
               <td>{{$item->phone_number}}</td>
               <td>{{$item->username}}</td>
            </tr>
            @endforeach
        
    </table> --}}
@show
