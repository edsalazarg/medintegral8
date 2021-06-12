<div class="form-group">
    <label>Nombre
        <span class="text-danger">*</span>
    </label>
    <input id="firstName" type="text" class="form-control" placeholder="Nombre" value="{{ old('firstName', optional($patient ?? null)->firstName) }}"/>
</div>

<div class="form-group">
    <label>Apellidos
        <span class="text-danger">*</span>
    </label>
    <input id="lastName" type="text" class="form-control" placeholder="Apellidos" value="{{ old('lastName', optional($patient ?? null)->lastName) }}"/>
</div>

<div class="form-group">
    <label>Correo electronico
        <span class="text-danger">*</span>
    </label>
    <input id="email" type="email" class="form-control" placeholder="example@email.com" value="{{ old('email', optional($patient ?? null)->email) }}"/>
</div>

<div class="form-group">
    <label>Departamento
        <span class="text-danger">*</span>
    </label>
    <input id="department" type="text" class="form-control" placeholder="Departamento" value="{{ old('department', optional($patient ?? null)->department) }}"/>
</div>

<div class="form-group">
    <label>Edad
        <span class="text-danger">*</span>
    </label>
    <input id="age" type="text" class="form-control" placeholder="Edad" value="{{ old('age', optional($patient ?? null)->age) }}"/>
</div>

<div class="form-group">
    <label>Puesto
        <span class="text-danger">*</span>
    </label>
    <input id="position" type="text" class="form-control" placeholder="Puesto" value="{{ old('position', optional($patient ?? null)->position) }}"/>
</div>

<div class="form-group">
    <label>Telefono
        <span class="text-danger">*</span>
    </label>
    <input id="telephone" type="text" class="form-control" placeholder="Telefono" value="{{ old('telephone', optional($patient ?? null)->telephone) }}"/>
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

{{--Ejemplo de formato de Jairo--}}
{{--<div>--}}
{{--    <label for="emergency_contact">Contacto de Emergencia</label>--}}
{{--    <input id="emergency_contact" type="text" name="emergency_contact" value="{{ old('emergency_contact', optional($patient ?? null)->emergency_contact) }}">--}}
{{--</div>--}}

@if($errors->any())
    <div>
        <ul >
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
