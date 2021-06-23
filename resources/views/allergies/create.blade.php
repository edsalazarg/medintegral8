@extends('layouts.app')

@section('title', 'Create the Allergy')

@section('content')
    <div class="card card-custom">
        <div class="card-body">
            <form action="{{route('allergies.store')}}" method="POST">
                @csrf
                @include('allergies.partials.form')
                <button class="btn btn-primary btn-shadow btn-sm" type="submit">Agregar</button>
            </form>
        </div>
    </div>
@endsection
