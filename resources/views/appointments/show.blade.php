@extends('layouts.app')

@section('title', "Cuestionario")

@section('content')

<div class="card card-custom">
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label">Ver Cita Medica Completa</h3>
        </div>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label>Nombre Paciente
                <span class="text-danger">*</span>
            </label>
            <input id="patient_name" name="patient_name"  type="text" class="form-control" placeholder="Nombre Paciente"
                   value="{{ old('firstName', optional($appointment ?? null)->patient->firstName." ".$appointment->patient->lastName)}}" disabled="disabled"/>
            <br>
            <label>Ubicacion
                <span class="text-danger">*</span>
            </label>
            <input id="location" name="location" type="text" class="form-control" value="{{ old('location', optional($appointment ?? null)->location) }}" disabled="disabled"/>
            <br>
            <label>Transferir a
                <span class="text-danger">*</span>
            </label>
            <input id="transfer" name="transfer" type="text" class="form-control" value="{{ old('transfer', optional($appointment ?? null)->transfer) }}" disabled="disabled"/>
            <br>
            <label>Notas
                <span class="text-danger">*</span>
            </label>
            <input id="notes" name="notes" type="text" class="form-control" value="{{ old('notes', optional($appointment ?? null)->notes) }}" disabled="disabled"/>
            <br>
            <table class="table table-separate table-checkable" id="kt_datatable_2">
                <thead>
                <tr>
                    <th>Presion sanguinea</th>
                    <th>Frecuencia cardiaca</th>
                    <th>Factor reumatico</th>
                    <th>Temperatura</th>
                    <th>Saturacion O2</th>
                    <th>Glucosa</th>
                    <th>Insulina</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$appointment->blood_pressure}}</td>
                        <td>{{$appointment->heart_rate}}</td>
                        <td>{{$appointment->rheumatoid_factor}}</td>
                        <td>{{$appointment->temperature}}</td>
                        <td>{{$appointment->sat_o2}}</td>
                        <td>{{$appointment->glucose}}</td>
                        <td>{{$appointment->insulin}}</td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-separate table-checkable" id="kt_datatable_2">
                <thead>
                <tr>
                    <th>Piel</th>
                    <th>BMI</th>
                    <th>DPF</th>
                    <th>Glasgow</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{$appointment->skin_thickness}}</td>
                    <td>{{$appointment->bmi}}</td>
                    <td>{{$appointment->dpf}}</td>
                    <td>{{$appointment->glasgow}}</td>
                </tr>
                </tbody>
            </table>
            <h6>Observaciones</h6>
            <label>Neurologia
                <span class="text-danger">*</span>
            </label>
            <input id="neurologic" name="neurologic" type="text" class="form-control" value="{{ old('neurologic', optional($appointment ?? null)->neurologic) }}" disabled="disabled"/>
            <br>
            <label>Cabeza
                <span class="text-danger">*</span>
            </label>
            <input id="head" name="head" type="text" class="form-control" value="{{ old('head', optional($appointment ?? null)->head) }}" disabled="disabled"/>
            <br>
            <label>Cuello
                <span class="text-danger">*</span>
            </label>
            <input id="neck" name="neck" type="text" class="form-control" value="{{ old('neck', optional($appointment ?? null)->neck) }}" disabled="disabled"/>
            <br>
            <label>Cardiopulmonar
                <span class="text-danger">*</span>
            </label>
            <input id="cardiopulmonary" name="cardiopulmonary" type="text" class="form-control" value="{{ old('cardiopulmonary', optional($appointment ?? null)->cardiopulmonary) }}" disabled="disabled"/>
            <br>
            <label>Abdomen
                <span class="text-danger">*</span>
            </label>
            <input id="abdomen" name="abdomen" type="text" class="form-control" value="{{ old('abdomen', optional($appointment ?? null)->abdomen) }}" disabled="disabled"/>
            <br>
            <label>Extremidades
                <span class="text-danger">*</span>
            </label>
            <input id="extremities" name="extremities" type="text" class="form-control" value="{{ old('extremities', optional($appointment ?? null)->extremities) }}" disabled="disabled"/>
            <br>
            <label>Diagnostico
                <span class="text-danger">*</span>
            </label>
            <input id="diagnosis" name="diagnosis" type="text" class="form-control" value="{{ old('diagnosis', optional($appointment ?? null)->diagnosis) }}" disabled="disabled"/>
            <br>
            <label>Condicion
                <span class="text-danger">*</span>
            </label>
            <input id="condition" name="condition" type="text" class="form-control" value="{{ old('condition', optional($appointment ?? null)->condition) }}" disabled="disabled"/>
            <br>
            <label>Tratamiento
                <span class="text-danger">*</span>
            </label>
            <input id="treatment" name="treatment" type="text" class="form-control" value="{{ old('treatment', optional($appointment ?? null)->treatment) }}" disabled="disabled"/>
            <br>
            <label>Pronostico
                <span class="text-danger">*</span>
            </label>
            <input id="forecast" name="forecast" type="text" class="form-control" value="{{ old('forecast', optional($appointment ?? null)->forecast) }}" disabled="disabled"/>
            <br>
        </div>
    </div>
</div>
@endsection

