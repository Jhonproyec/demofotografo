<?php session_start();

if(isset($_SESSION['usuario'])){
  header('Location: index.php');
}

include '../php/configuracion.php';
if(isset($_POST['nombre'])){
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];

  $errores = '';
  if(empty($nombre) || empty($email) || empty($pass)){
    $errores .= 'Llena todos los campos, por favor <br><br>';
  }else{
    $result = $conn->query("SELECT * FROM usuario WHERE nombre = '$nombre' AND email = '$email' AND pass = '$pass' LIMIT 1");
    $resultado = mysqli_num_rows($result);
    if($resultado == 1){
      $_SESSION['usuario'] = $nombre;
      header('Location: index.php');
    }else{
      $errores = 'El nombre de usuario, email o contraseña, no son correctos';
    }
  }
  
  



}





?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registro Fotografo</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="dashboard/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dashboard/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../index.php"><b>Pagina Principal</b></a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Inicio de Sesion</p>

      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <div class="input-group mb-3">
          <input type="text" name="nombre" class="form-control" placeholder="Nombre de Usuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="pass" class="form-control" placeholder="Contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <?php if(!empty($errores)){ ?>
          <p class="alert alert-danger"><?php echo $errores?></p>
        <?php }?>
          <button type="submit" class="btn btn-primary btn-block">Iniciar Sesion</button>  
          <!-- /.col -->
        </div>
      </form>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
