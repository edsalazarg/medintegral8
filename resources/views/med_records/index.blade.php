@extends('layouts.app')

@section('title', 'Medical Records')

@section('content')

    <h3>All medical records</h3>
    @if ($med_records->count())
        <table>
        @foreach ($med_records as $med_record)
            <tr>
                <td>
                    {{$med_record->patient->firstName}} {{$med_record->patient->lastName}}
                </td>
                <td>
                    {{$med_record->blood_group}}
                </td>
                <td>
                    {{$med_record->diabetes}}
                </td>
                <td>
                    {{$med_record->hypertension}}
                </td>
                <td>
                    {{$med_record->epilepsy}}
                </td>
                <td>
                    {{$med_record->asthma}}
                </td>
                <td>
                    {{$med_record->pregnancies}}
                </td>
                <td>
                    <form class="" action="{{route('med_records.destroy', $med_record->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
                <td>
                    <form class="" action="{{route('med_records.edit', $med_record->id)}}" method="get">
                        @csrf
                        <button type="submit">Edit</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </table>
    @else
        <p>Empty</p>
    @endif
@endsection
