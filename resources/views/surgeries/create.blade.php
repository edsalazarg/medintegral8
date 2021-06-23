@extends('layouts.app')

@section('title', 'Create the Surgery')

@section('content')
    <div class="card card-custom">
        <div class="card-body">
            <form action="{{route('surgeries.store')}}" method="POST">
                @csrf
                @include('surgeries.partials.form')
                <button class="btn btn-primary btn-shadow btn-sm" type="submit">Agregar</button>
            </form>
        </div>
    </div>
@endsection
