@extends('layouts.html')

@section('content')

    <div class="row mt-1">
        <div class="col-xl-12">
            @include('require.inc_caroucel')
        </div>
    </div>
    <div class="row mt-1">
        <div class="col-xl-12">
            @include('require.inc_category')
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            @include('require.inc_cursos')
        </div>
    </div>

@stop