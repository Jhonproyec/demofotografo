<?php session_start();

if(!isset($_SESSION['usuario'])){
  header('Location: login.php');
}
include '../php/configuracion.php';

if(isset($_POST['id'])){
  $id = $_POST['id'];
  
  // Consulta para eliminar imagen de portada de la carpeta
  $consult = $conn->query("SELECT imagen_post FROM posts WHERE id_post = $id");
  $imagen = mysqli_fetch_row($consult);
  //verificamos que la imagen este en la carpeta y la borramos
  if(file_exists('../imagenesSubidas/portadas/'.$imagen[0])){
    unlink('../imagenesSubidas/portadas/'.$imagen[0]);
  }

  // Eliminar la galeria de imagenes del posts de la carpeta;
  $consulta = $conn->query("SELECT * FROM imagenes WHERE id_post = $id");
  while($row = mysqli_fetch_array($consulta)){
     //verificamos que las imagenes esten en la carpeta y las borramos
    if(file_exists('../imagenesSubidas/imagenesPosts/'.$row['imagen'])){
      unlink('../imagenesSubidas/imagenesPosts/'.$row['imagen']);
    }
  }

  // Eliminar el post de la base de datos
  $eliminar = $conn->query("DELETE FROM posts WHERE id_post = $id");



}

?>