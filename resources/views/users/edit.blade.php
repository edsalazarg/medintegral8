@extends('layouts.app')

@section('title', 'Users')

@section('content')


    <div>
        <form class="" action="{{route('users.update', $user)}}" method="post">
            @csrf
            <div class="card card-custom">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">Editar usuario</h3>
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
                    </div>
                    <div><input type="submit" value="Actualizar" class="btn btn-primary btn-block"></div>
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
        </form>
    </div>
@endsection
