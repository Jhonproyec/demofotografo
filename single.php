<?php 
include 'header.php';
?>
<!-- Menu de navegacion -->
<header class="cambio">
  <div class="container menu">
    <div class="logo">
      <h1><a href="index.php">Logo <span>Fotografo</span></a></h1>
    </div>
    <div class="botonMenu"><ion-icon name="menu-outline"></ion-icon></div>
        <!-- Id menu, para llamarlo desde JS -->
    <nav>
      <a href="index.php">Inicio</a>
      <a href="portafolio.php">Portafolio</a>
      <a href="sobremi.php">Sobre mi</a>
      <a href="contacto.php">Contacto</a>
      <a href="blog.php" class="activo">Blog</a>
    </nav>
  </div>
</header> <!--Fin del menu de navegacion -->
<section class="galeria">
  <div class="contenedorGaleria text-center">
  <!-- Mostrar el titulo y la fecha traida desde la base de datos post -->
  <?php 
    if(isset($_GET['id_post'])){
      $id = $_GET['id_post'];
      $consulta = $conn->query("SELECT * FROM posts WHERE id_post = $id");
      while($row = mysqli_fetch_array($consulta)){
  ?>
    <h2><?php echo $row['titulo_post']?></h2>
    <p><?php echo fecha($row['fecha'])?></p>
  <?php } }?>
    <!-- Mostrar todas las imagenes del posts -->
  <?php
    $id = $_GET['id_post'];
    $result = $conn->query("SELECT * FROM imagenes WHERE id_post = $id");
    while($fila = mysqli_fetch_array($result)){
  ?>
    <div class="imagenes">
        <div class="imagen mb-4">
          <img src="imagenesSubidas/imagenesPosts/<?php echo $fila['imagen']?>" alt="">
        </div>
    </div> 
  <?php }?>
  </div>
</section>
<?php include 'footer.php'?>