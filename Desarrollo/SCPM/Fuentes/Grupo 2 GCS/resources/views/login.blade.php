@extends('layouts.template2')

@section('contenidoCSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/master.css') }}">

@endsection

@section('contenido')

    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="login-box">
    <h1 style="color: #033076;
    font-weight: bold;"> INGRESE A SU CUENTA</h1>
        <img class="avatar" src="{{ asset('img/logoa.png') }}" alt="logo de covid" style="    border-radius: unset;width: auto;">
        <br>
        <br>

        <form method="POST" action="{{ route('login3') }}">
            @csrf
            <!---- Username --->
            <label for="username">Usuario</label>
            <input type="text" placeholder="Ingrese su Usuario" name="usuario">
            {!! $errors->first('usuario', '<span style="color:red">:message</span>') !!}
            <!---- Password --->
            <label for="Password">Contraseña</label>
            <input type="password" placeholder="Ingrese su contraseña" name="password">
            {!! $errors->first('password', '<span style="color:red">:message</span>') !!}
            <input type="submit" value="Ingresar" style="background: #033076;">

            <a href="#">¿Olvidó su contraseña?</a>

            <a href="{{ route('registro') }}">¿No tienes una cuenta?</a>
        </form>
    </div>

    @auth

    @endauth
    @guest
        <!--Cambia el color del nav selecionado-->
        <script>
            var colorClase = document.getElementById('nav-change-color');
            var cantOpcionMenu = colorClase.getElementsByTagName('li');
            for (var i = 0; i < cantOpcionMenu.length; i++) {
                cantOpcionMenu[i].classList.remove('active');
            }
            cantOpcionMenu[5].classList.add('active');

        </script>
        <!--FINCambia el color del nav selecionado-->

    @endguest
    <br>
@endsection
