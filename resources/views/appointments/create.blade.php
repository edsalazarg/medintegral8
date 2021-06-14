@extends('layouts.app')

@section('content')
<form method="post" action="{{route('appointments.store')}}">
    @csrf

    <select name="patient_id" id="patient_id">
        @foreach($patients as $patient)
            <option value="{{$patient->id}}">{{$patient->firstName}} {{$patient->lastName}}</option>
        @endforeach
    </select>
    <input type="text" name="location" id="location" placeholder="Ubicacion">
    <select type="text" name="transfer" id="transfer" placeholder="Transferir a">
        <option value="0">CUCEI</option>
        <option value="1">IMSS</option>
        <option value="2">ISSTE</option>
        <option value="3">SMM</option>
        <option value="4">CRM</option>
        <option value="5">PRIVADO</option>
        <option value="6">SE NIEGA</option>
    </select>
    <textarea name="notes" id="notes" placeholder="Notas"></textarea>
    <input type="number" name="blood_pressure" id="blood_pressure" placeholder="Presion sanguinea">
    <input type="number" name="heart_rate" id="heart_rate" placeholder="Frecuencia cardiaca">
    <input type="number" name="rheumatoid_factor" id="rheumatoid_factor" placeholder="Factor reumatico">
    <input type="number" name="temperature" id="temperature" placeholder="Temperatura">
    <input type="number" name="sat_o2" id="sat_o2" placeholder="Saturacion O2">
    <input type="number" name="glucose" id="glucose" placeholder="Glucosa">
    <input type="number" name="insulin" id="insulin" placeholder="Insulina">
    <input type="number" name="skin_thickness" id="skin_thickness" placeholder="Piel">
    <input type="number" name="bmi" id="bmi" placeholder="BMI">
    <input type="number" name="dpf" id="dpf" placeholder="DPF">
    <input type="number" name="glasgow" id="glasgow" placeholder="Glasgow">
    <h6>Observaciones</h6>
    <textarea name="neurologic" id="neurologic" placeholder="Neurologia"></textarea>
    <textarea name="head" id="head" placeholder="Cabeza"></textarea>
    <textarea name="neck" id="neck" placeholder="Cuello"></textarea>
    <textarea name="cardiopulmonary" id="cardiopulmonary" placeholder="Cardiopulmonar"></textarea>
    <textarea name="abdomen" id="abdomen" placeholder="Abdomen"></textarea>
    <textarea name="extremities" id="extremities" placeholder="Extremidades"></textarea>
    <textarea name="diagnosis" id="diagnosis" placeholder="Diagnostico"></textarea>
    <textarea name="condition" id="condition" placeholder="Condicion"></textarea>
    <textarea name="treatment" id="treatment" placeholder="Tratamiento"></textarea>
    <textarea name="forecast" id="forecast" placeholder="Pronostico"></textarea>

    <button type="submit">Crear</button>
</form>
@endsection

