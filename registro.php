<?php
  session_start();
  if(isset($_SESSION["logeado"])){
    header("Location: /agencia/");   
    }
?>

<?php include("section/head.php")?>

    <div class="container">
        <div class="row text-center ">
            <div class="col-sm-6 offset-sm-3 mt-5 fa-5x form-login">
            <p class="text-center">
                <i class="fas fa-user-plus"></i>
            </p>
            <input type="text" name="" id="anombre" class="form-control" placeholder="Nombre *">
            <input type="email" name="" id="aemail" class="form-control" placeholder="Email *">
            <input type="password" name="" id="apass" class="form-control" placeholder="Contraseña *">
            <input type="text" name="" id="adireccion" class="form-control" placeholder="Dirección *">
            <input type="text" name="" id="atelefono" class="form-control" placeholder="Telefono *">
            <b><h6 class="text-danger text-left pt-2 pb-2">Campos obligatorios</h6></b>
            
            <button type="button" class="btn btn-primary btn-registrarse mx-auto"> Registrarse</button>
            </div>
        </div>
    </div>
    <?php
    include("section/script.php");
  ?>
</body>
</html>