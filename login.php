<?php
  session_start();
  
  if(isset($_SESSION["logeado"])){
        header("Location: /lavanderia_tec/");   
  }
?>
<?php include("section/head.php")?>

    <div class="container">
        <div class="row text-center ">
            <div class="col-sm-6 offset-sm-3 mt-5 fa-5x form-login">
            <p class="text-center">
                <i class="fas fa-user-tie "></i>
            </p>
            <input type="email" name="" id="lemail" class="form-control" placeholder="Email">
            <input type="password" name="" id="lpass" class="form-control" placeholder="Contraseña">
            <button type="button" class="btn btn-primary btn-login mx-auto"> Iniciar Sesión</button>
            <a href="registro.php"  class="btn btn-primary  mx-auto"> Registrarse</a>
            </div>
        </div>
    </div>
    
    <?php
    include("section/script.php");
  ?>
    
    
</body>
</html>