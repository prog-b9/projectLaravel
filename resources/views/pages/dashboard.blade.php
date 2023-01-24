@extends('pages.layout')
@section('title', 'Home Page')

@section('content')

<link rel="stylesheet" href="{{ asset('frontend/css/homePage.css') }}">
<link rel="icon" href="{{url('frontend/images/logo.png')}}">

    <header>
        <div class="container">
            <ul>
                <li><a href="#">الصفحة الرئسية</a></li>
                <li><a href="#">المدرسين </a></li>
                <li class="active"><a href="#">{{$data->email}}</a></li>
                <li> <a href="/logout">logout</a></li>
               
            </ul>
            <img src="{{url('frontend/images/logo.png')}}" alt="">
        </div>
    </header>

    <div class="landing">
        <div class="container">
            <img src="{{url('frontend/images/teacher.png')}}" alt="">
            <p>منصة لأختيار مدرس خصوصي يساعدك في فهم المواد التي تحتاجها</p>
        </div>
    </div>

    <div class="teachers">
        <div class="container">
            <h2>المدرسين : </h2>
            <div class="content">
                @php
                $count = 0;   
               @endphp
           
                @foreach ($dataTeacher as $item)
              
                <div class="box">
                    <div class="head">
                        <div class="materials">
                            
                            <div class="material-ar"> {{$item["materialAr"]}} </div>
                            <div class="material-en">{{$item["materialEn"]}}</div>
                        </div>
                        <img src="{{url('frontend/images/profile.png')}}" alt="">
                    </div>
                    <div class="center">
                        <span>الاستاذ :   </span>  <span class="name-teacher">{{$item["nameTeacher"]}}  </span>
                    </div>
                    <var>
                    @php
                    $idd = $item["id"]; 
                    
                    @endphp
                </var>
                
                <a href="payPage/{{$idd}}" >اختيار</a>
            </div>
                @endforeach
                
                
            </div>
        </div>
    </div>










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
            {{-- this Account from login  session--}}
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