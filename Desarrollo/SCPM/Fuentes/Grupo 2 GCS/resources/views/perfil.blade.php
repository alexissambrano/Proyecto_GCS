<html>
<head>
<title>mediCOVID</title>
  <link href= "{{asset('/leaflet/leaflet.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/usuarioFB.css')}}">
  <link rel="stylesheet" href="{{asset('css/modal.css')}}">
  <link rel="stylesheet" href="{{asset('css/animate.css')}}">
  <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

</head> 
 
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="background: #0844a4;">
      <div class="top-area" style="    background: #033076;">
        <div class="container">
          <div class="row">
            <div class="col A">
              <p class="bold text-left">Contactenos: 994212883 </p>
            </div>
            <div class="col A">
              <p class="bold text-center">Nosotros | Informate</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container navigation">

      @if (Route::has('login'))
                <div class="navbar-header page-scroll">
                    <!-- <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>-->
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

        
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">

          <li class="active"><a href="{{route('welcomeUserRegister')}}" style="    color: white;">Inicio</a></li>
            <li><a href="{{route('preciosTabla')}}" style="    color: white;">Buscar productos</a></li>
            <li><a href="{{route('noticias')}}" style="    color: white;">Noticias</a></li>
            <li><a href="{{ route('comments') }}" style="color: white;">Comentarios</a></li>
            <li>
              <a href="{{route('welcomeUserRegister')}}">
                <form method="POST" action="{{ route('logout') }}">{{ csrf_field() }}
                    <button class="btnA btn-danger btn-xs">Cerrar sesion</button>
                </form>
              </a>
            </li>
          </ul>
        </div>
        
      </div>
     
    </nav>

<body>

<div class="container">

	<div class="row">

		<div class="col-md-6">
      
      <div class="card">
		    <div class="card-body">
		      <div class="row">
		        <div class="col-md-12">
		          <h4>Datos personales</h4>
		          <hr>
		        </div>
		      </div>
		      <div class="row"> 
		        <div class="col-md-12">
		          <form action="{{route('update.userfb',\Auth::user())}}" method="post" enctype="multipart/form-data">
                @csrf
                @php
                $usuarioActual = \Auth::user(); 
                @endphp
                <!-- Datos de Usuario general-->
                <div class="form-group row">
                  <label for="username" class="col-4 col-form-label">Nombre de usuario</label> 
                  <div class="col-8">
                      <input id="username" name="usuario" value="{{$usuarioActual->usuario}}"  class="form-control here" type="text" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="name" class="col-4 col-form-label">Nueva Contraseña</label> 
                  <div class="col-8">
                    <input id="name" name="contra" placeholder="nueva contraseña" class="form-control here" type="text">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="lastname" class="col-4 col-form-label">Repetir contraseña</label> 
                  <div class="col-8">
                    <input id="lastname" name="contra_re" placeholder="repetir contraseña" class="form-control here" type="text">
                  </div>
                </div>            
                <div class="form-group row">
                  <label for="distrito" class="col-4 col-form-label">Distrito</label> 
                  <div class="col-8">
                    <input id="distrito" name="distrito" class="form-control here" value="{{$usuarioActual->distrito}}" type="text" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="sexo" class="col-4 col-form-label">Sexo</label> 
                  <div class="col-8">
                    <input id="sexo" name="sexo" class="form-control here" value="{{$usuarioActual->sexo}}" disabled type="text">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="email" class="col-4 col-form-label">Correo electrónico</label> 
                  <div class="col-8">
                    <input id="email" name="correo" placeholder="Email" class="form-control here" value="{{$usuarioActual->correo_recu}}" type="text">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="offset-4 col-8">
                      <button name="submit" type="submit" class="btn btn-primary">Guardar cambios</button>

                    </div>
                </div>
              </form>
		        </div>
          </div>      
		    </div>
		  </div>
    </div>
	</div>
</div>
<br>
<br>
<br>

<!--Estilos -->
@if (!$is_fb)
<style>
    .container{
      width: 100% !important;
    }
    .row{
      width: 100% !important;

    }
    .col-md-6{
      width: 100% !important;
    }
    .card{
      width: 200%!important;
      border: 1px solid black !important;
    }
    .escondido-div{
      display: none;
    }
</style>

</script>
    @if (Route::has('login'))
    @auth
    @endauth
    @endif
@endif


<br>
<footer>
<div class="container">
            <div class="rowA">

                <div class="colB">
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


                <div class="colB">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="widget">
                            <h5>CONTENIDO</h5>
                            <ul>
                                <li><a href="#" data-toggle="modal" data-target="#ventanaModalQuienes">¿Quiénes somos?</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#ventanaModalPolitica">Política y privacidad</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#ventanaModalAtencion">Atención al cliente</a></li>


                            </ul>
                        </div>
                    </div>
                </div>
                <div class="colB">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="widget">
                            <h5>CONTÁCTENOS</h5>
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
          <div class="container" >
            <div class="row">
              <div class="colC">
                <div class="wow fadeInLeft" data-wow-delay="0.1s">
                  <div class="text-center">
                    <p>&copy;Copyright - Grupo2Gestión. All rights reserved.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</footer>
</body>
</html>
