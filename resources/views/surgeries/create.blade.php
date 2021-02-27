@extends('layouts.app')

@section('title', 'Create the Surgery')

@section('content')
    <form action="{{route('surgeries.store')}}" method="POST">
        @csrf
        @include('surgeries.partials.form')
        <div><input type="submit" value="Create"></div>
    </form>
@endsection
