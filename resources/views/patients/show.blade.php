@extends('layouts.app')

@section('title', $patient['name'])

@section('content')

    <h1>{{ $patient['firstName'] }} {{ $patient['lastName'] }}</h1>

    <a href="{{route('patients.edit', ['patient' => $patient->id])}}">Edit</a>

    <form action="{{route('patients.destroy', ['patient' => $patient->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="DELETE">
    </form>

    <p>Email: {{ $patient['email'] }}</p>
    <p>Telephone: {{ $patient['telephone'] }}</p>
    <p>Age: {{ $patient['age'] }}</p>
    <p>Department: {{ $patient['department'] }}</p>
    <p>Position: {{ $patient['position'] }}</p>
    <p>Telephone: {{ $patient['telephone'] }}</p>
    <p>Emergency Contact: {{ $patient['emergency_contact'] }}</p>
    <p>Site: {{ $patient['site'] }}</p>
    <p>Added {{$patient->created_at->diffForHumans()}}</p>

    <h1>Medical Record</h1>

    @if(empty($patient->medrecord))
        <p>No Medical record for Patient</p>
    @else
        <p>Blood Group: {{$patient->medrecord->blood_group}}</p>
        <p>Diabetes: {{$patient->medrecord->diabetes ? "Yes" : "No"}}</p>
        <p>Hypertension: {{$patient->medrecord->hypertension ? "Yes" : "No"}}</p>
        <p>Epilepsy: {{$patient->medrecord->epilepsy ? "Yes" : "No"}}</p>
        <p>Asthma: {{$patient->medrecord->asthma ? "Yes" : "No"}}</p>
    @endif

    <h2> Surgeries </h2>
    @forelse($patient->medrecord->surgeries as $surgery)
        <hr>
        <p>Date: {{$surgery->date}}</p>
        <p>Surgery: {{$surgery->surgery}}</p>
    @empty
        <p>No Surgeries for Patient!</p>
    @endforelse

    <h2> Allergies </h2>
    @forelse($patient->medrecord->allergies as $allergy)
        <hr>
        <p>Allergy: {{$allergy->allergy}}</p>
    @empty
        <p>No Allergies for Patient!</p>
    @endforelse

    <h1> Appointments </h1>

    @forelse($patient->appointment as $appointment)
        <h2>Date: {{$appointment->created_at->format('d/m/Y')}}</h2>
        <p>Location: {{$appointment->location}}</p>
        <p>Transfer: {{$appointment->transfer}}</p>
        <p>Notes: {{$appointment->notes}}</p>
        <p>Blood Pressure: {{$appointment->blood_pressure}}</p>
        <p>Heart Rate: {{$appointment->heart_rate}}</p>
        <p>Rheumatoid Factor: {{$appointment->rheumatoid_factor}}</p>
        <p>Temperature: {{$appointment->temperature}}</p>
        <p>Oxygen Saturation: {{$appointment->sat_o2}}</p>
        <p>Glucose: {{$appointment->glucose}}</p>
        <p>Glasgow: {{$appointment->glasgow}}</p>
        <p>Neurologic: {{$appointment->neurologic}}</p>
        <p>Head: {{$appointment->head}}</p>
        <p>Neck: {{$appointment->neck}}</p>
        <p>Cardiopulmonary: {{$appointment->cardiopulmonary}}</p>
        <p>Abdomen: {{$appointment->abdomen}}</p>
        <p>Extremities: {{$appointment->extremities}}</p>
        <p>Diagnosis: {{$appointment->diagnosis}}</p>
        <p>Condition: {{$appointment->condition}}</p>
        <p>Treatment: {{$appointment->treatment}}</p>
        <p>Forecast: {{$appointment->forecast}}</p>
    @empty
        <p>No Appointments yet!</p>
    @endforelse
@endsection
