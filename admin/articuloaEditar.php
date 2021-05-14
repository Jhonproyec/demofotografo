<?php session_start();

if(!isset($_SESSION['usuario'])){
  header('Location: login.php');
}
if(isset($_POST['id'])){
  $id = $_POST['id'];
  //Consulta para obtener el titulo, imagen de portada, descripcion y extracto del post
  $consulta = $conn->query("SELECT * FROM posts WHERE id_post = $id");

  $jsonDatos = array();
  while($row = mysqli_fetch_array($consulta)){
    $jsonDatos[] = array(
      'id' => $row['id_post'],
      'titulo' => $row['titulo_post'],
      'extracto' => $row['extracto'],
      'descripcion' => $row['descripcion_post']
    );
  }
  // Convertir a un string en array 
  $stringDatos = json_encode($jsonDatos[0]);
  echo $stringDatos;



}




?>