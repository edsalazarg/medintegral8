@extends('layouts.app')

@section('title', 'Users')

@section('content')

    <h3>Edit Medical record</h3>

    @if ($user != null)
        <div>
            <form class="" action="{{route('users.update', $user)}}" method="post">
                @csrf
                <input style="@error('name') border:solid red @enderror" type="text" name="name" placeholder="Name" value="{{ $user->name }}"><br>
                <input style="@error('email') border:solid red @enderror" type="text" name="email" placeholder="E-mail" value="{{ $user->email }}"><br>
                <input style="@error('password') border:solid red @enderror" type="password" name="password" placeholder="Password"><br>
                <input style="@error('password_confirmation') border:solid red @enderror" type="password" name="password_confirmation" placeholder="Repeat password"><br>
                <button type="submit">Save</button>
            </form>
        </div>
    @else
        <p>No existe</p>
    @endif
@endsection
