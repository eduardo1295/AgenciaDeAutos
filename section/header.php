
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo mx-auto"><a href="index.html" class="text-center"> <i> Agencia <br> Guerrero </i></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Inicio</a></li>
          <li class="drop-down"><a href="">Automoviles</a>
            <ul>
              <li><a href="nuevos.php">Nuevos</a></li>
              <li><a href="seminuevos.php">Seminuevos</a></li>
            </ul>
          </li>
          <li><a href="#services">Servicios</a></li>
          <li><a href="contacto.php">Contacto</a></li>
          <li><a href="#pricing">Distribuidora</a></li>
          <li><a href="acerca_de.php">Acerca De</a></li>
          <?php
          if(isset($_SESSION["logeado"])){ 
          ?>
            <li><a href="admin.php">Admin</a></li>
          <?php
          }else{
          ?>
            <li><a href="login.php">ingresar</a></li>
          <?php
          }
          ?>
          

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->