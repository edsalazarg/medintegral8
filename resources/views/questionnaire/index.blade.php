@extends('layouts.app')

@section('content')
    @if($questionnaires->count())
        {{--    <h3><a href="{{route('patients.create')}}">Create Patient!!!!</a></h3>--}}
        <!--begin: Datatable-->
        <div class="card card-custom">
            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                <div class="card-title">
                    <h3 class="card-label">Cuestionarios Psicologicos</h3>
                </div>
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <a href="{{route('questionnaire.create')}}" class="btn btn-primary font-weight-bolder">
			<span class="svg-icon svg-icon-md">
				<!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Design/Flatten.svg-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<rect x="0" y="0" width="24" height="24" />
						<circle fill="#000000" cx="9" cy="15" r="6" />
						<path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
					</g>
				</svg>
                <!--end::Svg Icon-->
			</span>Crear Cuestionario</a>
                    <!--end::Button-->
                </div>
            </div>
            <div class="card-body">
                <!--begin: Search Form-->
                <!--begin::Search Form-->
                <div class="mb-7">
                    <div class="row align-items-center">
                        <div class="col-lg-9 col-xl-8">
                            <div class="row align-items-center">
                                <div class="col-md-4 my-2 my-md-0">
                                    <div class="input-icon">
                                        <input type="text" class="form-control" placeholder="Buscar..." id="kt_datatable_search_query" />
                                        <span>
									<i class="flaticon2-search-1 text-muted"></i>
								</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Search Form-->
                <!--begin: Datatable-->
                <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable_questionnaires">
                    <thead>
                    <tr>
                        {{--                    <th title="id">ID</th>--}}
                        <th title="nombre">Nombre Paciente</th>
                        {{--                    <th title="email">Email</th>--}}
                        {{--                    <th title="departamento">Departamento</th>--}}
                        <th title="edad">Fecha creacion</th>
                        <th title="actions">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($questionnaires as $key => $questionnaire)
                        <tr>
                            {{--                        <td>--}}
                            {{--                            {{$patient->id}}--}}
                            {{--                        </td>--}}
                            <td>
                                {{$questionnaire->patient->firstName." ".$questionnaire->patient->lastName}}
                            </td>
                            {{--                        <td>--}}
                            {{--                            {{$patient->email}}--}}
                            {{--                        </td>--}}
                            {{--                        <td>--}}
                            {{--                            {{$patient->department}}--}}
                            {{--                        </td>--}}
                            <td>
                                {{$questionnaire->created_at}}
                            </td>
                            <td>
                                <div>
                                    <a href="{{route('questionnaire.show', ['questionnaire' => $questionnaire->id])}}" class="btn btn-sm btn-clean btn-icon mr-2" title="Ver Detalles">
                            <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo3/dist/../src/media/svg/icons/General/Visible.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <path d="M3,12 C3,12 5.45454545,6 12,6 C16.9090909,6 21,12 21,12 C21,12 16.9090909,18 12,18 C5.45454545,18 3,12 3,12 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                    <path d="M12,15 C10.3431458,15 9,13.6568542 9,12 C9,10.3431458 10.3431458,9 12,9 C13.6568542,9 15,10.3431458 15,12 C15,13.6568542 13.6568542,15 12,15 Z" fill="#000000" opacity="0.3"/>
                                </g>
                                </svg><!--end::Svg Icon-->
                            </span>
                                    </a>
                                    <a href="{{route('questionnaire.edit', ['questionnaire' => $questionnaire->id])}}" class="btn btn-sm btn-clean btn-icon mr-2" title="Editar paciente">
                            <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo3/dist/../src/media/svg/icons/Design/Edit.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>
                                    <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>
                                </g>
                                </svg><!--end::Svg Icon-->
                            </span>
                                    </a>
                                    {{--                            <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2" title="Eliminar paciente" data-toggle="modal" data-target="#exampleModal">--}}
                                    {{--                            <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo3/dist/../src/media/svg/icons/Home/Trash.svg-->--}}
                                    {{--                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                                    {{--                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                                    {{--                                    <rect x="0" y="0" width="24" height="24"/>--}}
                                    {{--                                    <path d="M6,8 L18,8 L17.106535,19.6150447 C17.04642,20.3965405 16.3947578,21 15.6109533,21 L8.38904671,21 C7.60524225,21 6.95358004,20.3965405 6.89346498,19.6150447 L6,8 Z M8,10 L8.45438229,14.0894406 L15.5517885,14.0339036 L16,10 L8,10 Z" fill="#000000" fill-rule="nonzero"/>--}}
                                    {{--                                    <path d="M14,4.5 L14,3.5 C14,3.22385763 13.7761424,3 13.5,3 L10.5,3 C10.2238576,3 10,3.22385763 10,3.5 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>--}}
                                    {{--                                </g>--}}
                                    {{--                                </svg><!--end::Svg Icon-->--}}
                                    {{--                            </span>--}}
                                    {{--                            </a>--}}
                                    {{--                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
                                    {{--                                    <div class="modal-dialog" role="document">--}}
                                    {{--                                        <div class="modal-content">--}}
                                    {{--                                            <div class="modal-header">--}}
                                    {{--                                                <h5 class="modal-title" id="exampleModalLabel">Eliminar paciente</h5>--}}
                                    {{--                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                                    {{--                                                    <i aria-hidden="true" class="ki ki-close"></i>--}}
                                    {{--                                                </button>--}}
                                    {{--                                            </div>--}}
                                    {{--                                            <div class="modal-body">--}}
                                    {{--                                                ¿Estas seguro que quieres eliminar al paciente?--}}
                                    {{--                                            </div>--}}
                                    {{--                                            <div class="modal-footer">--}}
                                    {{--                                                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Cancelar</button>--}}
                                    {{--                                                    <form action="{{route('patients.destroy', ['patient' => $patient->id])}}" method="POST">--}}
                                    {{--                                                        @csrf--}}
                                    {{--                                                        @method('DELETE')--}}
                                    {{--                                                        <input type="submit" class="btn btn-primary font-weight-bold" value="Eliminar">--}}
                                    {{--                                                    </form>--}}
                                    {{--                                            </div>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                    {{--                                </div>--}}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <!--end: Datatable-->
            </div>
        </div>

        <!--end: Datatable-->
    @endif

@endsection

@section("scripts")
    <script src={{asset("js/questionnaireTable.js")}}></script>
@endsection

