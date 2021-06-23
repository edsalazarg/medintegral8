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
        <div class="form-group">
            <label>Nombre
                <span class="text-danger">*</span>
            </label>
            <input id="firstName" name="firstName"  type="text" class="form-control" placeholder="Nombre" value="{{ old('firstName', optional($patient ?? null)->firstName)}}" disabled="disabled"/>
            <br>
            <label>Apellidos
                <span class="text-danger">*</span>
            </label>
            <input id="lastName" name="lastName" type="text" class="form-control" placeholder="Apellidos" value="{{ old('lastName', optional($patient ?? null)->lastName) }}" disabled="disabled"/>
            <br>
            <label>Correo electronico
                <span class="text-danger">*</span>
            </label>
            <input id="email" name="email" type="email" class="form-control" placeholder="example@email.com" value="{{ old('email', optional($patient ?? null)->email) }}" disabled="disabled"/>
            <br>
            <label>Departamento
                <span class="text-danger">*</span>
            </label>
            <input id="department" name="department" type="text" class="form-control" placeholder="Departamento" value="{{ old('department', optional($patient ?? null)->department) }}" disabled="disabled"/>
            <br>
            <label>Edad
                <span class="text-danger">*</span>
            </label>
            <input id="age" name="age" type="text" class="form-control" placeholder="Edad" value="{{ old('age', optional($patient ?? null)->age) }}" disabled="disabled"/>
            <br>
            <label>Puesto
                <span class="text-danger">*</span>
            </label>
            <input id="position" name="position" type="text" class="form-control" placeholder="Puesto" value="{{ old('position', optional($patient ?? null)->position) }}" disabled="disabled"/>
            <br>
            <label>Telefono
                <span class="text-danger">*</span>
            </label>
            <input id="telephone" name="telephone" type="text" class="form-control" placeholder="Telefono" value="{{ old('telephone', optional($patient ?? null)->telephone) }}" disabled="disabled"/>
            <br>
            <label>Contacto de Emergencia
                <span class="text-danger">*</span>
            </label>
            <input id="emergency_contact" name="emergency_contact" type="text" class="form-control" placeholder="Contacto de emergencia" value="{{ old('emergency_contact', optional($patient ?? null)->emergency_contact) }}" disabled="disabled"/>
            <br>
            <label for="site">Institucion</label>
            <select id="site" name="site" class="form-control form-control-lg form-control-solid" disabled="disabled">
                <option value="CUCEI" {{ old('site') == 'CUCEI' ? 'selected' : '' }}>CUCEI</option>
                <option value="PREPA#12" {{ old('site') == 'PREPA#12' ? 'selected' : '' }}>PREPA#12</option>
                <option value="VOCA" {{ old('site') == 'VOCA' ? 'selected' : '' }} >VOCA</option>
                <option value="POLITECNICO" {{ old('site') == 'POLITECNICO' ? 'selected' : '' }}>POLITECNICO</option>
                <option value="EXTERIOR" {{ old('site') == 'EXTERIOR' ? 'selected' : '' }}>EXTERIOR</option>
                <option value="CDU" {{ old('site') == 'CDU' ? 'selected' : '' }}>CDU</option>
            </select>
        </div>

        @if($errors->any())
            <div>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <h3 class="card-label">Historial clinico</h3>
        @if(empty($patient->medrecord))
            <p>El paciente aun no tiene historial clinico</p>
            <form action="{{route('patient_med_record.create', $patient)}}" method="get">
                <button class="btn btn-shadow btn-primary btn-sm" type="submit">Crear</button>
            </form>
        @else
                <span class="label label-md label-info label-inline mr-2">Grupo sanguineo: {{$patient->medrecord->blood_group}}</span>

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

            @if($patient->medrecord->pregnancies > 0)
                <span class="label label-md label-info label-inline mr-2">Embarazos: {{$patient->medrecord->pregnancies}}</span>
            @endif
            <br><br>
        @endif
        <br>
        <h3> Cirugías </h3>
        @if(!empty($patient->medrecord))
        <form action="{{route('patient_surgeries.create', $patient)}}">
            <button class="btn btn-shadow btn-primary btn-sm" type="submit">Agregar</button>
        </form>
        @endif
        @if(empty($patient->medrecord->surgeries))
            <p>El paciente aun no tiene cirugías registradas</p>
        @else
        <!--begin: Datatable-->
        <table class="table table-separate table-checkable" id="kt_datatable_2">
            <thead>
            <tr>
                <th>Fecha</th>
                <th>Cirugía</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($patient->medrecord->surgeries as $surgery)
                <tr>
                    <td>{{$surgery->date}}</td>
                    <td>{{$surgery->surgery}}</td>
                    <td>
                        <form class="float-right" action="{{route('surgeries.destroy', $surgery)}}" method="post">
                            @csrf
                            <button class="btn btn-light btn-text-danger btn-hover-text-danger btn-sm btn-pill font-weight-bold" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            <tr>

            </tr>
            </tbody>
        </table>
        <!--end: Datatable-->
        @endif

        <br>
        <h3> Alergias </h3>
        @if(!empty($patient->medrecord))
        <form action="{{route('patient_allergies.create', ['patient'=>$patient->id])}}">
            <button class="btn btn-shadow btn-primary btn-sm" type="submit">Agregar</button>
        </form>
        @endif
        @if(empty($patient->medrecord->allergies))
            <p>El paciente aun no tiene alergias registradas</p>
        @else
        <!--begin: Datatable-->
        <table class="table table-separate table-checkable" id="kt_datatable_2">
            <thead>
            <tr>
                <th>Alergia</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($patient->medrecord->allergies as $allergy)
                <tr>
                    <td>{{$allergy->allergy}}</td>
                    <td>
                        <form class="float-right" action="{{route('allergies.destroy', $allergy)}}" method="post">
                            @csrf
                            <button class="btn btn-light btn-text-danger btn-hover-text-danger btn-sm btn-pill font-weight-bold" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            <tr>

            </tr>
            </tbody>

        </table>
        <!--end: Datatable-->
        @endif

        <br>
        <h3> Citas </h3>
        <form action="{{route('patient_appointments.create', ['patient'=>$patient->id])}}">
            <button class="btn btn-primary btn-shadow btn-sm" type="submit">Agregar</button>
        </form>
        @if(empty($patient->appointment))
            <p>El paciente no tiene citas</p>

        @else
        <!--begin: Datatable-->
        <table class="table table-separate table-checkable" id="kt_datatable_2">
            <thead>
            <tr>
                <th>Fecha</th>
                <th>Notas</th>
                <th>Diagnostíco</th>
                <th>Condición</th>
                <th>Tratamiento</th>
                <th>Pronóstico</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($patient->appointment as $appointment)
                <tr>
                    <td>{{$appointment->created_at->format('d/m/Y')}}</td>
                    <td>{{$appointment->notes}}</td>
                    <td>{{$appointment->diagnosis}}</td>
                    <td>{{$appointment->condition}}</td>
                    <td>{{$appointment->treatment}}</td>
                    <td>{{$appointment->forecast}}</td>
                    <td>
                        <form class="float-right" action="{{route('appointments.destroy', $appointment)}}" method="post">
                            @csrf
                            <button class="btn btn-light btn-text-danger btn-hover-text-danger btn-sm btn-pill font-weight-bold" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        @endif

        <h3> Predicciones </h3>
        @if($patient->diabetes_pred == "1")
            <span class="label label-danger label-pill label-inline mr-2 pr-0">Diabetes: Muy probable
                <x-prediction_review :result="$patient->diabetes_pred_review"/>
            </span>
        @elseif($patient->diabetes_pred == "0")
            <span class="label label-primary label-inline font-weight-boldest mr-2 pr-0">Diabetes: Nada probable
                <x-prediction_review :result="$patient->diabetes_pred_review"/>
            </span>
        @else
            <span class="label label-dark label-inline mr-2">Diabetes: Desconocido aún</span>
        @endif

        @if($patient->psych_pred == "1")
            <span class="label label-danger label-pill label-inline mr-2 pr-0">Tratamiento psicológico: Muy probable
                <x-prediction_review :result="$patient->psych_pred_review"/>
            </span>
        @elseif($patient->psych_pred == "0")
            <span class="label label-primary label-inline font-weight-boldest mr-2 pr-0">Tratamiento psicológico: Nada probable
                <x-prediction_review :result="$patient->psych_pred_review"/>
            </span>
        @else
            <span class="label label-dark label-inline mr-2">Tratamiento psicológico: Desconocido aún</span>
        @endif

        @if(($patient->psych_pred != 'None' and $patient->psych_pred_review == 'None') or ($patient->diabetes_pred != 'None' and $patient->diabetes_pred_review == 'None'))
            <div class="card mt-3 w-25">
                <div class="card-body">
                    <h4 class="card-title">Calificar predicciones</h4>
                    <form method="post" action="{{route('patients.score_prediction', $patient)}}">
                        @csrf
                        @if($patient->psych_pred != 'None' and $patient->psych_pred_review == 'None')
                            <h6 class=" card-subtitle">Psiquiatría</h6>
                            <select class="form-control" name="score_psych">
                                <option value=1>Correcta</option>
                                <option value=0>Incorrecta</option>
                            </select>
                        @endif
                        @if($patient->diabetes_pred != 'None' and $patient->diabetes_pred_review == 'None')
                            <h6 class="card-subtitle mt-3">Diabetes</h6>
                            <select class="form-control" name="score_diabetes">
                                <option value=1>Correcta</option>
                                <option value=0>Incorrecta</option>
                            </select>
                        @endif
                        <button class="btn btn-primary mt-3" type="submit">Guardar</button>
                    </form>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection

