@extends('layouts.app')

@section('title', 'Blog Posts')

@section('content')

    <h3><a href="{{route('patients.create')}}">Create Patient!!!!</a></h3>
    <!--begin: Datatable-->
    <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable_patients">
        <thead>
            <tr>
                <th title="id">ID</th>
                <th title="nombre">Nombre</th>
                <th title="email">Email</th>
                <th title="departamento">Departamento</th>
                <th title="edad">Edad</th>
                <th title="ocupacion">Ocupación</th>
                <th title="telefono">Telefono</th>
                <th title="contactoDeEmergencia">Contacto de emergencia</th>
                <th title="site">Site</th>
            </tr>
        </thead>
        <tbody>
        @foreach($patients as $key => $patient)
            <tr>
                <td>
                    {{$patient->id}}
                </td>
                <td>
                    {{$patient->firstName." ".$patient->lastName}}
                </td>
                <td>
                    {{$patient->email}}
                </td>
                <td>
                    {{$patient->department}}
                </td>
                <td>
                    {{$patient->age}}
                </td>
                <td>
                    {{$patient->position}}
                </td>
                <td>
                    {{$patient->telephone}}
                </td>
                <td>
                    {{$patient->emergency_contact}}
                </td>
                <td>
                    {{$patient->site}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <!--end: Datatable-->
@endsection

@section("scripts")
    <script src={{asset("js/patientsTable.js")}}></script>
@endsection
