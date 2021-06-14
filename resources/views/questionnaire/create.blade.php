@extends('layouts.app')

@section('content')
<form method="post" action="{{route('questionnaire.store')}}">
    @csrf

    <select name="patient_id" id="patient_id">
        @foreach($patients as $patient)
            <option value="{{$patient->id}}">{{$patient->firstName}} {{$patient->lastName}}</option>
        @endforeach
    </select>
    <label for="self_employed">¿Trabaja por cuenta propia?</label>
    <select name="self_employed" id="self_employed">
        <option value="0">NA</option>
        <option value="1">No</option>
        <option value="2">Si</option>
    </select>
    <label for="family_history">¿Tiene antecedentes familiares de enfermedad mental?</label>
    <select name="family_history" id="family_history">
        <option value="0">No</option>
        <option value="1">Si</option>
    </select>
    <label for="work_inteference">Si tiene una condición de salud mental, ¿siente que interfiere con su trabajo?</label>
    <select name="work_inteference" id="work_inteference">
        <option value="0">NA</option>
        <option value="1">Nunca</option>
        <option value="2">Frecuentemente</option>
        <option value="3">Raramente</option>
        <option value="4">Algunas veces</option>
    </select>
    <label for="no_employees">¿Cuántos empleados tiene su empresa u organización?</label>
    <select name="no_employees" id="no_employees">
        <option value="0">1-5</option>
        <option value="1">6-25</option>
        <option value="2">26-100</option>
        <option value="3">101-500</option>
        <option value="4">501-1000</option>
        <option value="5">mas de 1000</option>
    </select>
    <label for="remote_work">¿Trabaja de forma remota (fuera de una oficina) al menos el 50% del tiempo?</label>
    <select name="remote_work" id="remote_work">
        <option value="0">No</option>
        <option value="1">Si</option>
    </select>
    <label for="tech_company">¿Su empleador es principalmente una empresa / organización de tecnología?</label>
    <select name="tech_company" id="tech_company">
        <option value="0">No</option>
        <option value="1">Si</option>
    </select>
    <label for="benefits">¿Su empleador proporciona beneficios de salud mental?</label>
    <select name="benefits" id="benefits">
        <option value="0">Si</option>
        <option value="1">No se</option>
        <option value="2">No</option>
    </select>
    <label for="care_options">¿Conoce las opciones de atención de salud mental que ofrece su empleador?</label>
    <select name="care_options" id="care_options">
        <option value="0">Si</option>
        <option value="1">No estoy seguro</option>
        <option value="2">No</option>
    </select>
    <label for="wellness_program">¿Alguna vez su empleador ha hablado de la salud mental como parte de un programa de bienestar para empleados?</label>
    <select name="wellness_program" id="wellness_program">
        <option value="0">Si</option>
        <option value="1">No se</option>
        <option value="2">No</option>
    </select>
    <label for="seek_help">¿Su empleador proporciona recursos para aprender más sobre problemas de salud mental y cómo buscar ayuda?</label>
    <select name="seek_help" id="seek_help">
        <option value="0">Si</option>
        <option value="1">No se</option>
        <option value="2">No</option>
    </select>
    <label for="anonymity">¿Está protegido su anonimato si elige aprovechar los recursos de tratamiento de salud mental o abuso de sustancias?</label>
    <select name="anonymity" id="anonymity">
        <option value="0">Si</option>
        <option value="1">No se</option>
        <option value="2">No</option>
    </select>
    <label for="leave">¿Qué tan fácil es para usted tomar una licencia médica por una condición de salud mental?</label>
    <select name="leave" id="leave">
        <option value="0">No se</option>
        <option value="1">Muy dificil</option>
        <option value="2">Algo dificil</option>
        <option value="3">Algo facil</option>
        <option value="4">Muy facil</option>
    </select>
    <label for="mentalhealthconsequence">¿Cree que discutir un problema de salud mental con su empleador tendría consecuencias negativas?</label>
    <select name="mentalhealthconsequence" id="mentalhealthconsequence">
        <option value="0">Si</option>
        <option value="1">A lo mejor</option>
        <option value="2">No</option>
    </select>
    <label for="physhealthconsequence">¿Cree que discutir un problema de salud física con su empleador tendría consecuencias negativas?</label>
    <select name="physhealthconsequence" id="physhealthconsequence">
        <option value="0">Si</option>
        <option value="1">A lo mejor</option>
        <option value="2">No</option>
    </select>
    <label for="coworkers">¿Estaría dispuesto a discutir un problema de salud mental con sus compañeros de trabajo?</label>
    <select name="coworkers" id="coworkers">
        <option value="0">Si</option>
        <option value="1">Algunos de ellos</option>
        <option value="2">No</option>
    </select>
    <label for="supervisor">¿Estaría dispuesto a discutir un problema de salud mental con su supervisor directo?</label>
    <select name="supervisor" id="supervisor">
        <option value="0">Si</option>
        <option value="1">Algunos de ellos</option>
        <option value="2">No</option>
    </select>
    <label for="mentalhealthinterview">¿Le plantearía un problema de salud mental a un posible empleador en una entrevista?</label>
    <select name="mentalhealthinterview" id="mentalhealthinterview">
        <option value="0">Si</option>
        <option value="1">A lo mejor</option>
        <option value="2">No</option>
    </select>
    <label for="physhealthinterview">¿Le plantearía un problema de salud física a un posible empleador en una entrevista?</label>
    <select name="physhealthinterview" id="physhealthinterview">
        <option value="0">Si</option>
        <option value="1">A lo mejor</option>
        <option value="2">No</option>
    </select>
    <label for="mentalvsphysical">¿Cree que su empleador se toma la salud mental tan en serio como la salud física?</label>
    <select name="mentalvsphysical" id="mentalvsphysical">
        <option value="0">Si</option>
        <option value="1">No se</option>
        <option value="2">No</option>
    </select>
    <label for="obs_consequence">¿Ha oído hablar u observado consecuencias negativas para compañeros de trabajo con problemas de salud mental en su lugar de trabajo?</label>
    <select name="obs_consequence" id="obs_consequence">
        <option value="0">No</option>
        <option value="1">Si</option>
    </select>

    <button type="submit">Crear</button>
</form>
@endsection

