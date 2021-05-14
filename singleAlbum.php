<?php 
include 'header.php';
?>
<!-- Menu de navegacion -->
<header class="cambio">
  <div class="container menu">
    <div class="logo">
      <h1><a href="index.php">Logo <span>Fotografo</span></a></h1>
    </div>
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
  <div class="container text-center">
  <!-- Mostrar el titulo y la fecha traida desde la base de datos post -->
  <?php 
    if(isset($_GET['album'])){
      $album = $_GET['album'];
    $consult = $conn->query("SELECT * FROM imagenesalbum WHERE categoria = '$album'");  
      ?>
    <h2><?php echo $album?></h2>
    <!-- Mostrar todas las imagenes del posts -->
    <?php 
     while($row = mysqli_fetch_array($consult)){?>
    <div class="imagenes">
      <div class="imagen mb-4">
        <img src="<?php echo RUTA?>/imagenesSubidas/imagenesAlbum/<?php echo $row['imagen']?>" class="img-fluid" alt="">
      </div>
    </div>
  <?php } }?>
  </div>
</section>
<?php include 'footer.php'?>