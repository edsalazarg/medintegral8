@extends('layouts.app')

@section('content')
    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">Crear Cita Medica</h3>
            </div>
            <div class="card-toolbar">
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('appointments.store')}}" method="POST">
                @csrf
                @include('appointments.partials.form')
                <div><input type="submit" value="Create"></div>
            </form>
        </div>
    </div>
@endsection

