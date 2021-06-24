@extends('layouts.app')

@section('title', 'Create Med Record')

@section('content')
    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">Crear Historial Medico</h3>
            </div>
            <div class="card-toolbar">
            </div>
        </div>

        @isset($patients)
            @if(count($patients) == 0)
                <div class="card-title flex-wrap border-0 pt-6 pb-0">
                    <h3 class="card-label">No hay pacientes sin historial medico</h3>
                </div>
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <a href="{{route('patients.create')}}" class="btn btn-primary font-weight-bolder">
                    <span class="svg-icon svg-icon-md">
                        <!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Design/Flatten.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <circle fill="#000000" cx="9" cy="15" r="6" />
                                <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                            </g>
                        </svg>
                    </span>Crear Paciente</a>
                            <!--end::Button-->
                </div>
            @else
                <div class="card-body">
                    <form action="{{route('med_records.store')}}" method="POST">
                        @csrf
                        @include('med_records.partials.form')
                        <div><input class="btn btn-primary btn-block" type="submit" value="Crear"></div>
                    </form>
                </div>
            @endif
        @endisset
    </div>
@endsection
