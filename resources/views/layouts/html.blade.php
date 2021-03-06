<!doctype html>

<html lang="{{ $appConfigs->tbl_language }}">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $appConfigs->tbl_title }} - Ipatinga/MG</title>
    <link rel="icon" type="image/png" href="{{ asset('images/css/favicon.png') }}" />

    <meta name="keywords" content="{{ $appConfigs->tbl_keywords }}">
    <meta name="description" content="{{ $appConfigs->tbl_descript }}">
    <meta name="Author" content="{{ $appConfigs->tbl_author }}">
    <meta name="language" content="{{ $appConfigs->tbl_language }}" />
    <meta name="URL" content="http://{{ $appConfigs->tbl_url }}" />
    <meta name="subject" content="{{ $appConfigs->tbl_subject }}" />
    <meta name="rating" content="general" />
    <meta name="updated" content="daily" />
    <meta name="robots" content="index, follow" />
    <meta name="audience" content="all" />
    <meta name="Publisher" content="{{ $appConfigs->tbl_publisher }}" />
    <meta name="ia_archiver" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="msnbot" content="index, follow" />
    <meta name="Search Engines" content="{{ $appConfigs->tbl_search }}" />
    <meta name="audience" content="all" />
    <meta name="revisit-after" content="1 days" />
    <meta name="generator" content="{{ $appConfigs->tbl_generator }}">
    <meta name="document-classification" content="" />

    <link rel="stylesheet" href="{{ elixir('dist/css/layout.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('dist/css/compress.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('dist/icones/app.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('dist/lightbox/css/lightbox.css') }}" type="text/css"/>

    <script type="text/javascript" src="{{ asset('dist/js/jQuery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('dist/lightbox/js/lightbox.js') }}"></script>
    <script type="text/javascript" src="{{ asset('dist/js/jMask.input.js') }}"></script>
    <script type="text/javascript" src="{{ asset('dist/js/jQuery.Validate.js') }}"></script>

    <meta property="og:title" content="">
    <meta property="og:type" content="article">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta property="og:site_name" content="">
    <meta property="fb:app_id" content="">
    <meta property="og:description" content="">

    <script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<body>

    <div class="container-fluid" id="tpl_top">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-4 mb-2">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="row mt-3">
                            <div class="col-xl-12">
                                @include('require.inc_logo')
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-7 offset-xl-1">
                        <div class="row">
                            <div class="col-xl-12">
                                @include('require.inc_login')
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-xl-12" id="tpl_restrity">
                                @include('require.inc_restrito')
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12" id="tpl_icones">
                                @include('require.inc_social')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                @include('require.inc_menu')
            </div>
        </div>
    </div>

    <div class="container">
        @yield('content')
    </div>

    <div class="container-fluid" id="tpl_pre-footer">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-4" id="logo-footer">
                                <div class="row mt-5">
                                    <div class="col-xl-12">
                                        <img src="{{ asset('images/css') }}/{{ $appDetalhes->tbl_image }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12" id="slogan">
                                        <h2>{{ $appDetalhes->tbl_slogan }}</h2>
                                    </div>
                                </div>
                                <hr style="opacity: 0; margin-top: 10px; margin-bottom: 10px">
                                <div class="row">
                                    <div class="col-xl-12" id="local-info">
                                        <h5 class="mt-4"><span class="icon-location1"></span>&nbsp; Onde Estamos: </h5>
                                        <h5 style="color: #cccccc"><small>{{ $appDetalhes->tbl_end }} - {{ $appDetalhes->tbl_bairro }}<br/>{{ $appDetalhes->tbl_cid }}</small></h5>
                                        <h5 class="mt-4"><span class="icon-phone11"></span>&nbsp; Telefones:</h5>
                                        <h5 style="color: #cccccc"><a href="http://api.whatsapp.com/send?1=pt_BR&phone=553195008584" target="_blank"><span class="icon-whatsapp"></span> <small>{{ $appDetalhes->tbl_ddd }}</small> <strong>{{ $appDetalhes->tbl_cel }}</strong></a></h5>
                                        <h5 class="mt-4"><span class="icon-paperplane"></span>&nbsp; E-mail:</h5>
                                        <h5 class="link-email mb-5"><a href="mailto:{{ $appDetalhes->tbl_email }}">{{ $appDetalhes->tbl_email }}</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">

                            </div>
                            <div class="col-xl-4">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="footer">
        <div class="row">
            <div class="col-xl-12">
                Desenvolvido por <a href="https://www.9clicks.com.br" target="_blank">9 Clicks Developers</a> - Todos os Direitos reservados a Roma Concursos &copy; Copyright {{ date('Y') }}.
            </div>
        </div>
    </div>

</body>

<Script type="text/javascript" src="{{ asset('dist/js/bootstrap.js') }}"></Script>
<Script type="text/javascript" src="{{ asset('dist/js/bundle.js') }}"></Script>
<Script type="text/javascript" src="{{ asset('dist/js/popper.js') }}"></Script>

<!-- Modais -->
@include('require.inc_pre-cadastro')

</html>