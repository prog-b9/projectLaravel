<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Unknown Page')</title>
     <!-- link css normalize -->
     <link rel="stylesheet" href="{{asset('frontend/css/normalize.css')}}">
     <!-- icons -->
     <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Font Cairo Goggle -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="{{url('frontend/images/logo.png')}}">
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
</head>
<style>
    body{
        direction: rtl;
        background-image: linear-gradient(to top,  #fff, rgba(154, 208, 225, 1));
    background-repeat: no-repeat;
    }
    * {
    font-family: 'Cairo', sans-serif;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

:root {
    --color-primary: #9AD0E1;
    --transtion-timing: 0.3s;
    --black-color: #333;
    --blue-dark-color: #3CADD0;
    --blueWithWhite: #F2FEFF;
    --shadow: 1px 1px 5px 1px rgba(0, 0, 0, 0.1);
    --radiusForContainer: 10px;
    --radiusInput: 10px;

}

.container {
    margin-left: auto;
    margin-right: auto;
}
a{
    text-decoration: none;
}
ul{
    list-style: none;
}

/* Small  Media*/
@media (min-width:768px) {
    .container {
        width: 750px;
    }
}

/* Medium Media */
@media (min-width:992px) {
    .container {
        width: 970px;
    }
}

/* Large Media */
@media (min-width:1200px) {
    .container {
        width: 1170px;
    }
}


</style>

<body>

   
    @section('content')
    @endsection

    @section('footer')
    @endsection

</body>

</html>
