<?php include 'header.php'?>
<!-- Menu de navegacion -->
<header class="cambio">
  <div class="container menu">
    <div class="logo">
      <h1><a href="index.php">Logo <span>Fotografo</span></a></h1>
    </div>
    <div class="botonMenu"><ion-icon name="menu-outline"></ion-icon></div>
        <!-- Id menu, para llamarlo desde JS -->
    <nav id="menu">
      <a href="index.php">Inicio</a>
      <a href="portafolio.php">Portafolio</a>
      <a href="sobremi.php">Sobre mi</a>
      <a href="contacto.php">Contacto</a>
      <a href="blog.php" class="activo">Blog</a>
    </nav>
  </div>
</header> <!--Fin del menu de navegacion -->
<div class="container mt-5">
  <div class="indicador">
    <a href="index.php" class="index">Inicio >></a>
    <a href="blog.php">Blog</a>
  </div>
</div>
<section class="articulos mt-5">
  <div class="container">
    <?php 
      $consulta = $conn->query("SELECT * FROM posts ORDER BY id_post DESC");
      while($row = mysqli_fetch_array($consulta)){
    ?>
    <article class="mb-4">
      <div class="row">
        <div class="col-md-5 col-sm-12 mt-5"?>
          <img src="<?php echo RUTA?>imagenesSubidas/portadas/<?php echo $row['imagen_post']?>" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 col-sm-12 mt-4 px-5">
          <p class="fecha"><?php echo fecha($row['fecha'])?></p>
          <h2 class="mb-3"><?php echo $row['titulo_post']?></h2>
          <p><?php echo nl2br(nl2br($row['descripcion_post']))?></p>
          <a class="verAlbum" href="<?php echo RUTA?>single.php?id_post=<?php echo $row['id_post']?>">Ver álbum Completo</a>
        </div>
      </div>
    </article>
    <?php }?>
  </div>
</section>

<?php include 'footer.php'?>