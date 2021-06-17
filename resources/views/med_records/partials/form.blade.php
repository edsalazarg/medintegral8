<div class="form-group">
    @isset($patients)
        <label>Paciente
            <span class="text-danger">*</span>
        </label>
        <select id="patient_id" name="patient_id" class="form-control">
            @foreach($patients as $patient)
            <option value="{{$patient->id}}">{{$patient->firstName." ".$patient->lastName}}</option>
            @endforeach
        </select>
    @endisset
    <label>Tipo de Sangre
        <span class="text-danger">*</span>
    </label>
    <input id="blood_group" name="blood_group"  type="text" class="form-control" placeholder="Tipo de Sangre" value="{{ old('firstName', optional($med_record ?? null)->blood_group) }}"/>
    <br>
    <label>Diabetes
        <span class="text-danger">*</span>
    </label>
    <select id="diabetes" name="diabetes" class="form-control">
        @isset($med_record)
            @if($med_record->diabetes == '0')
                <option value="0" selected>No</option>
                <option value="1">Si</option>
            @elseif($med_record->diabetes == '1')
                <option value="0">No</option>
                <option value="1" selected>Si</option>

            @endif
        @else
            <option value="0">No</option>
            <option value="1">Si</option>
        @endisset
    </select>
    <label>Hipertension
        <span class="text-danger">*</span>
    </label>
    <select id="hypertension" name="hypertension" class="form-control">
        @isset($med_record)
            @if($med_record->hypertension == '0')
                <option value="0" selected>No</option>
                <option value="1">Si</option>
            @elseif($med_record->hypertension == '1')
                <option value="0">No</option>
                <option value="1" selected>Si</option>
            @endif
        @else
            <option value="0">No</option>
            <option value="1">Si</option>
        @endisset
    </select>
    <label>Epilepsia
        <span class="text-danger">*</span>
    </label>
    <select id="epilepsy" name="epilepsy" class="form-control">
        @isset($med_record)
            @if($med_record->epilepsy == '0')
                <option value="0" selected>No</option>
                <option value="1">Si</option>
            @elseif($med_record->epilepsy == '1')
                <option value="0">No</option>
                <option value="1" selected>Si</option>
            @endif
        @else
            <option value="0">No</option>
            <option value="1">Si</option>
        @endisset
    </select>
    <label>Asma
        <span class="text-danger">*</span>
    </label>
    <select id="asthma" name="asthma" class="form-control">
        @isset($med_record)
            @if($med_record->asthma == '0')
                <option value="0" selected>No</option>
                <option value="1">Si</option>
            @elseif($med_record->asthma == '1')
                <option value="0">No</option>
                <option value="1" selected>Si</option>
            @endif
        @else
            <option value="0">No</option>
            <option value="1">Si</option>
        @endisset
    </select>
    <label>Pregnancies
        <span class="text-danger">*</span>
    </label>
    <input id="pregnancies" name="pregnancies"  type="number" class="form-control" placeholder="Embarazos" value="{{ old('pregnancies', optional($med_record ?? null)->pregnancies) }}"/>
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
