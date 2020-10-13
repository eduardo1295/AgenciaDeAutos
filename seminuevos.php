<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<?php include("section/head.php")?>
<?php include("section/header.php")?>

<?php include("php/semi.php")?>
  
  <link rel="stylesheet" href="css/custom2.css">
  
  <div class="container section_nuevos" >
        <div class="row">
         <?php  $todos = mostrar_semi(null);
            $hola = json_decode($todos);
          foreach($hola as $hg){
        ?>
          <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="<?php echo $hg->{"url_foto_s"}; ?>" alt="Card image cap">
            <div class="card-body mx- text-center">
              <h5 class="card-title"><b><?php echo $hg->{"modelo_s"}; ?></b></h5>
              <p class="card-text"><?php echo $hg->{"marca_s"}; ?></p>
              <p>
              <b>Promoción:</b> <br>
              <?php echo $hg->{"promocion_s"}; ?>
              </p>
              <p>
              <b>Seguro:</b> <br>
              <?php echo $hg->{"seguro_s"}; ?>
              </p>
              <a href="contacto.php" class="btn btn-primary mx-auto">Contactanos</a>
            </div>
            
          </div>
          </div>
          
          <?php } ?>
        </div>
  </div>

 <?php 
    include("section/footer.php");
 ?>