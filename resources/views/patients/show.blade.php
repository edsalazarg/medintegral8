@extends('layouts.app')

@section('title', $patient['name'])

@section('content')

    <h1>{{ $patient['name'] }}</h1>
    <p>{{ $patient['code'] }}</p>
    <p>{{ $patient['age'] }}</p>
{{--    <p>Added {{$patient->created_at->diffForHumans()}}</p>--}}

{{--    @if(now()->diffInMinutes($patient->created_at) < 5)--}}
{{--        <div class="alert alert-info">New!</div>--}}

{{--    @endif--}}
@endsection
