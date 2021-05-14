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
      <a href="sobremi.php" class="activo">Sobre mi</a>
      <a href="contacto.php">Contacto</a>
      <a href="blog.php">Blog</a>
    </nav>
  </div>
</header> <!--Fin del menu de navegacion -->
<div class="container mt-5">
  <div class="indicador">
    <a href="index.php" class="index">Inicio >></a>
    <a href="sobremi.php">Sobre Mi</a>
  </div>
</div>
<section class=" mt-4">
  <div class="container">
    <div class="row">
      <h2 class="encabezado text-center">Más <span>sobre Mi</span></h2>
      <div class="col-md-5 col-sm-12">
        <img src="img/foto2.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-md-7 col-sm-12 contenidoSobremi">
        <p class="descripcion">Dignissimos quam ipsum nam odio rerum nemo similique excepturi doloremque fugiat, sapiente temporibus aut!</p>
        <p class="parrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est deleniti cumque consectetur architecto, nostrum non et ipsa illum quam alias, odio saepe dicta voluptatem excepturi illo numquam voluptatum ipsum nesciunt. Temporibus deleniti molestiae blanditiis inventore eos iusto tenetur quisquam odit.</p>
        <p class="parrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, rem. Sunt dolorum saepe quia deserunt magnam, dolorem debitis eum aperiam optio rerum ad possimus iusto temporibus, cumque autem iste quae, corrupti eligendi. Nam, praesentium, reprehenderit voluptates et doloribus eius nostrum in quis, porro maiores numquam tempora voluptatem optio magnam dolorum.</p>
        <p class="parrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, rem. Sunt dolorum saepe quia deserunt magnam, dolorem debitis eum aperiam optio rerum ad possimus iusto temporibus, cumque autem iste quae, corrupti eligendi. Nam, praesentium, reprehenderit voluptates et doloribus eius nostrum in quis, porro maiores numquam tempora voluptatem optio magnam dolorum.</p>
      </div>
    </div>
  </div>
</section>
<section class="mt-4 clip-path">
  <div class="row">
    <div class="col-md-7 col-sm-12 px-5">
      <div class="container">
        <h2 class="encabezado mt-4 text-center">Mi <span>Experiencia</span></h2>
        <p class="experiencia mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto laudantium esse animi sint error quasi distinctio rerum nesciunt quibusdam impedit ipsum, dolorem, explicabo expedita quos suscipit illo in perferendis officiis fugiat repellendus ipsam tempora illum? In officia architecto dolore harum sapiente voluptas suscipit deserunt porro.</p>
      </div>
    </div>
    <div class="col-md-5 col-sm-12">
      <img src="img/foto3.jpg" alt="">
    </div>
  </div>
</section>  
<?php include 'footer.php'?>