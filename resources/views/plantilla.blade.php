<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
          <!--Import Google Icon Font-->
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
          <!--Import materialize.css-->
          <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>

          <!--Let browser know website is optimized for mobile-->
          <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body class="#e0e0e0 grey lighten-2">

<nav class="#212121 grey darken-4">
    <div class="nav-wrapper">
      <a href="" class="brand-logo">Laravel-crud-demo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li> <a href="{{route('producto.create')}}">Nuevo</a></li>
        <li><a href="{{route('producto.index')}}">Productos</a></li>
      </ul>
    </div>
  </nav>



    @yield('contenido')


      <!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
</body>
</html>
