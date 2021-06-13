@extends('layouts.app')

@section('title', 'Medical Records')

@section('content')

    <h3>All medical records</h3>

    @if ($med_record != null)
        <div>
            <h6>Patient</h6>
            <span>{{$med_record->patient->firstName}}</span>
            <h6>Date</h6>
            <span>{{$med_record->created_at}}</span>
            <form class="" action="{{route('med_records.destroy', $med_record->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
            <form class="" action="{{route('med_records.edit', $med_record->id)}}" method="get">
                @csrf
                <button type="submit">Edit</button>
            </form>

        </div>
    @else
        <p>Not found</p>
    @endif
@endsection
