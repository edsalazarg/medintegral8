@extends('layouts.app')

@section('title', 'Create the Patient')

@section('content')
    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">Crear paciente</h3>
            </div>
            <div class="card-toolbar">

            </div>
        </div>
        <div class="card-body">
            <!--begin: Search Form-->
            <!--begin::Search Form-->
            <!--end::Search Form-->
            <!--end: Search Form-->
            <!--begin: Datatable-->
            <form action="{{route('patients.store')}}" method="POST">
                @csrf
                @include('patients.partials.form')
                <div><input type="submit" value="Create"></div>
            </form>
        </div>
    </div>
@endsection
