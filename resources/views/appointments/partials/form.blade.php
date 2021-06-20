<div class="card card-custom">
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label">Editar Cita</h3>
        </div>
    </div>
    <div class="card-body">
        <div class="form-group">
            @isset($patients)
                <label>Paciente

                </label>
                <select id="patient_id" name="patient_id" class="form-control">
                    @foreach($patients as $patient)
                        <option value="{{$patient->id}}">{{$patient->firstName." ".$patient->lastName}}</option>
                    @endforeach
                </select>
                <br>
            @else
                <label>Paciente

                </label>
                <select id="patient_id" name="patient_id" class="form-control" disabled="disabled">
                    <option value="{{$questionnaire->patient->id}}">{{$questionnaire->patient->firstName." ".$questionnaire->patient->lastName}}</option>
                </select>
                <br>
            @endisset
            <label for="self_employed">¿Trabaja por cuenta propia?</label>
            <select id="self_employed" name="self_employed" class="form-control form-control-lg form-control-solid">
                <option value="NA" {{ old('self_employed', optional($questionnaire ?? null)->self_employed) == 'NA' ? 'selected' : '' }}>NA</option>
                <option value="No" {{ old('self_employed', optional($questionnaire ?? null)->self_employed) == 'No' ? 'selected' : '' }}>No</option>
                <option value="Si" {{ old('self_employed', optional($questionnaire ?? null)->self_employed) == 'Si' ? 'selected' : '' }}>Si</option>
            </select>
            <br>
            <label>¿Tiene antecedentes familiares de enfermedad mental?

            </label>
            <select id="family_history" name="family_history" class="form-control form-control-lg form-control-solid">
                <option value="No" {{ old('family_history', optional($questionnaire ?? null)->family_history) == 'No' ? 'selected' : '' }}>No</option>
                <option value="Si" {{ old('family_history', optional($questionnaire ?? null)->family_history) == 'Si' ? 'selected' : '' }}>Si</option>
            </select>
            <br>
            <label>Si tiene una condición de salud mental, ¿siente que interfiere con su trabajo?
            </label>
            <select id="work_interfere" name="work_interfere" class="form-control form-control-lg form-control-solid">
                <option value="NA" {{ old('work_interfere', optional($questionnaire ?? null)->work_interfere) == 'NA' ? 'selected' : '' }}>NA</option>
                <option value="Nunca" {{ old('work_interfere', optional($questionnaire ?? null)->work_interfere) == 'Nunca' ? 'selected' : '' }}>Nunca</option>
                <option value="Frecuentemente" {{ old('work_interfere', optional($questionnaire ?? null)->work_interfere) == 'Frecuentemente' ? 'selected' : '' }}>Frecuentemente</option>
                <option value="Raramente" {{ old('work_interfere', optional($questionnaire ?? null)->work_interfere) == 'Raramente' ? 'selected' : '' }}>Raramente</option>
                <option value="Algunas veces" {{ old('work_interfere', optional($questionnaire ?? null)->work_interfere) == 'Algunas veces' ? 'selected' : '' }}>Algunas veces</option>
            </select>
            <br>
            <label>¿Cuántos empleados tiene su empresa u organización?
            </label>
            <select id="no_employees" name="no_employees" class="form-control form-control-lg form-control-solid">
                <option value="1-5" {{ old('no_employees', optional($questionnaire ?? null)->no_employees) == '1-5' ? 'selected' : '' }}>1-5</option>
                <option value="6-25" {{ old('no_employees', optional($questionnaire ?? null)->no_employees) == '6-25' ? 'selected' : '' }}>6-25</option>
                <option value="26-100" {{ old('no_employees', optional($questionnaire ?? null)->no_employees) == '26-100' ? 'selected' : '' }}>26-100</option>
                <option value="100-500" {{ old('no_employees', optional($questionnaire ?? null)->no_employees) == '100-500' ? 'selected' : '' }}>100-500</option>
                <option value="500-1000" {{ old('no_employees', optional($questionnaire ?? null)->no_employees) == '500-1000' ? 'selected' : '' }}>500-1000</option>
                <option value="Mas de 1000" {{ old('no_employees', optional($questionnaire ?? null)->no_employees) == 'Mas de 1000' ? 'selected' : '' }}>Mas de 1000</option>
            </select>
            <br>
            <label>¿Trabaja de forma remota (fuera de una oficina) al menos el 50% del tiempo?
            </label>
            <select id="remote_work" name="remote_work" class="form-control form-control-lg form-control-solid">
                <option value="No" {{ old('remote_work', optional($questionnaire ?? null)->remote_work) == 'No' ? 'selected' : '' }}>No</option>
                <option value="Si" {{ old('remote_work', optional($questionnaire ?? null)->remote_work) == 'Si' ? 'selected' : '' }}>Si</option>
            </select>
            <br>
            <label>¿Su empleador es principalmente una empresa / organización de tecnología?

            </label>
            <select id="tech_company" name="tech_company" class="form-control form-control-lg form-control-solid">
                <option value="No" {{ old('tech_company', optional($questionnaire ?? null)->tech_company) == 'No' ? 'selected' : '' }}>No</option>
                <option value="Si" {{ old('tech_company', optional($questionnaire ?? null)->tech_company) == 'Si' ? 'selected' : '' }}>Si</option>
            </select>
            <br>
            <label>¿Su empleador proporciona beneficios de salud mental?
            </label>
            <select id="benefits" name="benefits" class="form-control form-control-lg form-control-solid">
                <option value="No" {{ old('benefits', optional($questionnaire ?? null)->benefits) == 'No' ? 'selected' : '' }}>No</option>
                <option value="No se" {{ old('benefits', optional($questionnaire ?? null)->benefits) == 'No se' ? 'selected' : '' }}>No se</option>
                <option value="Si" {{ old('benefits', optional($questionnaire ?? null)->benefits) == 'Si' ? 'selected' : '' }}>Si</option>
            </select>
            <br>
            <label>Conoce las opciones de atención de salud mental que ofrece su empleador?
            </label>
            <select id="care_options" name="care_options" class="form-control form-control-lg form-control-solid">
                <option value="No" {{ old('care_options', optional($questionnaire ?? null)->care_options) == 'No' ? 'selected' : '' }}>No</option>
                <option value="No estoy seguro" {{ old('care_options', optional($questionnaire ?? null)->care_options) == 'No estoy seguro' ? 'selected' : '' }}>No estoy seguro/option>
                <option value="Si" {{ old('care_options', optional($questionnaire ?? null)->care_options) == 'Si' ? 'selected' : '' }}>Si</option>
            </select>
            <br>
            <label>¿Alguna vez su empleador ha hablado de la salud mental como parte de un programa de bienestar para empleados?
            </label>
            <select id="wellness_program" name="wellness_program" class="form-control form-control-lg form-control-solid">
                <option value="No" {{ old('wellness_program', optional($questionnaire ?? null)->wellness_program) == 'No' ? 'selected' : '' }}>No</option>
                <option value="No se" {{ old('wellness_program', optional($questionnaire ?? null)->wellness_program) == 'No se' ? 'selected' : '' }}>No se</option>
                <option value="Si" {{ old('wellness_program', optional($questionnaire ?? null)->wellness_program) == 'Si' ? 'selected' : '' }}>Si</option>
            </select>
            <br>
            <label>¿Su empleador proporciona recursos para aprender más sobre problemas de salud mental y cómo buscar ayuda?
            </label>
            <select id="seek_help" name="seek_help" class="form-control form-control-lg form-control-solid">
                <option value="No" {{ old('seek_help', optional($questionnaire ?? null)->seek_help) == 'No' ? 'selected' : '' }}>No</option>
                <option value="No se" {{ old('seek_help', optional($questionnaire ?? null)->seek_help) == 'No se' ? 'selected' : '' }}>No se</option>
                <option value="Si" {{ old('seek_help', optional($questionnaire ?? null)->seek_help) == 'Si' ? 'selected' : '' }}>Si</option>
            </select>
            <br>
            <label>¿Está protegido su anonimato si elige aprovechar los recursos de tratamiento de salud mental o abuso de sustancias?
            </label>
            <select id="anonymity" name="anonymity" class="form-control form-control-lg form-control-solid">
                <option value="No" {{ old('anonymity', optional($questionnaire ?? null)->anonymity) == 'No' ? 'selected' : '' }}>No</option>
                <option value="No se" {{ old('anonymity', optional($questionnaire ?? null)->anonymity) == 'No se' ? 'selected' : '' }}>No se</option>
                <option value="Si" {{ old('anonymity', optional($questionnaire ?? null)->anonymity) == 'Si' ? 'selected' : '' }}>Si</option>
            </select>
            <br>
            <label>¿Qué tan fácil es para usted tomar una licencia médica por una condición de salud mental?
            </label>
            <select id="leave" name="leave" class="form-control form-control-lg form-control-solid">
                <option value="No se" {{ old('leave', optional($questionnaire ?? null)->leave) == 'No se' ? 'selected' : '' }}>No se</option>
                <option value="Muy dificil" {{ old('leave', optional($questionnaire ?? null)->leave) == 'Muy dificil' ? 'selected' : '' }}>Muy dificil</option>
                <option value="Algo Dificl" {{ old('leave', optional($questionnaire ?? null)->leave) == 'Algo Dificl' ? 'selected' : '' }}>Algo Dificl</option>
                <option value="Algo Facil" {{ old('leave', optional($questionnaire ?? null)->leave) == 'Algo Facil' ? 'selected' : '' }}>Algo Facil</option>
                <option value="Muy facil" {{ old('leave', optional($questionnaire ?? null)->leave) == 'Muy facil' ? 'selected' : '' }}>Muy facil</option>
            </select>
            <br>
            <label>¿Cree que discutir un problema de salud mental con su empleador tendría consecuencias negativas?
            </label>
            <select id="mentalhealthconsequence" name="mentalhealthconsequence" class="form-control form-control-lg form-control-solid">
                <option value="No" {{ old('mentalhealthconsequence', optional($questionnaire ?? null)->mentalhealthconsequence) == 'No' ? 'selected' : '' }}>No</option>
                <option value="A lo mejor" {{ old('mentalhealthconsequence', optional($questionnaire ?? null)->mentalhealthconsequence) == 'A lo mejor' ? 'selected' : '' }}>A lo mejor</option>
                <option value="Si" {{ old('mentalhealthconsequence', optional($questionnaire ?? null)->mentalhealthconsequence) == 'Si' ? 'selected' : '' }}>Si</option>
            </select>
            <br>
            <label>¿Cree que discutir un problema de salud física con su empleador tendría consecuencias negativas?

            </label>
            <select id="physhealthconsequence" name="physhealthconsequence" class="form-control form-control-lg form-control-solid">
                <option value="No" {{ old('physhealthconsequence', optional($questionnaire ?? null)->physhealthconsequence) == 'No' ? 'selected' : '' }}>No</option>
                <option value="A lo mejor" {{ old('physhealthconsequence', optional($questionnaire ?? null)->physhealthconsequence) == 'A lo mejor' ? 'selected' : '' }}>A lo mejor</option>
                <option value="Si" {{ old('physhealthconsequence', optional($questionnaire ?? null)->physhealthconsequence) == 'Si' ? 'selected' : '' }}>Si</option>
            </select>
            <br>
            <label>¿Estaría dispuesto a discutir un problema de salud mental con sus compañeros de trabajo?

            </label>
            <select id="coworkers" name="coworkers" class="form-control form-control-lg form-control-solid">
                <option value="No" {{ old('coworkers', optional($questionnaire ?? null)->coworkers) == 'No' ? 'selected' : '' }}>No</option>
                <option value="Algunos de ellos" {{ old('coworkers', optional($questionnaire ?? null)->coworkers) == 'Algunos de ellos' ? 'selected' : '' }}>Algunos de ellos</option>
                <option value="Si" {{ old('coworkers', optional($questionnaire ?? null)->coworkers) == 'Si' ? 'selected' : '' }}>Si</option>
            </select>
            <br>
            <label>Estaría dispuesto a discutir un problema de salud mental con su supervisor directo?

            </label>
            <select id="supervisor" name="supervisor" class="form-control form-control-lg form-control-solid">
                <option value="No" {{ old('supervisor', optional($questionnaire ?? null)->supervisor) == 'No' ? 'selected' : '' }}>No</option>
                <option value="Algunos de ellos" {{ old('supervisor', optional($questionnaire ?? null)->supervisor) == 'Algunos de ellos' ? 'selected' : '' }}>Algunos de ellos</option>
                <option value="Si" {{ old('supervisor', optional($questionnaire ?? null)->supervisor) == 'Si' ? 'selected' : '' }}>Si</option>
            </select>
            <br>
            <label>Le plantearía un problema de salud mental a un posible empleador en una entrevista?
            </label>
            <select id="mentalhealthinterview" name="mentalhealthinterview" class="form-control form-control-lg form-control-solid">
                <option value="No" {{ old('mentalhealthinterview', optional($questionnaire ?? null)->mentalhealthinterview) == 'No' ? 'selected' : '' }}>No</option>
                <option value="A lo mejor" {{ old('mentalhealthinterview', optional($questionnaire ?? null)->mentalhealthinterview) == 'A lo mejor' ? 'selected' : '' }}>A lo mejor</option>
                <option value="Si" {{ old('mentalhealthinterview', optional($questionnaire ?? null)->mentalhealthinterview) == 'Si' ? 'selected' : '' }}>Si</option>
            </select>
            <br>
            <label>¿Le plantearía un problema de salud física a un posible empleador en una entrevista?

            </label>
            <select id="physhealthinterview" name="physhealthinterview" class="form-control form-control-lg form-control-solid">
                <option value="No" {{ old('physhealthinterview', optional($questionnaire ?? null)->physhealthinterview) == 'No' ? 'selected' : '' }}>No</option>
                <option value="A lo mejor" {{ old('physhealthinterview', optional($questionnaire ?? null)->physhealthinterview) == 'A lo mejor' ? 'selected' : '' }}>A lo mejor</option>
                <option value="Si" {{ old('physhealthinterview', optional($questionnaire ?? null)->physhealthinterview) == 'Si' ? 'selected' : '' }}>Si</option>
            </select>
            <br>
            <label>¿Cree que su empleador se toma la salud mental tan en serio como la salud física?

            </label>
            <select id="mentalvsphysical" name="mentalvsphysical" class="form-control form-control-lg form-control-solid">
                <option value="No" {{ old('mentalvsphysical', optional($questionnaire ?? null)->mentalvsphysical) == 'No' ? 'selected' : '' }}>No</option>
                <option value="No se" {{ old('mentalvsphysical', optional($questionnaire ?? null)->mentalvsphysical) == 'No se' ? 'selected' : '' }}>No se</option>
                <option value="Si" {{ old('mentalvsphysical', optional($questionnaire ?? null)->mentalvsphysical) == 'Si' ? 'selected' : '' }}>Si</option>
            </select>
            <br>
            <label>¿Ha oído hablar u observado consecuencias negativas para compañeros de trabajo con problemas de salud mental en su lugar de trabajo?
            </label>
            <select id="obs_consequence" name="obs_consequence" class="form-control form-control-lg form-control-solid">
                <option value="No" {{ old('obs_consequence', optional($questionnaire ?? null)->obs_consequence) == 'No' ? 'selected' : '' }}>No</option>
                <option value="Si" {{ old('obs_consequence', optional($questionnaire ?? null)->obs_consequence) == 'Si' ? 'selected' : '' }}>Si</option>
            </select>
            <br>
        </div>
    </div>
</div>
