<?php
    session_start();
    require_once("validaciones.php");
    require_once("conexion.php");
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(isset($_POST["action"]))
            switch ($_POST["action"]) {
                case 'agregar_usuarios':
                    $nombre = test_input($_POST["nombre"]);
                    $correo = test_input($_POST["email"]);
                    $pass = test_input($_POST["pass"]);
                    $direccion =  test_input($_POST["direccion"]);
                    $telefono =  test_input($_POST["telefono"]);
                    $resultado = agregar_usuario($nombre,$correo,md5($pass),$direccion,$telefono);
                    echo $resultado;
                    break;
                case "login":
                    $correo = test_input($_POST["email"]);
                    $pass = test_input($_POST["pass"]);
                    $resultado =  login($correo,md5($pass));
                    echo $resultado;
                break;
                case 'mostrar_usuarios':
                    $id = null;
                    if(isset($_POST["id"])){
                        $id = $_POST["id"];
                    }
                    $resultado = buscar_alumnos($id);
                    echo $resultado;
                break;

                case 'editarUsuario':
                    $id = test_input($_POST["id"]);
                    $nombre = test_input($_POST["nombre"]);
                    $correo = test_input($_POST["correo"]);
                    $pass = test_input($_POST["pass"]);
                    $tel =  test_input($_POST["tel"]);
                    $carrera= test_input($_POST["carrera"]);
                    $curp= test_input($_POST["curp"]);
                    $genero = test_input($_POST["genero"]);
                    $fecha_nac= test_input($_POST["fecha_nac"]);
                    $estados= test_input($_POST["estados"]);
                    $municipios= test_input($_POST["municipios"]);
                    $resultado = editar_usuario($id,$nombre,$correo,md5($pass),$tel,$carrera,$curp,$genero,$fecha_nac,$estados,$municipios);
                    echo $resultado;
                break;
                case 'eliminar_usuario':
                    $id = $_POST["id"];
                    $resultado = eliminar_usuario($id);
                    echo $resultado;
                break;
                default:
                    echo "404";
                    break;
            }
    }

    function eliminar_usuario($id){
        $conn = connect();
        $stmt = $conn->prepare("DELETE FROM alumno where  id = ? ");
        $stmt->bind_param("i",$id);
        if($stmt->execute()){
            return 202;
        }else{
            return 404;
        }
    }

    
    function editar_usuario($id,$nombre,$correo,$pass,$tel,$carrera,$curp,$genero,$fecha_nac,$estados,$municipios){
        $conn = connect();
        $stmt = $conn->prepare("UPDATE alumno SET nombre = ?, correo = ? ,contrasena = ? , telefono = ? ,carrera= ? ,curp= ? ,genero= ? ,fecha_nac= ? ,estado= ? ,municipio= ? WHERE id = ?");
        $stmt->bind_param("sssssssssss",$nom,$cor,$pas,$te,$carr,$cu,$gen,$fe_n,$est,$muni,$i);
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
        $i = $id;
        if($stmt->execute()){
            return 201;
        }else{
            return 404;
        }
        
        
    }
    function buscar_alumnos($id){
        $conn = connect();
        $array= "";
        if(is_null($id)){
            $sql = "SELECT * FROM alumno";
            $result = mysqli_query($conn, $sql);
            $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
        else{
            $sql = $conn->prepare("SELECT * FROM alumno WHERE id = ?");
            $sql->bind_param("i", $id);
            $sql->execute();
            $result = $sql->get_result();
            $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
        
        
        return json_encode($result, JSON_UNESCAPED_UNICODE);

    }

    /*estos metodos son los que se han agregado y no son de la practica */
    function agregar_usuario($nombre,$correo,$pass,$direccion,$telefono){
        $conn = connect();
        $stmt = $conn->prepare("INSERT INTO usuario (nombre,correo,contrasena,telefono,direccion) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sssss",$nombre,$correo,$pass,$direccion,$telefono);
        if($stmt->execute()){
            return 200;
        }else{
            return 404;
        }
        
        
    
    }
    function login($correo,$pass){
        $conn = connect();
        $stmt = $conn->prepare("SELECT * FROM usuario where correo = ? and contrasena = ?");
        $stmt->bind_param("ss",$correo,$pass);
        $stmt->execute();
        $result = $stmt->get_result();
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        //$result = json_encode($result, JSON_UNESCAPED_UNICODE);
        //  echo count($result);
        if(count($result) == 1){
            $_SESSION["logeado"] = true;
            return 200;
            
        }else{
            return 404;
        }
    }
?>