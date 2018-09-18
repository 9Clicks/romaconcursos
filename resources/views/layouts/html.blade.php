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
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap-slim.css') }}" type="text/css" />
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

        <div class="row mb-4">
            <div class="col-xl-12" id="tpl_body">
                Topo
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            @include('require.inc_header')
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        @include('require.inc_menu')
                    </div>
                </div>
            </div>
        </div>

    </div>

    @yield('content')

</body>

    <script type="text/javascript" src="{{ asset('dist/js/bootstraps.js') }}"></script>
    <script type="text/javascript" src="{{ asset('dist/js/poppers.js') }}"></script>

</html>