<?php 
include 'header.php';
?>
    <!-- Menu de navegacion -->
    <header>
      <div class="menu px-4">
        <div class="logo">
          <h1><a href="index.php">Logo <span>Fotografo</span></a></h1>
        </div>
        <div class="botonMenu"><ion-icon name="menu-outline"></ion-icon></div>
        <!-- Id menu, para llamarlo desde JS -->
        <nav id="menu">
          <a href="index.php" class="activo">Inicio</a>
          <a href="portafolio.php">Portafolio</a>
          <a href="sobremi.php">Sobre Mi</a>
          <a href="contacto.php">Contacto</a>
          <a href="blog.php">Blog</a>
        </nav>
      </div>
    </header> <!--Fin del menu de navegacion -->
    <!-- BANNER -->
    <div class="banner">
      <div class="contenidoBanner">
        <div class="slogan">
          <h2>Historias en Fotografías</h2>
        </div>
        <div class="parrafo">
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit nulla aspernatur delectus iusto commodi distinctio. Unde incidunt itaque laudantium numquam?</p>
        </div>
        <a href="#">Ver más</a>
      </div>
    </div> <!--Fin div Banner -->
    <!--Sobre Mi-->
    <section class="sobreMi">
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <h2 class="encabezado">Bienvenido a mi <span>Hogar</span></h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo illo quibusdam minima? Assumenda, cum voluptatem corrupti, ipsam quisquam eaque rem magnam nesciunt amet quam autem, minima consequuntur. Veritatis quae, illum quidem, labore ad molestiae voluptatum odit consequatur nemo suscipit cum.</p>
            <a href="#">Conóceme Más</a>
          </div>
          <div class="col-md-6 col-sm-12">
            <img src="img/foto1.jpg" alt="">
          </div>
        </div>
      </div>
    </section><!-- Fin seccion Sobre Mi-->
    <!-- Seccion mi trabajo  -->
    <section class="miTrabajo">
      <div class="container mt-5">
        <h2 class="encabezado text-center mb-4">Mi trabajo más <span>Reciente</span></h2>
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
              <img src="img/nikolay-vorobyev-d9heOQ_rKzI-unsplash.jpg" class="img-card-top" alt="">
              <div class="card-body">
                <h3 class="text-center">Ciudad</h3>
                <a href="singleAlbum.php?album=ciudad" class="verFotografias" >Ver Fotografías</a>
              </div>
            </div>
          </div>
        </div>
        <a href="portafolio.php" class="verTrabajo mt-4 mb-5">Ver mi trabajo</a>
      </div>
    </section><!--Fin seccion mi trabajo-->
    <!-- Historias Reales -->
    <section class="historias">
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-6 col-ms-12">
            <img src="img/foto3.jpg" alt="">
          </div>
          <div class="col-md-6 col-ms-12">
            <h2 class="encabezado text-center">Historias y Momentos <span>Reales</span></h2>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere tempore officiis magnam ullam nemo necessitatibus earum libero est labore commodi! Lorem ipsum dolor sit amet consectetur adipisicing elit. At, iste voluptas! Tempore, dicta! Neque necessitatibus iure pariatur eum ipsam saepe voluptate rerum aperiam delectus, maxime excepturi distinctio iusto, praesentium beatae possimus. Voluptatum iste assumenda tempore maxime at voluptatem porro totam!</p>
            <a href="#" class="mt-5">Grabemos tus Momentos</a>
          </div>
        </div>
      </div>
    </section><!--Fin seccion Historias Reales -->
    <section class="mt-5 testimonios clip-path"><!--Seccion Testimonios-->
      <div class="row">
        <div class="col-md-8 col-sm-12">
          <div class="container mt-3 pl-4">
          <h2 class="text-center mt-3 mb-4">Testimonios</h2>
          <div id="carousel" class="carousel slide" data-bs-ride="carousel"><!--Inicio Carousel-->
            <div class="carousel-inner"><!--Inicio Carousel Inner-->
                <div class="carousel-item active">
                  <div class="testimonio text-center">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi earum voluptas et! Recusandae deleniti reiciendis, saepe hic cumque facere odit blanditiis laborum mollitia doloremque neque deserunt quaerat aperiam corporis eligendi!</p>
                    <h4>Nombre Cliente</h4>
                    <cite>Boda en Ciudad de Guatemala</cite>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="testimonio text-center">
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi earum voluptas et! Recusandae deleniti reiciendis, saepe hic cumque facere odit blanditiis laborum mollitia doloremque neque deserunt quaerat aperiam corporis eligendi!</p>
                      <h4>Nombre Cliente</h4>
                      <cite>Boda en Ciudad de Guatemala</cite>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="testimonio text-center">
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi earum voluptas et! Recusandae deleniti reiciendis, saepe hic cumque facere odit blanditiis laborum mollitia doloremque neque deserunt quaerat aperiam corporis eligendi!</p>
                      <h4>Nombre Cliente</h4>
                      <cite>Boda en Ciudad de Guatemala</cite>
                  </div>
                </div>
              </div><!--fin Carousel Inner-->
            </div><!--fin Carousel-->
          </div>
        </div>
        <div class="col-md-4 col-sm-12"><!--Div foto lado derecho testimonios-->
          <img src="img/foto2.jpg" alt="">
        </div>
      </div>
    </section><!--Fin seccion Testimonios-->
    <!-- ARTICULOS RECIENTES -->
    <section class="mt-5 articulos">
      <div class="container">
        <h2 class="encabezado text-center">Artículos <span>Recientes</span></h2>
        <div class="row mt-4">
        <?php 
          $consulta = $conn->query("SELECT * FROM posts ORDER BY id_post DESC LIMIT 3");
          while($row = mysqli_fetch_array($consulta)){
        ?>
          <div class="col-md-4 col-sm-12 mt-4"><!--Inicio tarjeta  Articulo-->
            <div class="card">
              <img src="<?php echo RUTA?>imagenesSubidas/portadas/<?php echo $row['imagen_post']?>" class="img-card-top" alt="<?php echo $row['titulo_post']?>">
              <div class="card-body">
                <h3><?php echo $row['titulo_post']?></h3>
                <p><?php echo $row['extracto']?></p>
                <a class="continuarViendo" href="<?php echo RUTA?>single.php?id_post=<?php echo $row['id_post']?>">Continuar Viendo</a>
              </div>
            </div>
          </div><!--Fin tarjeta  Articulo-->
        <?php }?>
        </div>
      </div>
    </section>
    <script>
      // CAMBIAR DE COLOR EL MENU
      window.addEventListener('scroll', function(){
        const header = document.querySelector('header');
        header.classList.toggle('cambio', window.scrollY > 0);
      })
    </script>
<?php
include 'footer.php';
?>