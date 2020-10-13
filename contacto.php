<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<?php include("section/head.php")?>
<?php include("section/header.php")?>

<link rel="stylesheet" href="css/custom2.css">

<section class="acerca_de">
    <img src="img/slider-1.jpg" alt="" width="100%" height="auto" class="img-slider" >
    
    
</section>
<div class="container pt-5 pb-5">
      <div class="row">
        <div class="col-sm-7 text-center">
          <h1 class="text-center text-uppercase font-weight-bold pt-5 pb-3">contactanos</h1>
          <input type="email" name="" id="email" placeholder="Email" class="form-control mt-3 mb-3">
          <input type="email" name="" id="asunto" placeholder="Asunto" class="form-control mt-3 mb-3">
          <textarea name="" id="mensaje" cols="30" rows="10" placeholder="Mensaje..." class="form-control mt-3 mb-3" ></textarea>
          <button type="button" class="btn btn-success btn-enviar">Enviar</button>
        </div>
        <div class="col-sm-5">
        <h1 class="text-center text-uppercase font-weight-bold pt-5 pb-3">ubicanos</h1>
        <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3640.299564980335!2d-110.31293558536818!3d24.16122467887548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86afd35eed8a6f1b%3A0xabd764756aabe3d9!2sGuillermo%20Prieto%2C%20Zona%20Central%2C%2023000%20La%20Paz%2C%20B.C.S.!5e0!3m2!1ses!2smx!4v1591388009591!5m2!1ses!2smx" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
        </div>
      </div>
    </div>


    

<?php include("section/footer.php");?>
<script src="js/contacto.js"></script>