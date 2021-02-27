@extends('layouts.app')

@section('title', 'Create the Allergy')

@section('content')
    <form action="{{route('allergies.store')}}" method="POST">
        @csrf
        @include('allergies.partials.form')
        <div><input type="submit" value="Create"></div>
    </form>
@endsection
