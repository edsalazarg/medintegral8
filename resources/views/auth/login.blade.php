@extends('layouts.app')

@section('title','Home Page')

@section('content')
  <h3>Login</h3>
    <form class="" action="{{route('auth.login')}}" method="post">
      @csrf
      <input style="@error('email') border:solid red @enderror" type="text" name="email" placeholder="E-mail" value="{{ old('email') }}"><br>
      <input style="@error('password') border:solid red @enderror" type="password" name="password" placeholder="Password"><br>
      <input type="checkbox" name="remember">
      <label for="remember">Remember me</label><br>
      <button type="submit">Login</button>
    </form>
@endsection
