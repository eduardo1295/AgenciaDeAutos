<?php
  session_start();
  if(!isset($_SESSION["logeado"])){
    header("Location: /agencia/");   
  }
?>
<?php include("section/head.php")?>

<div class="container">
    <div class="row">
        <div class="col-12 header-admin">
            <h1>Panel administración</h1>
            <form action="logout.php" method="post">
                <input type="submit" class="btn btn-info" value="cerrar sesión">
            </form>
        </div>
    </div>
</div>
<section id="services" class="services">
    <div class="container">
        <div class="row">
            <a href="ad_nuevos.php">
                <div class="offset-lg-2 col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="icon-box">
                    <img src="img/autos-6.jpg" alt="" width="100%" class="img-fluid">
                        <h4 class="pt-3" ><a href="/ad_nuevos.php" >Nuevos</a></h4>
                    </div>
                </div>
            </a>
            <a href="ad_seminuevos.php">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up"
                    data-aos-delay="150">
                    <div class="icon-box">
                        <img src="img/autos-5.jpg" alt="" width="100%" class="img-fluid">
                        <h4 class="pt-3" ><a href="/ad_seminuevos.php" >Seminuevos</a></h4>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section><!-- End Services Section -->

<?php include("section/script.php") ?>
</body>

</html>