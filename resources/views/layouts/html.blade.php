<!doctype html>

<html lang="pt_BR">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> - Ipatinga/MG</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/layout/favicon.png') }}" />

    <meta name="keywords" content="">
    <meta name="description" content="">
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
    <link rel="stylesheet" href="{{ asset('dist/css/compress.css') }}" type="text/css"/>
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
    <div class="container-fluid">
        PRE-FOOTER
    </div>

</body>

<Script type="text/javascript" src="{{ asset('dist/js/bootstrap.js') }}"></Script>
<Script type="text/javascript" src="{{ asset('dist/js/bundle.js') }}"></Script>
<Script type="text/javascript" src="{{ asset('dist/js/popper.js') }}"></Script>

</html>