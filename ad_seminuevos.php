<?php 
    error_reporting(0);
    ini_set("display_errors", 0);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agencia Guerrero</title>
    <script src="js/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/validacion.js"></script>
    <script src="js/seminuevo.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="css/data-table.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js "></script>
    <script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://kit.fontawesome.com/9417fd5572.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <header>
            <h1 class="text-center">Registro de Autos SemiNuevos</h1>
            
            <div class="d-flex">
            <button type="button" class="btn btn-primary btn-add ml-2 mr-2" data-toggle="modal" data-target="#exampleModalCenter">Agregar</button>
            <a href="/agencia/" class="btn btn-secondary btn-add ml-2 mr-2" >Inicio</a> 
            <form action="logout.php" method="post">
                <input type="submit" class="btn btn-info ml-2 mr-2" value="cerrar sesión">
            </form>
            </div>
            
        </header>
        <?php include("tabla_seminuevo.php")?>    
    </div>
    <?php include("modal_seminuevo.php")?>
</body>
</html>