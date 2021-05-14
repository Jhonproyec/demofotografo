<?php session_start();

if(!isset($_SESSION['usuario'])){
  header('Location: login.php');
}
include 'layouts/header.php';

if(isset($_POST['categoria'])){
  $categoria = $_POST['categoria'];
  $fotos = $_FILES['fotos'];

  if(empty($categoria) || empty($fotos)){
    echo "<script>Los campos no pueden estar vacios intentalo otra vez</script>";
  }else{
    $cantidadFotos = count($fotos['name']);
    $llaveFotos = array_keys($fotos);

    for($i = 0; $i < $cantidadFotos; $i++){
      foreach ($llaveFotos as $llave) {
        $ft[$i][$llave] = $fotos[$llave][$i];
      }
    }
    
    $carpetaImagenes = '../imagenesSubidas/imagenesAlbum/';
    foreach ($ft as $foto => $fotos) {
      $nombreTemporal = file_get_contents($fotos['tmp_name']);
      $nombre = $fotos['name'];
      if(file_put_contents($carpetaImagenes.$nombre, $nombreTemporal)){
        $conn->query("INSERT INTO imagenesalbum (imagen, categoria) VALUES ('$nombre', '$categoria')");
      }
    }


  }
}
?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Albumes</h1>
        </div><!-- /.col -->
        <div class="col-sm-6 text-right">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalSubirImagenes">
          <i class="fas fa-plus"></i> Subir imagenes
          </button>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

<!-- Seccion mi trabajo  -->
<section class="miTrabajo mt-3">
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 sm-12">
        <div class="card mb-4">
          <img src="../img/banner.jpg" class="img-card-top" height="300px" style="object-fit:cover">
          <h3 class="text-center mt-2">Bodas</h3>
          <div class="card-body">
            <a href="../singleAlbum.php?album=boda" class="btn btn-success btn-block"><ion-icon name="eye-outline"></ion-icon> Ver galeria de Imagenes</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 sm-12">
        <div class="card mb-4">
          <img src="../img/yeshi-kangrang-PM_VwL2ypes-unsplash.jpg" class="img-card-top" height="300px" style="object-fit:cover">
          <h3 class="text-center mt-2">Ciudad</h3>
          <div class="card-body">
            <a href="../singleAlbum.php?album=ciudad" class="btn btn-success btn-block"><ion-icon name="eye-outline"></ion-icon> Ver galeria de Imagenes</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!--Fin seccion mi trabajo-->

<!-- MODAL SUBIR GALERIA DE IMAGENES -->
<div class="modal fade" id="modalSubirImagenes" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Subir Imagenes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="album">Selecciona el álbum</label>
            <select name="categoria" id="album" class="form-control">
              <option value="boda">Boda</option>
              <option value="ciudad">Ciudad</option>
            </select>
          </div>
          <div class="form-group">
            <label for="galeria">Subir galeria de Fotos</label>
            <input type="file" name="fotos[]" id="galeria" multiple class="form-control">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Subir imagenes</button>
          </div>
        </div>
        </form>
      </div>
  </div>
</div>
<?php include 'layouts/footer.php'?>