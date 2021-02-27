<div>
    <label for="allergy">Alergia</label>
    <input id="allergy" type="text" name="allergy" value="{{ old('allergy', optional($allergy ?? null)->allergy) }}">
</div>

@if(empty($med_records))
    <p>No patients to add Surgeries!</p>
@else
    <div>
        <label for="med_record_id">Paciente</label>
        <select id="med_record_id" name="med_record_id">
            @foreach($med_records as $option)
                <option value="{{$option->id}}" {{ old('med_record_id') == $option->id ? 'selected' : '' }}>{{$option->firstName}}</option>
            @endforeach
        </select>
    </div>
@endif

@if($errors->any())
    <div>
        <ul >
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
