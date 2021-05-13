<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="http://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Round" rel="stylesheet">
    <link href="{{asset('css/map.css')}}" rel="stylesheet">
    <link href="{{asset('css/oferta.css')}}" rel="stylesheet">
    <link href="{{asset('css/rest.css')}}" rel="stylesheet">
    <link href="{{asset('css/modal.css')}}" rel="stylesheet">
    {{-- <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"> --}}
    <script src="{{asset('js/jquery-3.6.0.js')}}"></script>
</head>
<body>
    <div id="map"></div>
    <div id="buscador" class="flotante shadowRight flex">
        <span class="material-icons">search</span>
        <input type="text" name="txtBuscador" id="txtBuscador"/>
    </div>
    <div id="divRest" class="flotante shadowRight">
        <div id="contentRest">
            <div id="btnHideRest" class="flex btnHide"> 
                <span class="material-icons-round">close</span>
            </div>
            <div id="divImgRest">
                <img src="{{asset('src/fondoLogin.jpg')}}" alt="imgRest">
            </div>
            <div id="infoRest">
                <h1>Restaurante</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima aut suscipit possimus ut ab! Sed facilis eum eius harum debitis, recusandae neque ex quasi expedita, illum perferendis delectus commodi mollitia!</p>
                <div id="divMenu">
                    <h2>Menú</h2>
                    <div id="precioMenu"><h2>S/ 8.00</h2></div>
                    <table>
                        <tr>
                            <td><b>Entrada</b></td>
                        </tr>
                        <tr>
                            <td>Sopa</td>
                        </tr>
                        <tr>
                            <td><b>Segundo</b></td>
                        </tr>
                        <tr>
                            <td>Arroz con pollo</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div id="optionsRest" class="flex">
            <button value="1" data-toggle="modal" data-target="#modalRest">Menú completo</button>
            <button value="2" data-toggle="modal" data-target="#modalRest">Platos a la carta</button>
            <button value="3" data-toggle="modal" data-target="#modalRest">Postres</button>
        </div>
    </div>
    <div class="fondoModal">
        <div id="detalleOptionRest">
            <div id="btnHideDetalle" class="flex btnHide"> 
                <span class="material-icons-round">close</span>
            </div>
            <h1></h1>
        </div>
    </div>
    <div id="btnOfertas" class="flotante shadowLeft flex">
        <div>
            <p>S/.</p>
            Ofertas<br/>destacadas
        </div>
    </div>
    <div id="divOfertas" class="flotante shadowLeft">
        
    </div>
</body>
{{-- <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script> --}}
<script src="{{asset('js/map.js')}}"></script>
<script src="{{asset('js/oferta.js')}}"></script>
<script src="{{asset('js/rest.js')}}"></script>
<script
       src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqWsbYot3tY_QyJoDlmsPjlTyBXY5yBzM&callback=initMap">
</script>
<script>
    console.log(myMap);
</script>
</html>