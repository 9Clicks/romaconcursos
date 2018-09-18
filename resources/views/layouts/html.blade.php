<!doctype html>

<html lang="pt_BR">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> - Ipatinga/MG</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/layout/favicon.png') }}" />

    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Author" content="">
    <meta name="language" content="" />
    <meta name="URL" content="http://" />
    <meta name="subject" content="" />
    <meta name="rating" content="general" />
    <meta name="updated" content="daily" />
    <meta name="robots" content="index, follow" />
    <meta name="audience" content="all" />
    <meta name="Publisher" content="" />
    <meta name="ia_archiver" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="msnbot" content="index, follow" />
    <meta name="Search Engines" content="" />
    <meta name="audience" content="all" />
    <meta name="revisit-after" content="1 days" />
    <meta name="generator" content="">
    <meta name="document-classification" content="" />

    <link rel="stylesheet" href="{{ elixir('dist/css/layout.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('dist/icones/app.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('dist/lightbox/css/lightbox.css') }}" type="text/css"/>

    <script type="text/javascript" src="{{ asset('dist/js/jQuery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('dist/lightbox/js/lightbox.js') }}"></script>

    <meta property="og:title" content="">
    <meta property="og:type" content="article">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta property="og:site_name" content="">
    <meta property="fb:app_id" content="">
    <meta property="og:description" content="">

</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12" id="tp_index">
                <!-- TOPO NULL -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="row">
                    <div class="col-lg-12" style="margin-top: 20px; margin-bottom: 20px">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="{{ asset('images/css/logo_az.png') }}" class="img-responsive" alt="">
                            </div>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-12" style="background: orange">
                                        <div class="row">
                                            {!! Form::open(['url' => 'foo/bar']) !!}
                                                <div class="col-lg-4 col-lg-offset-2" id="input-space">
                                                    <input class="form-control input-lg input-block" type="email" placeholder="Usuário/E-mail">
                                                </div>
                                                <div class="col-lg-3" id="input-space">
                                                    <input class="form-control input-lg input-block" type="password" placeholder="Senha">
                                                </div>
                                                <div class="col-lg-3" id="input-space">
                                                    <button type="button" class="btn btn-info btn-lg btn-block">Login</button>
                                                </div>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12" id="input-helper">
                                            Acesso Restrito, somente usuários cadastrados! Esqueceu sua Senha? <a href="#">Clique Aqui!</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="pull-right">
                                                <a href="" id="social-icon"><span class="icon-facebook2"></span></a>
                                                <a href="" id="social-icon"><span class="icon-instagram"></span></a>
                                                <a href="" id="social-icon"><span class="icon-twitter"></span></a>
                                                <a href="" id="social-icon"><span class="icon-google-plus3"></span></a>
                                                <a href="" id="social-icon"><span class="icon-youtube2"></span> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('content')

</body>

    <script type="text/javascript" src="{{ asset('dist/js/bootstrap.js') }}"></script>

</html>