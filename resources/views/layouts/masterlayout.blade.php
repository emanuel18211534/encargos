<!DOCTYPE html>
<html lang="es">
  <head>
     <meta name="route" value="{{url('/')}}">
    <meta name="token" id="token" value="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>@yield('titulo')</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <script type="text/javascript" src="js/vue.js"></script>

  </head>
  <body>

  @yield('contenido')

 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    @stack('scripts')
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>

