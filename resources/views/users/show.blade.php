@extends('layouts.app')

@section('title', 'Users')

@section('content')

    <h3>User</h3>

    @if ($user != null)
        <div>
            <span>{{$user->id}}</span> <br>
            <span>{{$user->name}}</span> <br>
            <span>{{$user->email}}</span>
            <form class="" action="{{route('users.destroy', $user)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @else
        <p>No existe</p>
    @endif
@endsection
