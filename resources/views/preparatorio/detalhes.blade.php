@extends('layouts.html')

@section('content')

    <div class="row mt-2 mb-2">
        <div class="col-xl-12">
            <img src="{{ asset('images/cursos') }}/{{ $infoDetalhes->tbl_imgHeader }}" class="img-fluid img-thumbnail" alt="">
        </div>
    </div>
    <div class="row mt-3 mb-3">
        <div class="col-xl-12">

            <div class="col-xl-12" id="tpl_title_curso">
                <h2><span class="icon-flag1"></span> {{ $infoDetalhes->tbl_titulo }}</h2>
            </div>

        </div>
    </div>
    <div class="row mb-5">
        <div class="col-xl-12">
            <div class="row">
                <div class="col-xl-8 mb-5">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button id="card-button" class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <h3><span class="icon-pencil1"></span> Descrição:</h3>
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body" id="card-desc">
                                    <?php echo nl2br("$infoDetalhes->tbl_info") ?>
                                        <hr>
                                    <?php echo nl2br("$infoDetalhes->tbl_outros") ?>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button id="card-button" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <h3><span class="icon-calendar3"></span> Duração:</h3>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body" id="card-desc">
                                    <h2 style="color: #999999"><small>* Duração total de</small> <span class="icon-{{ $infoDetalhes->tbl_tempo }}"></span> <small>Meses.</small></h2>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button id="card-button" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <h3><span class="icon-wallet2"></span> Requisitos:</h3>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body" id="card-desc">
                                    <?php echo nl2br("$infoDetalhes->tbl_request") ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card text-center">
                                <div class="card-header" id="card-compra">
                                    <span class="icon-basket1"></span> Opção de Compra
                                </div>
                                <div class="card-body">
                                    <p class="card-text"><span class="badge badge-pill badge-danger">{{ $infoDetalhes->tbl_categoria }}</span></p>
                                    <h1><small>R$</small> <strong>{{ $infoDetalhes->tbl_preco }}</strong></h1>
                                    <p class="text-muted">
                                        {{ $infoDetalhes->tbl_desc }}
                                    </p>
                                </div>
                                <div class="card-footer text-muted" id="card-link">
                                    <a href="#" data-toggle="pagueseguro" data-placement="bottom" title="Pagamento Pag Seguro"><span class="icon-happy"></span> Mais informações para aquisição!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop