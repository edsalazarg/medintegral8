@extends('layouts.app')

@section('title', 'Update the post')

@section('content')
    <div class="card card-custom">
    <form action="{{route('patients.update', ['patient' => $patient->id]) }}" method="POST">
        @csrf
        @method('PUT')
        @include('patients.partials.form')
        <div><input type="submit" value="Update" class="btn btn-primary btn-block"></div>
    </form>
    </div>
@endsection
