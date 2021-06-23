<div class="form-group">
    <label for="surgery">Cirugia</label>
    <div>
        <input id="surgery" class="form-control" type="text" name="surgery" value="{{ old('surgery', optional($surgery ?? null)->surgery) }}">
    </div>


    <div>
        <label for="date">Cirugia</label>
        <input id="date" class="form-control" type="date" name="date" value="{{ old('surgery', optional($surgery ?? null)->surgery) }}">
    </div>

    @if(empty($med_records))
        <p>No patients to add Surgeries!</p>
    @else
        <div>
            <label for="med_record_id">Paciente</label>
            <select id="med_record_id" class="form-control" name="med_record_id">
                @foreach($med_records as $option)
                    <option value="{{$option->id}}" {{ old('med_record_id') == $option->id ? 'selected' : '' }}>{{$option->firstName}}</option>
                @endforeach
            </select>
        </div>
@endif
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
