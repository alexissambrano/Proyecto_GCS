@extends('layouts.template2')

@section('contenidoCSS')
<link href="/leaflet/leaflet.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<link rel="stylesheet" href="{{ asset('css/EstilosTabla.css') }}"> 
      
@endsection

<!--<body>-->
@section('contenido')
<br>
<br>
<br>
<br>
<br>
<br>

    <h1>PRECIOS DE MEDICAMENTOS</h1>
    <h2>Compare los precios de cada farmacia</h2>

        

    <div style="display: flex; flex-direction:row;">


    
    <div class="contenedorTabla" style="margin-top: 0px; background-color:rgba(255,255,255,0.0s);">
    <form action="{{route('preciosTabla')}}" method="GET">
            @csrf
            <label><input type="text" name="nameSearch" placeholder="Ingrese producto"></label>
            <label><input type="text" name="nameSearch2" placeholder="Ingrese establecimiento"></label>
                        Filtro
                        <select name="filtro">
                            <option value="Todos" selected disabled>Todos</option>
                            <option value="Primera necesidad">Primera necesidad</option>
                            <option value="Covid">Covid</option>
                        </select>
            <label >     </label>
            <button class="btn btn-success my-2 my-sm-0" type="submit" style="    background: #bf2e2e;">
                buscar
            </button>
        </form>

        <table class="table">
            <thead style="background: #033076;
    border-bottom: solid 5px #0844a4;">
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Farmacia</th>
                <th>Stock</th>
                <th>Detalles</th>
            </tr>
            </thead>

            <!--Iconos-->



            @foreach($precios as $precio)
                <tr>
                    <td>{{ $precio->name_medi}}</td>
                    <td>{{ $precio->precio_med}}</td>
                    <td><a href="#">{{ $precio->userSpace->name_space}}</a></td>

                    <td>{{ $precio->cantidad}}</td>
                    @if ($precio->tipo_medicamento == 'Covid')
                    <td><i class="fab fa-battle-net icono"></i></td>
                    @else
                    <td><i class="fas fa-capsules icono"></i></td>
                    @endif
                </tr>
            @endforeach
            
            
        </table>
   
        {{$precios->render()}}
    

    <!--Cambia el color del nav selecionado-->
    <script>
        var colorClase= document.getElementById('nav-change-color');
        var cantOpcionMenu =colorClase.getElementsByTagName('li');
        for(var i=0;i<cantOpcionMenu.length;i++){
            cantOpcionMenu[i].classList.remove('active');
        }        
        cantOpcionMenu[1].classList.add('active');
    </script>
    <!--FINCambia el color del nav selecionado-->

</div>
</div>
    <!-- inicio de mapa-->

@endsection

<!--</body>-->
