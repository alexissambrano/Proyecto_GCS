<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>mediCOVID</title>

    <!-- css -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/plugins/cubeportfolio/css/cubeportfolio.min.css">
    <link href="/css/nivo-lightbox.css" rel="stylesheet" />
    <link href="/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
    <link href="/css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="/css/owl.theme.css" rel="stylesheet" media="screen" />
    <link href="/css/animate.css" rel="stylesheet" />
    <link href="/css/style.css" rel="stylesheet">
    <!--Contenido CSS personalizado-->
    @yield('contenidoCSS')
    <!--FIN Contenido CSS personalizado-->

    <!-- boxed bg -->
    <!-- template skin -->
    <link id="t-colors" href="/color/default.css" rel="stylesheet">
</head>
<body >

<body>

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="background: #0844a4;">
        @php
        $user=\Auth::user();
        @endphp
        <div class="top-area" style="background: #033076;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <p class="bold text-left">Contactenos: 994212883 </p>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <p class="bold text-center">Nosotros | Informate</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container navigation">

            @if (Route::has('login'))
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    @auth
                        <a class="navbar-brand" href="{{ route('welcomeUserRegister') }}">
                            <img src="/img/logoa.png" class="img-responsive" alt="" width="200" height="75" />
                        </a>
                    @else
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img src="/img/logoa.png" class="img-responsive" alt="" width="200" height="75" />
                        </a>
                    @endauth
                </div>
            @endif
            <!-- Collect the nav links, forms, and other content for toggling -->
            @if (Route::has('login'))
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav" id="nav-change-color">
                        @auth
                            <li class="active"><a href="{{ route('welcomeUserRegister') }}" style="color: white;">Home</a></li>
                        @endauth
                        
                        
                        
                        @guest
                            <li class="active"><a href="{{ route('home') }}" style="color: white;">Home</a></li>
                        @endguest
                        <li><a href="{{ route('preciosTabla') }}" style="color: white;">Buscar productos</a></li>
                        <li><a href="{{ route('noticias') }}" style="color: white;">Noticias</a></li>
                        <li><a href="#" style="color: white;">Comentarios</a></li>
                        @auth
                            <li><a href="#" style="color: white;">Bienvenido {{ $user->usuario }}</a></li>

                            <li><a href="#">
                                    <form method="POST" action="{{ route('logout') }}">{{ csrf_field() }}
                                        <button class="btn btn-danger btn-xs">Cerrar sesion</button>
                                    </form>
                                </a>
                            </li>
                        @else
                            <li><a href="{{ route('registro') }}" style="color: white;">Registrarse</a></li>


                            <li><a href="{{ route('login') }}" style="color: white;">Login</a></li>
                        @endauth
                    </ul>
                </div>
            @endif
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!--Contenido central-->
    @yield('contenido')
    <!--FIN Contenido central-->

    <footer>

        <div class="container">
            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="widget">
                            <img src="/img/logoa.png" class="img-responsive center" alt="" width="200" height="75" />
                        </div>
                    </div>
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="widget">
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-md-4">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="widget">
                            <h4>CONTENIDO</h4>
                            <ul>
                                <li><a href="#" data-toggle="modal" data-target="#ventanaModalQuienes">¿Quiénes somos?</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#ventanaModalPolitica">Política y privacidad</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#ventanaModalAtencion">Atención al cliente</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="widget">
                            <h4>CONTÁCTENOS</h4>
                            <ul>
                                <li>
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                                    </span> 994212883
                                </li>
                                <li>
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
                                    </span> mediCOVID@gmail.com
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="text-left">
                                <p>&copy;Copyright - Grupo2Gestión. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



<!-- Popup paginas relleno -->
    <style>
        .nav-horizontal-simple{
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;            
            justify-content: center;
            text-align: center;
        }

        .nav-horizontal-simple>label{
            font-family: monospace;
            text-align:center;
            border-width: 2px 2px 0px 2px;
            border-radius: 10%;
            border-style: inset;
            border-color: rgba(0,0,0,0.5);
            padding: 1px;
            cursor: pointer;
            background: rgba(153,160,208,0.3);
            opacity: 0.5;
        }
        .nav-horizontal-simple>label:hover{
            opacity: 1;
        }
        
        .nav-horizontal-simple>label:active{
            background: rgba(153,160,208,0.6);
        }


        .div-1-conocenos{
            display: none;
        }
        .div-1-conocenos-on{
            display: inline;
            background: rgba(153,160,208,0.1);
            padding: 10px;
        }
        .label-1-title{
            font-size: 18px; 
            font-weight:bold;
        }
        .linea-divide{
            border-width: 4px;
            border-color: rgba(91,91,255,0.5);
            border-radius: 4px;
            width: 80%;
            
        }
        .show-modal-body{
            display: none;
        }
        .show-modal-body-on{
            display: grid;
        }
        .responsive-modal-now{
            width: 60%;
        }
        @media screen and (max-width:800px){
            .responsive-modal-now{
                width: 90%;
                overflow: scroll;
            }
        }


    </style>
    <!--¿Quienes somos?-->
    <div class="modal" id="ventanaModalQuienes" style="width:100%;" >
        <div class="modal-dialog"  role="document">
        <div class="modal-content" style="border: 4px inset rgba(153,160,208,0.9);" id="algo">
            <div class="row">
            <div class="col-sm-12">
                <div class="modal-header nav-horizontal-simple">
                    <label for="">
                        Conócenos
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-users fa-stack-1x"></i>
                        </span>
                    </label>
                    <label for="">
                        Valores
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-newspaper-o fa-stack-1x"></i>
                        </span>
                    </label>
                    <label for="">
                        Objetivos
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-line-chart fa-stack-1x"></i>
                        </span>
                    </label>
                </div>
                <div class="modal-body" style="border-width: 0px 2px 0px 2px;border-style: inset;border-color: rgba(0,0,0,0.5);">
                    <div class="row">
                        <div class="col-sm-12 div-1-conocenos" style="text-align: center;">
                            <h2>mediCOVID</h2>
                            <h4>¿Quienes somos?</h4>
                            <p style="font-family: sans-serif;">Somos una pequeña organizacion en Peru que tenemos por objetivo hacer conocer los precios 
                                de los medicamento en el pais, especialmente sobre los medicamentos referentes
                                al COVID y tambien para hacer conocer los precios de los medicamentos en general.
                                <br>
                            </p>
                            <h4>¿Cómo nació la idea?</h4>
                            <p style="font-family: sans-serif;">
                                La idea nace tan solo con echar un vistazo a la realidad peruana, algunas farmacias
                                y boticas suben indiscriminadamente los precios ,aprovechandose del contexto
                                y la necesidad de sus compatrioras; esta idea nació con la idea de denunciar
                                a dichos establecimientos y recomendar o "premiar" a las que no siguen ese camino.</p>

                                <img src="/gif/gato90.gif" alt="Gato">
                            </div>
                        <div class="col-sm-12 div-1-conocenos" style="text-align: center;">
                            <div class="row">
        
                                <div class="col-sm-4">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-recycle fa-stack-2x"></i>
                                    </span>
                                    <hr class="linea-divide">
                                    <h4 class="label-1-title">Confiabilidad</h4>                                    
                                    <p>Lo datos ingresados nunca lo revelaremos ante nadie</p>
                                </div>
                                <div class="col-sm-4">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-xing fa-stack-2x"></i>
                                    </span>
                                    <hr class="linea-divide">
                                    <h4 class="label-1-title">Justicia</h4>
                                    <p>Permitimos a cualquier persona registrarse en la aplicacion web</p>                                    
                                </div>
                                <div class="col-sm-4">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-tree fa-stack-2x"></i>
                                    </span>    
                                    <hr class="linea-divide">
                                    <h4 class="label-1-title">Transparencia</h4>                                                                        
                                    <p>Todas nuestras intenciones son abiertas y cualquiera lo puede verificar</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-building fa-stack-2x"></i>
                                    </span>
                                    <hr class="linea-divide">
                                    <h4 class="label-1-title">Solidaridad</h4>         
                                    <p>Buscamos ayudar a las personas a conseguir el mejor precio</p>                                                               
                                </div>
                                <div class="col-sm-6">
                                    
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-institution fa-stack-2x"></i>
                                    </span>
                                    <hr class="linea-divide">
                                    <h4 class="label-1-title">Respeto</h4>
                                    <p>Todos los comentarios y/o sugerencias seran tratados con respeto</p>                                                                        
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 div-1-conocenos">
                            <ul style="list-style: none">
                                <li style="font-family: sans-serif;;line-height : 1;">
                                    <span class="fa-stack fa-lg" style="float: left; color:rgba(255,0,0,0.8);"><i class="fa fa-bullseye fa-stack-2x"></i></span>
                                    Mostrar los precios de los medicamentes de las farmacias y boticas al alcance del usuario.
                                </li>
                                <br>
                                <li style="font-family: sans-serif;;line-height : 1;">
                                    <span class="fa-stack fa-lg" style="float: left; color:rgba(255,0,0,0.5);"><i class="fa fa-bullseye fa-stack-2x"></i></span>
                                    Permitir a los usuarios hacer denuncias publicas sobre abusos cometidos en establecimiento de salud.
                                </li>
                                <br>
                                <li>
                                    <img src="/gif/buho27.gif" alt="buho">
                                </li>
                                <br>
                                <li style="font-family: sans-serif;;line-height : 1;">
                                    <span class="fa-stack fa-lg" style="float: left; color:rgba(255,0,0,0.5);"><i class="fa fa-bullseye fa-stack-2x"></i></span>
                                    Mantener un registro de los precios para poder saber cuando los establecimiento de salud suben los precios.
                                </li>
                                <br>
                                <li style="font-family: sans-serif;;line-height : 1;">
                                    <span class="fa-stack fa-lg" style="float: left; color:rgba(255,0,0,0.8);"><i class="fa fa-bullseye fa-stack-2x"></i></span>
                                    Darle ubicaciones y facilidades a los usuarios para conseguir las medicinas que buscan.
                                </li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                <button class="btn btn-warning" type="button" data-dismiss="modal" >Cerrar</button>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <script>
        var opciones_cono=document.getElementsByClassName('div-1-conocenos');
        var nav_cono=document.getElementsByClassName('nav-horizontal-simple');
        var label_nav_cono=nav_cono[0].getElementsByTagName('label');
        

        opciones_cono[0].classList.add('div-1-conocenos-on');
        label_nav_cono[0].style.opacity="1";
        label_nav_cono[0].onclick=function(){
            for(var i=0;i<label_nav_cono.length;i++){
                opciones_cono[i].classList.remove('div-1-conocenos-on');
                label_nav_cono[i].style.opacity="0.5";
            }
            opciones_cono[0].classList.add('div-1-conocenos-on');
            label_nav_cono[0].style.opacity="1";
        }
        label_nav_cono[1].onclick=function(){
            for(var i=0;i<label_nav_cono.length;i++){
                opciones_cono[i].classList.remove('div-1-conocenos-on');
                label_nav_cono[i].style.opacity="0.5";

            }
            opciones_cono[1].classList.add('div-1-conocenos-on');
            label_nav_cono[1].style.opacity="1";
        }
        label_nav_cono[2].onclick=function(){
            for(var i=0;i<label_nav_cono.length;i++){
                opciones_cono[i].classList.remove('div-1-conocenos-on');
                label_nav_cono[i].style.opacity="0.5";

            }
            opciones_cono[2].classList.add('div-1-conocenos-on');
            label_nav_cono[2].style.opacity="1";
        }

        
    </script>

    <!--Politica y privacidad-->
    <div class="modal" id="ventanaModalPolitica" style="width:100%;" >
        <div class="modal-dialog responsive-modal-now"  role="document">
        <div class="modal-content" style="border: 4px inset rgba(153,160,208,0.9);" id="algo">
            <div class="row" style="width: 100%">
            <div class="col-sm-12">
                <div class="modal-header">
                    <div class="row">
                        <h2 style="font-family: monospace;text-align:center;">Terminos y condiciones</h2>
                    </div>
                    
                    

                </div>
                <div class="modal-body show-modal-body">
                    <div class="row">
                        <div class="col-sm-2" >
                            <p><strong>1.- Privacidad</strong> </p>

                        </div>
                        <div class="col-sm-10" style="border-color:rgba(253,6,6,0.5);border-width:0px 0px 0px 2px;border-style:solid;">
                            <p style="font-family: sans-serif;"><strong>1.1</strong>  Nuestro sitio web podrá recoger información personal por ejemplo: Nombre,
                                  información de contacto como  su dirección de correo electrónico e
                                   información demográfica.</p>
                            <p style="font-family: sans-serif;"><strong>1.2</strong>   Este sitio web pudiera contener en laces a otros sitios que pudieran ser de su interés.
                                 Una vez que usted de clic en estos enlaces y abandone nuestra página,
                                  ya no tenemos control sobre al sitio al que es redirigido y por lo tanto
                                   no somos responsables de los términos o privacidad ni de la protección de sus datos
                                    en esos otros sitios terceros. Dichos sitios están sujetos a sus propias políticas
                                     de privacidad por lo cual es recomendable que los consulte para confirmar que usted está de
                                      acuerdo con estas.</p>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-2">
                            <label for=""></label>
                            <p><strong>2.- Cuenta</strong> </p>

                        </div>
                        <div class="col-sm-10" style="border-color:rgba(253,6,6,0.5);border-width:0px 0px 0px 2px;border-style:solid;">
                            <p style="font-family: sans-serif;">
                                <strong>2.1</strong>
                                 Cuando el Usuario utiliza el Sitio Web,
                                 puede optar por abrir una cuenta en el Sitio. En ese caso, el Usuario
                                  recibirá el número de cuenta virtual y la contraseña inicial que le correspondan.
                                   Es responsabilidad exclusiva del Usuario:
                                <br>
                                (a) mantener la confidencialidad de dichos números de cuenta virtual y contraseña; y 
                                <br>
                                (b) actualizar y comprobar frecuentemente su contraseña.                                
                            </p>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                <button class="btn btn-warning" type="button" data-dismiss="modal" >Cerrar</button>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

    <script>
        var modalShowContrato=document.getElementsByClassName('show-modal-body');
        modalShowContrato[0].classList.add('show-modal-body-on');
        function modalShowContrato1(){
            modalShowContrato[0].classList.add('show-modal-body-on');
            modalShowContrato[1].classList.remove('show-modal-body-on');
        }
        function modalShowContrato2(){
            modalShowContrato[0].classList.remove('show-modal-body-on');
            modalShowContrato[1].classList.add('show-modal-body-on');

        }

    </script>

    <!--Atencion-->
    <div class="modal" id="ventanaModalAtencion" style="width:100%;" >
        <div class="modal-dialog"  role="document">
        <div class="modal-content" style="border: 4px inset rgba(153,160,208,0.9);" id="algo">
            <form action="{{route('reporteEnviado')}}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="row">
                    <div class="col-sm-12">
                        <div class="modal-header">
                            <h2 style="font-family: monospace;text-align:center;">Envie su reporte de precios</h2>
                            <p style="color: red;">* ¿Eres cliente de farmacias y/o boticas ? entonces comparte los precios.</p>
                            <p style="color: red;">* Puedes colaborar con esta comunidad con ubicaciones y precios de las farmarcia de tu barrio.</p>
                            <p style="color: red;">* Con la ayuda de su colaboracion se podrá llevar a cabo este proyecto que nos beneficia a todos.</p>
                        </div>
                        @guest
                        <div class="modal-body" id="show-input">
                            
                        <h2 style="text-align: center;">Necesita registrarse para mandar su reporte</h2>
                        </div>                                        
                        @endguest
                        
                        
                        <button class="btn btn-warning" type="button" data-dismiss="modal" >Cerrar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>


<!-- Fin Popup paginas relleno-->










    </footer>



    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.easing.min.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/jquery.scrollTo.js"></script>
    <script src="/js/jquery.appear.js"></script>
    <script src="/js/stellar.js"></script>
    <script src="/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/nivo-lightbox.min.js"></script>
    <script src="/js/custom.js"></script>   

</body>
