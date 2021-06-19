@extends('layouts.app')

@section('title', "Cuestionario")

@section('content')

<div class="card card-custom">
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label">Ver Cuestionario Completo</h3>
        </div>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label>Nombre Paciente
                <span class="text-danger">*</span>
            </label>
            <input id="patient_name" name="patient_name"  type="text" class="form-control" placeholder="Nombre Paciente"
                   value="{{ old('firstName', optional($questionnaire ?? null)->patient->firstName." ".$questionnaire->patient->lastName)}}" disabled="disabled"/>
            <br>
            <label>¿Trabaja por cuenta propia?
                <span class="text-danger">*</span>
            </label>
            <input id="self_employed" name="self_employed" type="text" class="form-control" value="{{ old('self_employed', optional($questionnaire ?? null)->self_employed) }}" disabled="disabled"/>
            <br>
            <label>¿Tiene antecedentes familiares de enfermedad mental?
                <span class="text-danger">*</span>
            </label>
            <input id="family_history" name="family_history" type="text" class="form-control" value="{{ old('family_history', optional($questionnaire ?? null)->family_history) }}" disabled="disabled"/>
            <br>
            <label>Si tiene una condición de salud mental, ¿siente que interfiere con su trabajo?
                <span class="text-danger">*</span>
            </label>
            <input id="family_history" name="family_history" type="text" class="form-control" value="{{ old('family_history', optional($questionnaire ?? null)->work_interfere) }}" disabled="disabled"/>
            <br>
            <label>¿Cuántos empleados tiene su empresa u organización?
                <span class="text-danger">*</span>
            </label>
            <input id="family_history" name="family_history" type="text" class="form-control" value="{{ old('family_history', optional($questionnaire ?? null)->no_employees) }}" disabled="disabled"/>
            <br>
            <label>¿Trabaja de forma remota (fuera de una oficina) al menos el 50% del tiempo?
                <span class="text-danger">*</span>
            </label>
            <input id="family_history" name="family_history" type="text" class="form-control" value="{{ old('family_history', optional($questionnaire ?? null)->remote_work) }}" disabled="disabled"/>
            <br>
            <label>¿Su empleador es principalmente una empresa / organización de tecnología?
                <span class="text-danger">*</span>
            </label>
            <input id="family_history" name="family_history" type="text" class="form-control" value="{{ old('family_history', optional($questionnaire ?? null)->tech_company) }}" disabled="disabled"/>
            <br>
            <label>¿Su empleador proporciona beneficios de salud mental?
                <span class="text-danger">*</span>
            </label>
            <input id="family_history" name="family_history" type="text" class="form-control" value="{{ old('family_history', optional($questionnaire ?? null)->benefits) }}" disabled="disabled"/>
            <br>
            <label>Conoce las opciones de atención de salud mental que ofrece su empleador?
                <span class="text-danger">*</span>
            </label>
            <input id="family_history" name="family_history" type="text" class="form-control" value="{{ old('family_history', optional($questionnaire ?? null)->care_options) }}" disabled="disabled"/>
            <br>
            <label>¿Alguna vez su empleador ha hablado de la salud mental como parte de un programa de bienestar para empleados?
                <span class="text-danger">*</span>
            </label>
            <input id="family_history" name="family_history" type="text" class="form-control" value="{{ old('family_history', optional($questionnaire ?? null)->wellness_program) }}" disabled="disabled"/>
            <br>
            <label>¿Su empleador proporciona recursos para aprender más sobre problemas de salud mental y cómo buscar ayuda?
                <span class="text-danger">*</span>
            </label>
            <input id="family_history" name="family_history" type="text" class="form-control" value="{{ old('family_history', optional($questionnaire ?? null)->seek_help) }}" disabled="disabled"/>
            <br>
            <label>¿Está protegido su anonimato si elige aprovechar los recursos de tratamiento de salud mental o abuso de sustancias?
                <span class="text-danger">*</span>
            </label>
            <input id="family_history" name="family_history" type="text" class="form-control" value="{{ old('family_history', optional($questionnaire ?? null)->anonymity) }}" disabled="disabled"/>
            <br>
            <label>¿Qué tan fácil es para usted tomar una licencia médica por una condición de salud mental?
                <span class="text-danger">*</span>
            </label>
            <input id="family_history" name="family_history" type="text" class="form-control" value="{{ old('family_history', optional($questionnaire ?? null)->leave) }}" disabled="disabled"/>
            <br>
            <label>¿Cree que discutir un problema de salud mental con su empleador tendría consecuencias negativas?
                <span class="text-danger">*</span>
            </label>
            <input id="family_history" name="family_history" type="text" class="form-control" value="{{ old('family_history', optional($questionnaire ?? null)->mentalhealthconsequence) }}" disabled="disabled"/>
            <br>
            <label>¿Cree que discutir un problema de salud física con su empleador tendría consecuencias negativas?
                <span class="text-danger">*</span>
            </label>
            <input id="family_history" name="family_history" type="text" class="form-control" value="{{ old('family_history', optional($questionnaire ?? null)->physhealthconsequence) }}" disabled="disabled"/>
            <br>
            <label>¿Estaría dispuesto a discutir un problema de salud mental con sus compañeros de trabajo?
                <span class="text-danger">*</span>
            </label>
            <input id="family_history" name="family_history" type="text" class="form-control" value="{{ old('family_history', optional($questionnaire ?? null)->coworkers) }}" disabled="disabled"/>
            <br>
            <label>Estaría dispuesto a discutir un problema de salud mental con su supervisor directo?
                <span class="text-danger">*</span>
            </label>
            <input id="family_history" name="family_history" type="text" class="form-control" value="{{ old('family_history', optional($questionnaire ?? null)->supervisor) }}" disabled="disabled"/>
            <br>
            <label>Le plantearía un problema de salud mental a un posible empleador en una entrevista?
                <span class="text-danger">*</span>
            </label>
            <input id="family_history" name="family_history" type="text" class="form-control" value="{{ old('family_history', optional($questionnaire ?? null)->mentalhealthinterview) }}" disabled="disabled"/>
            <br>
            <label>¿Le plantearía un problema de salud física a un posible empleador en una entrevista?
                <span class="text-danger">*</span>
            </label>
            <input id="family_history" name="family_history" type="text" class="form-control" value="{{ old('family_history', optional($questionnaire ?? null)->physhealthinterview) }}" disabled="disabled"/>
            <br>
            <label>¿Cree que su empleador se toma la salud mental tan en serio como la salud física?
                <span class="text-danger">*</span>
            </label>
            <input id="family_history" name="family_history" type="text" class="form-control" value="{{ old('family_history', optional($questionnaire ?? null)->mentalvsphysical) }}" disabled="disabled"/>
            <br>
            <label>¿Ha oído hablar u observado consecuencias negativas para compañeros de trabajo con problemas de salud mental en su lugar de trabajo?
                <span class="text-danger">*</span>
            </label>
            <input id="family_history" name="family_history" type="text" class="form-control" value="{{ old('family_history', optional($questionnaire ?? null)->obs_consequence) }}" disabled="disabled"/>
            <br>
        </div>
    </div>
</div>
@endsection

