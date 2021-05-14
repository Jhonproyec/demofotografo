<?php include 'header.php'?>
<!-- Menu de navegacion -->
<header>
  <div class="container menu">
    <div class="logo">
      <h1><a href="index.php">Logo <span>Fotografo</span></a></h1>
    </div>
    <div class="botonMenu"><ion-icon name="menu-outline"></ion-icon></div>
        <!-- Id menu, para llamarlo desde JS -->
    <nav id="menu">
      <a href="index.php">Inicio</a>
      <a href="portafolio.php">Portafolio</a>
      <a href="sobremi.php">Sobre Mi</a>
      <a href="contacto.php" class="activo">Contacto</a>
      <a href="blog.php">Blog</a>
    </nav>
  </div>
</header> <!--Fin del menu de navegacion -->
<!-- BANNER -->
<div class="banner banner2">
  <div class="contenidoBanner">
    <div class="slogan">
      <h2>Paquetes de fotografias de bodas</h2>
    </div>
    <div class="parrafo">
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit nulla aspernatur delectus iusto commodi distinctio. Unde incidunt itaque laudantium numquam?</p>
    </div>
    <a href="#" class="botonConversemos">Conversemos por Whatsapp <i><ion-icon name="logo-whatsapp"></ion-icon></i> </a>
  </div>
</div> <!--Fin div Banner -->
<div class="container mt-4">
  <a href="index.php" class="index">Inicio >></a>
  <a href="contacto.php">Contácto</a>
</div>
<section class="contactoDescripcion">
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-12 px-5 text-center">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam ratione consequuntur sunt quia quam ut commodi eveniet! Rerum, quas dolores a doloremque unde nulla accusantium modi qui aspernatur consequuntur aut! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad quaerat eum reiciendis, corporis minus sapiente. Dolorem vitae veniam qui blanditiis sed voluptates ex illo cumque illum culpa quas harum ratione laudantium dolorum accusantium temporibus esse similique modi, iure beatae doloribus?</p>
      </div>
    </div>
  </div>
</section>
<!-- precios -->
<section class="precios mt-5">
  <div class="container">
    <div class="row m-auto">
      <!-- primer tarjeta -->
      <div class="col-md-6 col-sm-12">
        <div class="card p-4 mb-4">
          <p>Paquete todo Incluido</p>
          <h2>Q.1000 / <span>700 fotografias</span></h2>
          <ul>
            <li>Sesión Pre Boda o Rehearsal Dinner: 150 fotografías digitales, todas a color y b/n.</li>
            <li>Video slide de fotos.</li>
            <li>Fotografias con Drone</li>
            <li>Derecho de impresion</li>
            <li>12 horas de cobertura del día de tu boda, desde los preparativos hasta la fiesta.</li>
            <a href="#" class="botonConversemos">Conversemos por Whatsapp <i><ion-icon name="logo-whatsapp"></ion-icon></i></a>
          </ul>
        </div>
      </div>
      <!-- segunda tarjeta -->
      <div class="col-md-6 col-sm-12">
        <div class="card tarjeta2 p-4">
          <p>Paquete todo Incluido</p>
          <h2>Q.600 / <span>400 fotografias</span></h2>
          <ul>
            <li>Sesión Pre Boda o Rehearsal Dinner: 100 fotografías digitales, todas a color y b/n.</li>
            <li>Video slide de fotos.</li>
            <li>Fotografias con Drone</li>
            <li>Derecho de impresion</li>
            <li>12 horas de cobertura del día de tu boda, desde los preparativos hasta la fiesta.</li>
            <a href="#" class="botonConversemos">Conversemos por Whatsapp <i><ion-icon name="logo-whatsapp"></ion-icon></i></a>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- formulario de contacto -->
<form id="form" class="mt-5">
    <div class="form">
        <h2 class="encabezado text-center">Contáctame</h2>
        <div class="grupo">
            <input type="text" id="name" required><span class="barra"></span>
            <label for="">Nombre</label>
        </div>
        <div class="grupo">
            <input type="email" id="name" required><span class="barra"></span>
            <label for="">Email</label>
        </div>
        <div class="grupo">
            <input type="text" id="name" required><span class="barra"></span>
            <label for="">Mensaje</label>
        </div>

        <button type="submit" class="enviar">Enviar Mensaje</button>
    </div>
</form>
<script>
      // CAMBIAR DE COLOR EL MENU
      window.addEventListener('scroll', function(){
        const header = document.querySelector('header');
        header.classList.toggle('cambio', window.scrollY > 0);
      })
    </script>
<?php include 'footer.php'?>