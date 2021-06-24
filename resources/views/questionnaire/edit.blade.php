@extends('layouts.app')

@section('title', 'Actualizar Cuestionario')

@section('content')
    <form action="{{route('questionnaire.update', ['questionnaire' => $questionnaire->id]) }}" method="POST">
        @csrf
        @method('PUT')
        @include('questionnaire.partials.form')
        <input type="submit" value="Actualizar" class="btn btn-primary btn-block">
    </form>
@endsection
