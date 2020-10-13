<?php
  session_start();
  
  if(isset($_SESSION["logeado"])){
        header("Location: /agencia/");   
  }
?>
<?php include("section/head.php")?>

  
    <div class="limiter animated fadeInLeft">
      <div class="container-login100">
        <div class="wrap-login100 p-t-50 p-b-90">
            <form (ngSubmit)="onlogin( f );" #f="ngForm"
            class="login100-form validate-form flex-sb flex-w">
                <span class="login100-form-title p-b-51"> Login </span>
                <div class="wrap-input100 m-b-16">
                    <input type="email" name="" id="lemail" class="input100" placeholder="Email">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 m-b-16" data-validate = "Password is required">
                    <input type="password" name="" id="lpass" class="input100" placeholder="Contraseña">
                </div>
                <div class="flex-sb-m w-full p-t-3 p-b-24">
                    <div>
                        <a href="registro.php" class="txt1">
                            ¿No tienes cuenta?
                        </a>
                    </div>
                </div>
                <div class="container-login100-form-btn m-t-17">
                <button type="button" class="login100-form-btn btn-login"> Iniciar Sesión</button>
                </div>
            </form>
        </div>
    </div>
</div>


    
    <?php

    
    include("section/script.php");
  ?>
    
    
</body>
</html>