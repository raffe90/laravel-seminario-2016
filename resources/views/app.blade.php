<!DOCTYPE html>
<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="es"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="es"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="es"> <!--<![endif]-->
<head>

    <!-- Site meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Rafael Ramirez Urbina (www.fundaseth.es)">
    <meta name="designer" content="Rafael Ramirez Urbina (www.fundaseth.es)">
    <title>@yield('title')El trato hospitalario del futuro</title>
    <link rel="icon" type="image/png" href="/img/favicon.png" />
    <meta name="description" content="@yield('description')">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    <meta name="_token" content="{!! csrf_token() !!}"/>
    @yield('styles')
    <!-- CSS -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="outdated"></div>
    <div class="container-fluid">
        <header role="banner">
            <div id="logo-placeholder">
                <div class="container">
                    <a href="/">
                      <img id="logo-seminario" src="/img/seminario_2016.png" alt="2do Seminario Internacional de Seguridad del Paciente y Excelencia Clínica">
                    </a>
                    <ul class="right">
                      <li><span style="vertical-align: 5px; margin-right: 7.5px;"></span> <img src="/img/logo_quironsalud.png" alt="Logo Quirónsalud" style="max-height: 50px;"></li>
                      <li>Jueves, 5 de mayo de 2016</li>
                      <li>Hospital Universitario Fundación Jiménez Díaz (Madrid-España)</li>
                    </ul>
                </div>
            </div>
            <nav id="navbar-primary" class="navbar navbar-default" role="navigation">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-primary-collapse">
                    <span class="sr-only">Menú</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                        <a class="navbar-brand" href="/"><img class="logo-seminario" src="/img/seminario_2016.png" alt="2do Seminario Internacional de Seguridad del Paciente y Excelencia Clínica"><span class="invisible">Inicio</span></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-primary-collapse">
                  <ul class="nav navbar-nav">
                    <li class="{{ Request::is('programa') ? 'active' : '' }}"><a href="{{ url('/programa') }}" title="Programa">Programa</a></li>
                    <li class="{{ Request::is('ponentes') ? 'active' : '' }}"><a href="{{ url('/ponentes') }}" title="Ponentes">Ponentes</a></li>
                    <li class="{{ Request::is('proyectos') ? 'active' : '' }}"><a href="{{ url('/proyectos') }}" title="Proyectos">Proyectos</a></li>
                    <li class="{{ Request::is('premios') ? 'active' : '' }}"><a href="{{ url('/premios') }}" title="Premios">Premios</a></li>
                    <li class="{{ Request::is('registro') ? 'active' : '' }}"><a href="{{ url('/registro') }}" title="Inscripción">Inscripción</a></li>
                    <li class="{{ Request::is('como-llegar') ? 'active' : '' }}"><a href="{{ url('/como-llegar') }}" title="Cómo Llegar">Cómo Llegar</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
        </header><!-- header role="banner" -->
    </div><!-- container-fluid -->

    <div class="container">
        @yield('content')
    </div> <!-- ./container -->

    <footer style="">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row contact-data" style="">
                        <div class="col-md-4">
                            <p class="text-center text-lowercase email" style=""><span class="fa fa-envelope"></span> seminario.excelencia@quironsalud.es</p>
                        </div>
                        <div class="col-md-4">
                            <p class="text-center phone" style=""><span class="fa fa-phone"></span> 913981628</p>
                        </div>  
                        <div class="col-md-4">
                            <a href="https://twitter.com/hashtag/QuironsaludSegPac?src=hash" class="text-center hashtag" target="_blank" style=""><span class="fa fa-hashtag"></span>QuironsaludSegPac</a>
                        </div>  
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="container-fluid copy-wrapper" style="">
            <div class="row">
                <div class="col-xs-12">
                    <p class="text-center copy" style="">© 3<sup>er</sup> Seminario Internacional de Seguridad del Paciente y Excelencia Clínica</p>
                </div>
                <div class="col-xs-12 terms-and-conditions">
                    <a href="{{ url('/terms-and-conditions') }}">Condiciones de uso</a>
                </div> 
            </div>
        </div>
    </footer>
    <script src="/js/all.js"></script>
    @yield('javascript')
        <!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
    <script type="text/javascript">
        window.cookieconsent_options = {"message":"Utilizamos cookies propias y de terceros para ofrecerte una mejor experiencia de acuerdo a tus hábitos de navegación. Si continúas navegando, consideramos que aceptas su uso. Puedes obtener más información en nuestra ","dismiss":"Acepto","learnMore":"Política de Cookies.","link":"http://www.seminarioexcelencia.com/terms-and-conditions","theme":"light-bottom"};
    </script>

    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"></script>
    <!-- End Cookie Consent plugin -->

</body>
</html>
