@extends('layouts.app')

@section('title', 'Users')

@section('content')

    <h3>Registered users</h3>

    @if ($users->count())
        <ul>
        @foreach ($users as $user)
          <li>{{$user->name}}</li>  
        @endforeach
        </ul>
    @else
        <p>Lista vacia</p>
    @endif
@endsection