<?php session_start();

if(!isset($_SESSION['usuario'])){
  header('Location: login.php');
}

include 'layouts/header.php';
if(isset($_POST['tituloPost'])){
  $titulo = $_POST['tituloPost'];
  $extracto = $_POST['extractoPost'];
  $descripcion = $_POST['descripcionPost'];
  $portada = $_FILES['portadaPost'];
  $imagenes = $_FILES['galeriaPost'];
  $id = '';
  // Verificar que se llenen todos los campos del formulario
  if(empty($titulo) || empty($extracto) || empty($descripcion) || empty($portada) || empty($imagenes)){
    echo"<script>alert('No se puede dejar campos vacios, por favor intentelo nuevamente')</script>";
  }
  //Obtener la extension del archivo subido como portada;
  $nombre = $portada['name'];
  $tmp = explode('.', $nombre);
  $extension = end($tmp);
  // carpeta de destino;
  $carpeta = '../imagenesSubidas/portadas/';
  // Comprobar que el archivo sea una imagen
  if($extension == 'jpg' || $extension == 'png'){
    // Mover la imagen de portada a la carpeta
    if(move_uploaded_file($portada['tmp_name'], $carpeta.$nombre)){
      $consult = $conn->query("INSERT INTO posts (imagen_post, titulo_post, extracto, descripcion_post)
                              VALUES('$nombre', '$titulo', '$extracto', '$descripcion')");
      $id = $conn->insert_id;
    }
  }
  // Obtener datos de la galeria de imagenes
  $cantidadImagenes = count($imagenes['name']);
  $llaveImagenes = array_keys($imagenes);

  // Separar cada una de las imagenes
  for($i = 0; $i < $cantidadImagenes; $i++){
    foreach ($llaveImagenes as $llave) {
      $img[$i][$llave] = $imagenes[$llave][$i];
    }
  }
  
  // Carpeta de destino imagnes del post
  $carpetaImagenes = '../imagenesSubidas/imagenesPosts/';
  //Subir imagenes a la carpeta imagenesPosts
  foreach ($img as $imagenes => $imagen) {
    $nombreTemporal = file_get_contents($imagen['tmp_name']);
    $nombreImg = $imagen['name'];
    // Cargar las imagenes a la base de Datos con el ultimo id que se genero en la base de datos anterios
    if(file_put_contents($carpetaImagenes.$nombreImg, $nombreTemporal)){
      $conn->query("INSERT INTO imagenes (imagen, id_post) VALUES('$nombreImg', '$id')");
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
          <h1 class="m-0">Blog</h1>
        </div><!-- /.col -->
        <div class="col-sm-6 text-right">
          <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#modal">
          <i class="fas fa-plus"></i> Crear nuevo Post
          </button>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
<section>
  <div class="container">
    <div class="row">
    <?php
      $result = $conn->query("SELECT * FROM posts ORDER BY id_post DESC");
      while($row = mysqli_fetch_array($result)){
    ?>
      <div class="col-md-3 col-sm-12" idArticulo=<?php echo $row['id_post']?>>
        <div class="card">
          <img src="<?php echo RUTA?>imagenesSubidas/portadas/<?php echo $row['imagen_post']?>" height="250px" class="img-card-top" alt="">
          <div class="card-body d-flex justify-content-around">
            <button class="btn btn-primary editarPost" data-toggle="modal" data-target="#modalEditar">
            <ion-icon name="create-outline"></ion-icon>
            </button>
            <a href="<?php echo RUTA?>single.php?id_post=<?php echo $row['id_post']?>" class="btn btn-success"><ion-icon name="eye-outline"></ion-icon></a>
            <button class="btn btn-danger eliminarPost"><ion-icon name="trash-outline"></ion-icon></button>
          </div>
        </div>
      </div>
     <?php }?> 
    </div>
  </div>
</section>
<!-- Modal Crear nuevo post -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Crear nuevo post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="titulo">Titulo del post</label>
            <input type="text" name="tituloPost" class="form-control">
          </div>
          <div class="form-group">
            <label for="extracto">Extracto</label>
            <textarea name="extractoPost" maxlength="130" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label for="descripcion">Descripcion del posts</label>
            <textarea name="descripcionPost" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label for="portada">Elige foto de portada</label>
            <input type="file" name="portadaPost" class="form-control">
          </div>
          <div class="form-group">
            <label for="galeria">Subir galeria de Fotos</label>
            <input type="file" name="galeriaPost[]" multiple class="form-control">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Crear post</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal Editar post -->
<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Crear nuevo post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>    
      <div class="modal-body">
        <form action="editarPost.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" id="idEditPost" name="idEditPost">
          <div class="form-group">
            <label for="titulo">Titulo del post</label>
            <input type="text" name="tituloEditPost" id="tituloEditPost" class="form-control">
          </div>
          <div class="form-group">
            <label for="extracto">Extracto</label>
            <textarea name="extractoEditPost" id="extractoEditPost" maxlength="130" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label for="descripcion">Descripcion del posts</label>
            <textarea id="descripcionEditPost" name="descripcionEditPost" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label for="portada">Elige foto de portada</label>
            <input type="file" id="portadaEditPost" name="portadaEditPost" class="form-control">
          </div>
          <div class="form-group">
            <label for="galeria">Añadir mas fotos</label>
            <input type="file" id="galeriaEditPost" name="galeriaEditPost[]" multiple class="form-control">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <input type="submit" class="btn btn-primary" value="Guardar Cambios">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include 'layouts/footer.php'?>