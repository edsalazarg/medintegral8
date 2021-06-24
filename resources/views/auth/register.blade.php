@extends('layouts.app')

@section('title','Home Page')

@section('content')
    <form class="" action="{{route('auth.register')}}" method="post">
        @csrf
        <div class="card card-custom">
            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                <div class="card-title">
                    <h3 class="card-label">Crear usuario</h3>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Nombre
                        <span class="text-danger">*</span>
                    </label>
                    <input id="name" name="name"  type="text" class="form-control" placeholder="Nombre" value="{{ old('name', optional($user ?? null)->name)}}" />
                    <br>
                    <label>Correo electrónico
                        <span class="text-danger">*</span>
                    </label>
                    <input id="email" name="email"  type="text" class="form-control" placeholder="Correo electrónico" value="{{ old('email', optional($user ?? null)->email)}}" />
                    <br>
                    <label>Contraseña
                        <span class="text-danger">*</span>
                    </label>
                    <input id="password" name="password"  type="password" class="form-control" placeholder="Contraseña"  />
                    <br>
                    <label>Confirmar contraseña
                        <span class="text-danger">*</span>
                    </label>
                    <input id="password_confirmation" name="password_confirmation"  type="password" class="form-control" placeholder="Repetir contraseña"  />
                    <br>
{{--                    <select style="@error('password_confirmation') border:solid red @enderror" name="user_role">--}}
{{--                        <option value = "User">Usuario</option>--}}
{{--                        <option value = "Admin">Admin</option>--}}
{{--                    </select><br>--}}
                    <label for="site">Rol del usuario</label>
                    <select id="site" name="user_role" class="form-control form-control-lg form-control-solid">
                        <option value="User">Usuario</option>
                        <option value="Admin">Admin</option>
                    </select>

                </div>
                <div><input type="submit" value="Crear" class="btn btn-primary btn-block"></div>
                @if($errors->any())
                    <div>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>

{{--      <input style="@error('name') border:solid red @enderror" type="text" name="name" placeholder="Nombre" value="{{ old('name') }}"><br>--}}
{{--      <input style="@error('email') border:solid red @enderror" type="text" name="email" placeholder="E-mail" value="{{ old('email') }}"><br>--}}
{{--      <input style="@error('password') border:solid red @enderror" type="password" name="password" placeholder="Contraseña"><br>--}}
{{--      <input style="@error('password_confirmation') border:solid red @enderror" type="password" name="password_confirmation" placeholder="Repeat password"><br>--}}
{{--        <label>Rol del usuario</label>--}}
{{--        <select style="@error('password_confirmation') border:solid red @enderror" name="user_role">--}}
{{--            <option value = "User">Usuario</option>--}}
{{--            <option value = "Admin">Admin</option>--}}
{{--        </select><br>--}}
{{--      <button type="submit">Register</button>--}}
    </form>
@endsection
