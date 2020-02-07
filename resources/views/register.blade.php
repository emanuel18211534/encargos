<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <title></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="adminlte/css/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="adminlte/css/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="adminlte/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="adminlte/css/skins/skin-blue.min.css">

  <script type="text/javascript" src="js/vue.js"></script>

  
  <meta name="token" id="token" value="{{ csrf_token() }}">

  <meta name="route" value="{{url('/')}}">

</head>
<body class="hold-transition login-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Encargos</b>.com</a>
  </div>
  <div class="register-box-body">
    <p class="login-box-msg">Registrar nuevo usuario</p>
    <form id="register">
       <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="nombres" v-model="nombre" name="nombre">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email"  v-model="email" autocomplete="off" required="on" name="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="password" class="form-control" autocomplete="off" placeholder="Password"  v-model="password1" name="password1">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="row">
          <div class="col-xs-4">
          <button type="submit" @click="guardarUser()" class="btn btn-primary btn-block btn-flat">
          Registrarse</button>
          </div>
      </div>

    </form>

   

    <a href="login.html" class="text-center">Ya estoy registrado!!</a>
  </div>
  <!-- /.form-box -->
</div>

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->

<script src="js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="adminlte/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="adminlte/js/adminlte.min.js"></script>
<script src="js/vue-resource.min.js"></script>
<script src="js/registro.js"></script>
</body>
</html>
<input type="hidden" name="route" value="{{url('/')}}">