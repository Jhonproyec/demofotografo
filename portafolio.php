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
      <a href="portafolio.php" class="activo">Portafolio</a>
      <a href="sobremi.php">Sobre Mi</a>
      <a href="contacto.php">Contacto</a>
      <a href="blog.php">Blog</a>
    </nav>
  </div>
</header> <!--Fin del menu de navegacion -->
<div class="container mt-5">
  <div class="indicador">
    <a href="index.php" class="index">Inicio >></a>
    <a href="portafolio.php">Portafolio</a>
  </div>
</div>
<!-- Seccion mi trabajo  -->
<section class="miTrabajo mt-3">
  <div class="container mt-5">
    <h2 class="encabezado text-center mb-4">Portafolio</span></h2>
    <div class="row">
      <div class="col-md-6 sm-12">
        <div class="card mb-4">
          <img src="img/img1.jpg" class="img-card-top" alt="">
          <div class="card-body">
            <h3 class="text-center">Bodas</h3>
            <a href="singleAlbum.php?album=boda" class="verFotografias">Ver Fotografías</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 sm-12">
        <div class="card mb-4">
          <img src="img/andrew-amistad-RT0xyvwNB08-unsplash.jpg" class="img-card-top" alt="">
          <div class="card-body">
            <h3 class="text-center">Cuidad</h3>
            <a href="singleAlbum.php?album=ciudad" class="verFotografias" >Ver Fotografías</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!--Fin seccion mi trabajo-->

<?php
include 'footer.php';
?>