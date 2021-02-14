@extends('layouts.app')

@section('title', 'Blog Posts')

@section('content')

    @forelse($patients as $key => $patient)
        @include('patients.partials.patient')
    @empty
        <div>No posts found</div>
    @endforelse
@endsection
