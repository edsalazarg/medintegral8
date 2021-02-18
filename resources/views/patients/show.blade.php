@extends('layouts.app')

@section('title', $patient['name'])

@section('content')

    <h1>{{ $patient['firstName'] }}</h1>
    <h1>{{ $patient['lastName'] }}</h1>
    <p>Telephone: {{ $patient['telephone'] }}</p>
    <p>Age: {{ $patient['age'] }}</p>
    <p>Department: {{ $patient['department'] }}</p>
    <p>Position: {{ $patient['position'] }}</p>
    <p>Telephone: {{ $patient['telephone'] }}</p>
    <p>Emergency Contact: {{ $patient['emergency_contact'] }}</p>
    <p>Site: {{ $patient['site'] }}</p>
{{--    <p>Added {{$patient->created_at->diffForHumans()}}</p>--}}

{{--    @if(now()->diffInMinutes($patient->created_at) < 5)--}}
{{--        <div class="alert alert-info">New!</div>--}}

{{--    @endif--}}
@endsection
