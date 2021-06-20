@extends('layouts.app')

@section('title', 'Actualizar Cuestionario')

@section('content')
    <form action="{{route('appointments.update', ['appointment' => $appointment->id]) }}" method="POST">
        @csrf
        @method('PUT')
        @include('appointments.partials.form')
        <div><input type="submit" value="Update" class="btn btn-primary btn-block"></div>
    </form>
@endsection
