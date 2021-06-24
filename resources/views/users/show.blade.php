@extends('layouts.app')

@section('title', 'Users')

@section('content')

{{--    <h3>User</h3>--}}

{{--    @if ($user != null)--}}
{{--        <div>--}}
{{--            <form class="" action="{{route('users.destroy', $user)}}" method="post">--}}
{{--                @csrf--}}
{{--                @method('DELETE')--}}
{{--                <button type="submit">Delete</button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    @else--}}
{{--        <p>No existe</p>--}}
{{--    @endif--}}

    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">Ver usuario</h3>
            </div>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>Nombre
                    <span class="text-danger">*</span>
                </label>
                <input id="name" name="name"  type="text" class="form-control" placeholder="Nombre" value="{{ old('name', optional($user ?? null)->name)}}" disabled="disabled"/>
                <br>
                <label>Correo electrónico
                    <span class="text-danger">*</span>
                </label>
                <input id="email" name="email"  type="text" class="form-control" placeholder="Correo electrónico" value="{{ old('email', optional($user ?? null)->email)}}" disabled="disabled"/>
                <br>
                <label>Fecha de creación
                    <span class="text-danger">*</span>
                </label>
                <input id="created_at" name="created_at"  type="text" class="form-control" placeholder="Fecha de creación" value="{{ old('created_at', optional($user ?? null)->created_at)}}" disabled="disabled"/>
                <br>
            </div>

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
@endsection
