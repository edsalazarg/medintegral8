<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Medicina Integral - @yield('title')</title>
</head>
<body>
    <a href="{{route('home.index')}}">Home</a>
    <a href="{{route('home.contact')}}">Contact</a>
    <a href="{{route('patients.index')}}">Patients</a>
    <div class="container ">
        @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif
        @yield('content')
    </div>
</body>
</html>
