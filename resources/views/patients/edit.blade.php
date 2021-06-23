@extends('layouts.app')

@section('title', 'Update the post')

@section('content')
    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">Editar paciente</h3>
            </div>
        </div>
    <form action="{{route('patients.update', ['patient' => $patient->id]) }}" method="POST">
        @csrf
        @method('PUT')
        @include('patients.partials.form')
        <div><input type="submit" value="Actualizar" class="btn btn-primary btn-block"></div>
    </form>
    </div>
@endsection
