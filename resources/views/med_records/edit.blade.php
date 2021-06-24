@extends('layouts.app')

@section('title', 'Users')

@section('content')

    <h3>Editar Historial Clinico</h3>

    @if ($med_record != null)
        <h4>Historial Clinico de {{$med_record->patient->firstName." ".$med_record->patient->lastName }}</h4>
        <div>
            <form class="" action="{{route('med_records.update', ['med_record' => $med_record->id]) }}" method="POST">
                @csrf
                @method('PUT')
                @include('med_records.partials.form')
                <div><input type="submit" value="Actualizar" class="btn btn-primary btn-block"></div>
            </form>
        </div>
    @else
        <p>No existe</p>
    @endif
@endsection
