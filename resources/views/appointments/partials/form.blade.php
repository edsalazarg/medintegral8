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
                    <span class="text-danger">*</span>
                </label>
                <select id="patient_id" name="patient_id" class="form-control">
                    @foreach($patients as $patient)
                        <option value="{{$patient->id}}" {{ old('patient_id') == $patient->id ? 'selected' : '' }}>{{$patient->firstName." ".$patient->lastName}}</option>
                    @endforeach
                </select>
                <br>
            @endisset
            <label>Ubicacion
                <span class="text-danger">*</span>
            </label>
            <input id="location" name="location"  type="text" class="form-control" placeholder="Ubicacion" value="{{ old('location', optional($appointment ?? null)->location) }}"/>
            <br>
            <label>Transferir a
                <span class="text-danger">*</span>
            </label>
            <select id="transfer" name="transfer" class="form-control">
                <option value="CUCEI" {{ old('transer') == 'CUCEI' ? 'selected' : '' }}>CUCEI</option>
                <option value="IMSS" {{ old('transer') == 'IMSS' ? 'selected' : '' }}>IMSS</option>
                <option value="ISSTE" {{ old('transer') == 'ISSTE' ? 'selected' : '' }}>ISSTE</option>
                <option value="SMM" {{ old('transer') == 'SMM' ? 'selected' : '' }}>SMM</option>
                <option value="CRM" {{ old('transer') == 'CRM' ? 'selected' : '' }}>CRM</option>
                <option value="PRIVADO" {{ old('transer') == 'PRIVADO' ? 'selected' : '' }}>PRIVADO</option>
                <option value="SE NIEGA" {{ old('transer') == 'SE NIEGA' ? 'selected' : '' }}>SE NIEGA</option>
            </select>
            <label>Notas
                <span class="text-danger">*</span>
            </label>
            <input id="notes" name="notes"  type="text" class="form-control" placeholder="Notas" value="{{ old('notes', optional($appointment ?? null)->notes) }}"/>
            <br>
            <label>Presion sanguinea
                <span class="text-danger">*</span>
            </label>
            <input id="blood_pressure" name="blood_pressure"  type="number" class="form-control" placeholder="Presion Sanguinea" value="{{ old('blood_pressure', optional($appointment ?? null)->blood_pressure) }}"/>
            <br>
            <label>Frecuencia cardiaca
                <span class="text-danger">*</span>
            </label>
            <input id="heart_rate" name="heart_rate"  type="number" class="form-control"
                   placeholder="Frecuencia cardiaca" value="{{ old('heart_rate', optional($appointment ?? null)->heart_rate) }}"/>
            <br>
            <label>Factor reumatico
                <span class="text-danger">*</span>
            </label>
            <input id="rheumatoid_factor" name="rheumatoid_factor"  type="number" class="form-control"
                   placeholder="Factor reumatico" value="{{ old('rheumatoid_factor', optional($appointment ?? null)->rheumatoid_factor) }}"/>
            <br>
            <label>Temperatura
                <span class="text-danger">*</span>
            </label>
            <input id="temperature" name="temperature"  type="number" class="form-control"
                   placeholder="Temperatura" value="{{ old('temperature', optional($appointment ?? null)->temperature) }}"/>
            <br>
            <label>Saturacion O2
                <span class="text-danger">*</span>
            </label>
            <input id="sat_o2" name="sat_o2"  type="number" class="form-control"
                   placeholder="Saturacion O2" value="{{ old('sat_o2', optional($appointment ?? null)->sat_o2) }}"/>
            <br>
            <label>Glucosa
                <span class="text-danger">*</span>
            </label>
            <input id="glucose" name="glucose"  type="number" class="form-control"
                   placeholder="Glucosa" value="{{ old('glucose', optional($appointment ?? null)->glucose) }}"/>
            <br>
            <label>Insulina
                <span class="text-danger">*</span>
            </label>
            <input id="insulin" name="insulin"  type="number" class="form-control"
                   placeholder="Insulina" value="{{ old('insulin', optional($appointment ?? null)->insulin) }}"/>
            <br>
            <label>Piel
                <span class="text-danger">*</span>
            </label>
            <input id="skin_thickness" name="skin_thickness"  type="number" class="form-control"
                   placeholder="Piel" value="{{ old('skin_thickness', optional($appointment ?? null)->skin_thickness) }}"/>
            <br>
            <label>BMI
                <span class="text-danger">*</span>
            </label>
            <input id="bmi" name="bmi"  type="number" class="form-control"
                   placeholder="BMI" value="{{ old('bmi', optional($appointment ?? null)->bmi) }}"/>
            <br>
            <label>DPF
                <span class="text-danger">*</span>
            </label>
            <input id="dpf" name="dpf"  type="number" class="form-control"
                   placeholder="DPF" value="{{ old('dpf', optional($appointment ?? null)->dpf) }}"/>
            <br>
            <label>Glasgow
                <span class="text-danger">*</span>
            </label>
            <input id="glasgow" name="glasgow"  type="number" class="form-control"
                   placeholder="Glasgow" value="{{ old('glasgow', optional($appointment ?? null)->glasgow) }}"/>
            <br>
            <h6>Observaciones</h6>
            {{--        Todos estos deberian de ser text areas--}}
            <label>Neurologia
                <span class="text-danger">*</span>
            </label>
            <input id="neurologic" name="neurologic"  type="text" class="form-control"
                   placeholder="Neurologia" value="{{ old('neurologic', optional($appointment ?? null)->neurologic) }}"/>
            <br>
                <label>Neurologia
                    <span class="text-danger">*</span>
                </label>
                <input id="head" name="head"  type="text" class="form-control"
                       placeholder="Cabeza" value="{{ old('head', optional($appointment ?? null)->head) }}"/>
                <br>
                <label>Cuello
                    <span class="text-danger">*</span>
                </label>
                <input id="neck" name="neck"  type="text" class="form-control"
                       placeholder="Cuello" value="{{ old('neck', optional($appointment ?? null)->neck) }}"/>
                <br>
                <label>Cardiopulmonar
                    <span class="text-danger">*</span>
                </label>
                <input id="cardiopulmonary" name="cardiopulmonary"  type="text" class="form-control"
                       placeholder="Cardiopulmonar" value="{{ old('cardiopulmonary', optional($appointment ?? null)->cardiopulmonary) }}"/>
                <br>
                <label>Abdomen
                    <span class="text-danger">*</span>
                </label>
                <input id="abdomen" name="abdomen"  type="text" class="form-control"
                       placeholder="Abdomen" value="{{ old('abdomen', optional($appointment ?? null)->abdomen) }}"/>
                <br>
                <label>Extremidades
                    <span class="text-danger">*</span>
                </label>
                <input id="extremities" name="extremities"  type="text" class="form-control"
                       placeholder="Extremidades" value="{{ old('extremities', optional($appointment ?? null)->extremities) }}"/>
                <br>
                <label>Diagnostico
                    <span class="text-danger">*</span>
                </label>
                <input id="diagnosis" name="diagnosis"  type="text" class="form-control"
                       placeholder="Diagnostico" value="{{ old('diagnosis', optional($appointment ?? null)->diagnosis) }}"/>
                <br>
                <label>Condicion
                    <span class="text-danger">*</span>
                </label>
                <input id="condition" name="condition"  type="text" class="form-control"
                       placeholder="Condicion" value="{{ old('condition', optional($appointment ?? null)->condition) }}"/>
                <br>
                <label>Tratamiento
                    <span class="text-danger">*</span>
                </label>
                <input id="treatment" name="treatment"  type="text" class="form-control"
                       placeholder="Tratamiento" value="{{ old('treatment', optional($appointment ?? null)->treatment) }}"/>
                <br>
                <label>Pronostico
                    <span class="text-danger">*</span>
                </label>
                <input id="forecast" name="forecast"  type="text" class="form-control"
                       placeholder="Pronostico" value="{{ old('forecast', optional($appointment ?? null)->forecast) }}"/>
                <br>
        </div>
    </div>
</div>

@if($errors->any())
    <div>
        <ul >
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
