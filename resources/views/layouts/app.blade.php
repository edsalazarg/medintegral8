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
    <div style="margin: auto; width: 70%" class="">
      <a href="{{route('home.index')}}">Home</a>
      <a href="{{route('home.contact')}}">Contact</a>
      <a href="{{route('patients.index')}}">Patients</a>
      <a href="{{route('users.index')}}">Users</a>
      <span style="float: right">
        @guest
          <a href="{{route('auth.login')}}">Login</a>
          <a style="padding: 20px" href="{{route('auth.register')}}">Register</a>
        @endguest
        @auth
          <form style="display: inline-block" action="{{ route('auth.logout') }}" method="post">
              @csrf
              <button>Logout</button>
          </form>
        @endauth
      </span>
      <div class="container ">
          @if(session('status'))
              <div style="background-color: red">
                  {{session('status')}}
              </div>
          @endif
          @yield('content')
      </div>
    </div>
</body>
</html>
