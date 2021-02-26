@extends('layouts.app')

@section('title', 'Blog Posts')

@section('content')

    <h3><a href="{{route('patients.create')}}">Create Patient!!!!</a></h3>

    @forelse($patients as $key => $patient)
        @include('patients.partials.patient')
    @empty
        <div>No patients found</div>
    @endforelse
@endsection
