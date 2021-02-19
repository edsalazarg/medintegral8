
<h3><a href="{{route('patients.show', ['patient' => $patient->id])}}">{{ $patient['firstName'] }}</a></h3>
<div class="mb-3">
    <a href="{{route('patients.edit', ['patient' => $patient->id])}}">Edit</a>
    <form action="{{route('patients.destroy', ['patient' => $patient->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="DELETE">
    </form>
</div>
