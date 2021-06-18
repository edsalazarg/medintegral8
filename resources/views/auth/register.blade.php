@extends('layouts.app')

@section('title','Home Page')

@section('content')
  <h3>New user</h3>
    <form class="" action="{{route('auth.register')}}" method="post">
      @csrf
      <input style="@error('name') border:solid red @enderror" type="text" name="name" placeholder="Nombre" value="{{ old('name') }}"><br>
      <input style="@error('email') border:solid red @enderror" type="text" name="email" placeholder="E-mail" value="{{ old('email') }}"><br>
      <input style="@error('password') border:solid red @enderror" type="password" name="password" placeholder="Contraseña"><br>
      <input style="@error('password_confirmation') border:solid red @enderror" type="password" name="password_confirmation" placeholder="Repeat password"><br>
        <label>Rol del usuario</label>
        <select style="@error('password_confirmation') border:solid red @enderror" name="user_role">
            <option value = "User">Usuario</option>
            <option value = "Admin">Admin</option>
        </select><br>
      <button type="submit">Register</button>
    </form>
@endsection
