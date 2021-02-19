<div>
    <label for="firstName">Nombre</label>
    <input id="firstName" type="text" name="firstName" value="{{ old('firstName', optional($patient ?? null)->firstName) }}">
</div>
<div>
    <label for="lastName">Apellidos</label>
    <input id="lastName" type="text" name="lastName" value="{{ old('lastName', optional($patient ?? null)->lastName) }}">
</div>
<div>
    <label for="department">Departamento</label>
    <input id="department" type="text" name="department" value="{{ old('department', optional($patient ?? null)->department) }}">
</div>
<div>
    <label for="age">Edad</label>
    <input id="age" type="number" name="age" value="{{ old('age', optional($patient ?? null)->age) }}">
</div>
<div>
    <label for="position">Puesto</label>
    <input id="position" type="text" name="position" value="{{ old('position', optional($patient ?? null)->position) }}">
</div>
<div>
    <label for="telephone">Telefono</label>
    <input id="telephone" type="text" name="telephone" value="{{ old('telephone', optional($patient ?? null)->telephone) }}">
</div>
<div>
    <label for="emergency_contact">Contacto de Emergencia</label>
    <input id="emergency_contact" type="text" name="emergency_contact" value="{{ old('emergency_contact', optional($patient ?? null)->emergency_contact) }}">
</div>
<div>
    <label for="site">Institucion</label>
    <select id="site" name="site">
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
        <ul >
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
