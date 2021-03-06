

<div class="card-body">
<div class="form-group">
    <label>Nombre
        <span class="text-danger">*</span>
    </label>
    <input id="firstName" name="firstName"  type="text" class="form-control" placeholder="Nombre" value="{{ old('firstName', optional($patient ?? null)->firstName) }}"/>
    <br>
    <label>Apellidos
        <span class="text-danger">*</span>
    </label>
    <input id="lastName" name="lastName" type="text" class="form-control" placeholder="Apellidos" value="{{ old('lastName', optional($patient ?? null)->lastName) }}"/>
    <br>
    <label>Sexo
        <span class="text-danger">*</span>
    </label>
    <select id="gender" name="gender" class="form-control" value="{{ old('gender') }}">
        <option value="0" selected>Mujer</option>
        <option value="1">Hombre</option>
        <option value="2">Otro</option>
    </select>
    <br>
    <label>Correo electronico
        <span class="text-danger">*</span>
    </label>
    <input id="email" name="email" type="email" class="form-control" placeholder="example@email.com" value="{{ old('email', optional($patient ?? null)->email) }}"/>
    <br>
    <label>Departamento
        <span class="text-danger">*</span>
    </label>
    <input id="department" name="department" type="text" class="form-control" placeholder="Departamento" value="{{ old('department', optional($patient ?? null)->department) }}"/>
    <br>
    <label>Edad
        <span class="text-danger">*</span>
    </label>
    <input id="age" name="age" type="text" class="form-control" placeholder="Edad" value="{{ old('age', optional($patient ?? null)->age) }}"/>
    <br>
    <label>Puesto
        <span class="text-danger">*</span>
    </label>
    <input id="position" name="position" type="text" class="form-control" placeholder="Puesto" value="{{ old('position', optional($patient ?? null)->position) }}"/>
    <br>
    <label>Telefono
        <span class="text-danger">*</span>
    </label>
    <input id="telephone" name="telephone" type="text" class="form-control" placeholder="Telefono" value="{{ old('telephone', optional($patient ?? null)->telephone) }}"/>
    <br>
    <label>Contacto de Emergencia
        <span class="text-danger">*</span>
    </label>
    <input id="emergency_contact" name="emergency_contact" type="text" class="form-control" placeholder="Contacto de emergencia" value="{{ old('emergency_contact', optional($patient ?? null)->emergency_contact) }}"/>
    <br>
    <label for="site">Institucion</label>
    <select id="site" name="site" class="form-control form-control-lg form-control-solid">
        <option value="CUCEI" {{ old('site') == 'CUCEI' ? 'selected' : '' }}>CUCEI</option>
        <option value="PREPA#12" {{ old('site') == 'PREPA#12' ? 'selected' : '' }}>PREPA#12</option>
        <option value="VOCA" {{ old('site') == 'VOCA' ? 'selected' : '' }} >VOCA</option>
        <option value="POLITECNICO" {{ old('site') == 'POLITECNICO' ? 'selected' : '' }}>POLITECNICO</option>
        <option value="EXTERIOR" {{ old('site') == 'EXTERIOR' ? 'selected' : '' }}>EXTERIOR</option>
        <option value="CDU" {{ old('site') == 'CDU' ? 'selected' : '' }}>CDU</option>
    </select>
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
