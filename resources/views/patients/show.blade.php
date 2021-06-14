@extends('layouts.app')

@section('title', $patient['name'])

@section('content')

{{--    <h1>{{ $patient['firstName'] }} {{ $patient['lastName'] }}</h1>--}}

{{--    <a href="{{route('patients.edit', ['patient' => $patient->id])}}">Edit</a>--}}

{{--    <form action="{{route('patients.destroy', ['patient' => $patient->id])}}" method="POST">--}}
{{--        @csrf--}}
{{--        @method('DELETE')--}}
{{--        <input type="submit" value="DELETE">--}}
{{--    </form>--}}

{{--    <p>Email: {{ $patient['email'] }}</p>--}}
{{--    <p>Telephone: {{ $patient['telephone'] }}</p>--}}
{{--    <p>Age: {{ $patient['age'] }}</p>--}}
{{--    <p>Department: {{ $patient['department'] }}</p>--}}
{{--    <p>Position: {{ $patient['position'] }}</p>--}}
{{--    <p>Emergency Contact: {{ $patient['emergency_contact'] }}</p>--}}
{{--    <p>Site: {{ $patient['site'] }}</p>--}}
{{--    <p>Added {{$patient->created_at->diffForHumans()}}</p>--}}
<div class="card card-custom">
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label">Ver paciente</h3>
        </div>
    </div>
    <div class="card-body">
            @include('patients.partials.form')
            <br>
            <h3 class="card-label">Historial clinico</h3>
        @if(empty($patient->medrecord))
            <p>El paciente aun no tiene historial clinico</p>
            <br>
        @else
            <br>
            <div>
                <span class="label label-xl label-info label-inline mr-2">Grupo sanguineo: {{$patient->medrecord->blood_group}}</span>
            </div>
            <br>

            @if($patient->medrecord->diabetes == 1)
                <span class="label label-danger label-pill label-inline mr-2">Diabetes: Si</span>
            @else
                <span class="label label-primary label-inline font-weight-boldest mr-2">Diabetes: No</span>
            @endif

            @if($patient->medrecord->hypertension == 1)
                <span class="label label-danger label-pill label-inline mr-2">Hipertensión: Si</span>
            @else
                <span class="label label-primary label-inline font-weight-boldest mr-2">Hipertensión: No</span>
            @endif

            @if($patient->medrecord->epilepsy == 1)
                <span class="label label-danger label-pill label-inline mr-2">Epilepsia: Si</span>
            @else
                <span class="label label-primary label-inline font-weight-boldest mr-2">Epilepsia: No</span>
            @endif

            @if($patient->medrecord->asthma == 1)
                <span class="label label-danger label-pill label-inline mr-2">Asma: Si</span>
            @else
                <span class="label label-primary label-inline font-weight-boldest mr-2">Asma: No</span>
            @endif
            <br>
            <br>
            <br>
            <h3> Cirugías </h3>
            @forelse($patient->medrecord->surgeries as $surgery)
                <p>Fecha: {{$surgery->date}}</p>
                <p>Cirugía: {{$surgery->surgery}}</p>
            @empty
                <p>El paciente no tiene cirugias</p>
            @endforelse
            <br>
            <h3> Alergias </h3>
            @forelse($patient->medrecord->allergies as $allergy)
                <p>Alergia: {{$allergy->allergy}}</p>
            @empty
                <p>El paciente no tiene alergias</p>
            @endforelse
        @endif

        <br>
        <h3> Citas </h3>
        @forelse($patient->appointment as $appointment)
            <p>Fecha: {{$appointment->created_at->format('d/m/Y')}}</p>
            <p>Lugar: {{$appointment->location}}</p>
            <p>Transferencia: {{$appointment->transfer}}</p>
            <p>Notas: {{$appointment->notes}}</p>
            <p>Presión sanguinea: {{$appointment->blood_pressure}}</p>
            <p>Ritmo cardiaco: {{$appointment->heart_rate}}</p>
            <p>Factor reumatoide: {{$appointment->rheumatoid_factor}}</p>
            <p>Temperatura: {{$appointment->temperature}}</p>
            <p>Saturación de oxígeno: {{$appointment->sat_o2}}</p>
            <p>Glucosa: {{$appointment->glucose}}</p>
            <p>Glasgow: {{$appointment->glasgow}}</p>
            <p>Neurológico: {{$appointment->neurologic}}</p>
            <p>Cabeza: {{$appointment->head}}</p>
            <p>Cuello: {{$appointment->neck}}</p>
            <p>Cardiopulmonar: {{$appointment->cardiopulmonary}}</p>
            <p>Abdomen: {{$appointment->abdomen}}</p>
            <p>Extremidades: {{$appointment->extremities}}</p>
            <p>Diagnóstico: {{$appointment->diagnosis}}</p>
            <p>Condición: {{$appointment->condition}}</p>
            <p>Tratamiento: {{$appointment->treatment}}</p>
            <p>Pronóstico: {{$appointment->forecast}}</p>
        @empty
            <p>El paciente no tiene citas</p>
        @endforelse
    </div>
</div>
@endsection

