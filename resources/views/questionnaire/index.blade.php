@extends('layouts.app')

@section('content')
    @if($questionnaires->count())
    <table>
        <tbody>
        @foreach($questionnaires as $questionnaire)
            <tr>
                <td>
                    {{$questionnaire->patient->firstName}} {{$questionnaire->patient->lastName}}
                </td>
                <td>
                    {{$questionnaire->self_employed}}
                </td>
                <td>
                    {{$questionnaire->family_history}}
                </td>
                <td>
                    {{$questionnaire->work_interfere}}
                </td>
                <td>
                    {{$questionnaire->no_employees}}
                </td>
                <td>
                    {{$questionnaire->remote_work}}
                </td>
                <td>
                    {{$questionnaire->tech_company}}
                </td>
                <td>
                    {{$questionnaire->benefits}}
                </td>
                <td>
                    {{$questionnaire->care_options}}
                </td>
                <td>
                    {{$questionnaire->wellness_program}}
                </td>
                <td>
                    {{$questionnaire->seek_help}}
                </td>
                <td>
                    {{$questionnaire->anonymity}}
                </td>
                <td>
                    {{$questionnaire->leave}}
                </td>
                <td>
                    {{$questionnaire->mentalhealthconsequence}}
                </td>
                <td>
                    {{$questionnaire->physhealthconsequence}}
                </td>
                <td>
                    {{$questionnaire->coworkers}}
                </td>
                <td>
                    {{$questionnaire->supervisor}}
                </td>
                <td>
                    {{$questionnaire->mentalhealthinterview}}
                </td>
                <td>
                    {{$questionnaire->physhealthinterview}}
                </td>
                <td>
                    {{$questionnaire->mentalvsphysical}}
                </td>
                <td>
                    {{$questionnaire->obs_consequence}}
                </td>
                <td>
                    <div>
                            <span>
                                <button>update</button>
                            </span>
                        <span>
                                <button>delete</button>
                            </span>
                        <span>
                                <button>edit</button>
                            </span>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @else
        <p>No questionnaires</p>
    @endif

@endsection
