<?php
    require_once("validaciones.php");
    require_once("conexion.php");
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(isset($_POST["action"]))
            switch ($_POST["action"]) {
                case 'agregarUsuario':
                    $nombre = $_POST["nombre"];
                    $correo = $_POST["correo"];
                    $pass = $_POST["pass"];
                    $tel =  $_POST["tel"];
                    //$tel = 55;
                    $carrera= $_POST["carrera"];
                    $curp= $_POST["curp"];
                    $genero = $_POST["genero"];
                    $fecha_nac= $_POST["fecha_nac"];
                    $estados= $_POST["estados"];
                    $municipios= $_POST["municipios"];
                    $resultado = agregar_usuario($nombre,$correo,$pass,$tel,$carrera,$curp,$genero,$fecha_nac,$estados,$municipios);
                    echo $resultado;
                    break;
                
                default:
                    echo "404";
                    break;
            }
    }

    function agregar_usuario($nombre,$correo,$pass,$tel,$carrera,$curp,$genero,$fecha_nac,$estados,$municipios){
        $conn = connect();
        $stmt = $conn->prepare("INSERT INTO alumno (nombre,correo,contrasena,telefono,carrera,curp,genero,fecha_nac,estado,municipio) VALUES (?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssssss",$nom,$cor,$pas,$te,$carr,$cu,$gen,$fe_n,$est,$muni);
        $nom= $nombre;
        $cor= $correo;
        $pas= $pass;
        $te= $tel;
        $carr= $carrera;
        $cu= $curp;
        $gen= $genero;
        $fe_n= $fecha_nac;
        $est= $estados;
        $muni= $municipios;
        $stmt->execute();
        return "aaaa";
    }
?>