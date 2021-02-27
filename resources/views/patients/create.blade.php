@extends('layouts.app')

@section('title', 'Create the Patient')

@section('content')
    <form action="{{route('patients.store')}}" method="POST">
        @csrf
        @include('patients.partials.form')
        <div><input type="submit" value="Create"></div>
    </form>
@endsection
