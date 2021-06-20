@extends('layouts.app')

@section('title', 'Actualizar Cuestionario')

@section('content')
    <form action="{{route('questionnaire.update', ['questionnaire' => $questionnaire->id]) }}" method="POST">
        @csrf
        @method('PUT')
        @include('questionnaire.partials.form')
        <div><input type="submit" value="Update" class="btn btn-primary btn-block"></div>
    </form>
@endsection
