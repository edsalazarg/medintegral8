@extends('layouts.app')

@section('title', 'Users')

@section('content')

    <h3>Edit Medical record</h3>

    @if ($med_record != null)
        <div>
            <form class="" action="{{route('med_records.update', ['med_record' => $med_record->id]) }}" method="POST">
                @csrf
                @method('PUT')
                @include('med_record.partials.form')
                <div><input type="submit" value="Update" class="btn btn-primary btn-block"></div>
            </form>
        </div>
    @else
        <p>No existe</p>
    @endif
@endsection
