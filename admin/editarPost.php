<?php session_start();

if(!isset($_SESSION['usuario'])){
  header('Location: login.php');
}
include '../php/configuracion.php';

if(isset($_POST['idEditPost'])){
  $id = $_POST['idEditPost'];
  $titulo = $_POST['tituloEditPost'];
  $extracto = $_POST['extractoEditPost'];
  $descripcion = $_POST['descripcionEditPost'];
  $portada = $_FILES['portadaEditPost'];
  $galeria = $_FILES['galeriaEditPost'];

  if(empty($titulo) || empty($extracto) || empty($descripcion) || empty($portada) || empty($galeria)){
    echo"<script>alert('No se puede dejar campos vacios, por favor intentelo nuevamente')</script>";
  }else{
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

      $consulta = $conn->query("SELECT imagen_post FROM posts WHERE id_post = $id");
      $imagen = mysqli_fetch_row($consulta);
      //Eliminar la foto que estaba de portada de la carpeta portadas
      if(file_exists('../imagenesSubidas/portadas/'.$imagen[0])){
        unlink('../imagenesSubidas/portadas/'.$imagen[0]);
      }
      // Editar el nombre de la imagen en la base de datos
      $conn->query("UPDATE posts SET imagen_post = '$nombre' WHERE id_post = $id");
     }
   }
  // Editar todos los datos de la base de datos
   $conn->query("UPDATE posts SET 
                  titulo_post = '$titulo',
                  extracto = '$extracto',
                  descripcion_post = '$descripcion'
                  WHERE id_post = $id");

  // Obtener datos de la galeria de imagenes
  $cantidad = count($galeria['name']);
  $llaveImagenes = array_keys($galeria);

  for($i = 0; $i < $cantidad; $i++){
    foreach ($llaveImagenes as $llave) {
      $img[$i][$llave] = $galeria[$llave][$i];
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
      $conn->query("DELETE FROM imagenes WHERE id_post = $id");
      $conn->query("INSERT INTO imagenes (imagen, id_post) VALUES('$nombreImg', '$id')");
      header('Location: blog.php');
    }
  }


  }
   


}



?>