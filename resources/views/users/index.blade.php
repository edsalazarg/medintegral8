@extends('layouts.app')

@section('title', 'Users')

@section('content')

    <h3>Registered users</h3>

    @if ($users->count())
        @foreach ($users as $user)
          <div>
              <span>{{$user->name}}</span>

              <form class="" action="{{route('users.destroy', $user)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit">Delete</button>
              </form>
              <form class="" action="{{route('users.edit', $user)}}" method="get">
                  @csrf
                  <button type="submit">Edit</button>
              </form>

          </div>
        @endforeach
    @else
        <p>Lista vacia</p>
    @endif
@endsection
