@extends('layouts.html')

@section('content')

    <div class="col-xl-12 mt-4" id="tpl_title_pg">
        <h1><span class="icon-wallet"></span> Quem Somos:</h1>
    </div>
    <div class="col-xl-12 mt-5">
        <div class="row">
            <div class="col-xl-6" id="tpl_title_empresa">
                <h2><span class="icon-presentation"></span> {{ $appHistorys->tbl_title_body }}:</h2>
                <hr>
                <p class="mt-3" style="text-align: justify">
                    <?php echo nl2br("$appHistorys->tbl_historia") ?>
                </p>
                <p class="mt-4">
                    <img src="{{ asset('images/css/img_estudantes.jpg') }}" class="img-fluid img-thumbnail" alt="">
                </p>
            </div>
            <div class="col-xl-6" id="tpl_title_empresa">
                <h2><span class="icon-user-tie1"></span> {{ $appHistorys->tbl_title_info }}:</h2>
                <hr>
                <p class="mt-3" style="text-align: justify">
                    <?php echo nl2br("$appHistorys->tbl_info") ?>
                </p>
                <p class="mt-4">
                    <img src="{{ asset('images/css/img_estudantes_2.jpg') }}" class="img-fluid img-thumbnail" alt="">
                </p>
            </div>
        </div>
    </div>
    <hr>
    <div class="col-xl-12">
        <div class="row mb-5" id="img-galeria">
            @include('require.inc_galeria')
        </div>
    </div>


@stop