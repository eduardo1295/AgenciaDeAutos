<?php
    require_once("validaciones.php");
    require_once("conexion.php");
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(isset($_POST["action"]))
            switch ($_POST["action"]) {
                case 'agregar_nuevos' :
                    $modelo = test_input($_POST["modelo"]);
                    $marca =  test_input($_POST["marca"]);
                    $precio = test_input($_POST["precio"]);
                    $promocion =  test_input($_POST["promocion"]);
                    $seguro = test_input($_POST["seguro"]);
                    $foto = $_FILES['foto'];                                                                       
                    $resultado = agregar_nuevos($modelo,$marca,$precio,$promocion,$seguro,$foto);
                    echo $resultado;
                break;
                case 'mostrar_nuevos':
                    $id = null;
                    if(isset($_POST["id"])){
                        $id = $_POST["id"];
                    }
                    $resultado = mostrar_nuevos($id);
                    echo $resultado;
                break;
                case 'editar_nuevos':
                    $id = test_input($_POST["id"]);
                    $modelo = test_input($_POST["modelo"]);
                    $marca =  test_input($_POST["marca"]);
                    $precio = test_input($_POST["precio"]);
                    $promocion =  test_input($_POST["promocion"]);
                    $seguro = test_input($_POST["seguro"]);
                    $resultado = editar_nuevos($modelo,$marca,$precio,$promocion,$seguro,$id);
                    echo $resultado;
                break;
                case "eliminar_nuevos":
                    $id = $_POST["id"];
                    $resultado = eliminar_nuevos($id);
                    echo $resultado;
                break;
                default:
                    echo "404";
                    break;
            }
    }

    function mostrar_nuevos($id){
        $conn = connect();
        $array= "";
        if(is_null($id)){
            $sql = "SELECT * FROM nuevos";
            $result = mysqli_query($conn, $sql);
            $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
        else{
            $sql = $conn->prepare("SELECT * FROM nuevos WHERE id_nuevo = ?");
            $sql->bind_param("i", $id);
            $sql->execute();
            $result = $sql->get_result();
            $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
        return json_encode($result, JSON_UNESCAPED_UNICODE);

    }
    function agregar_nuevos($modelo,$marca,$precio,$promocion,$seguro,$foto){
        $conn = connect();
        $sql = "SELECT COUNT(*) as numeros FROM nuevos";
        $result = mysqli_query($conn, $sql);
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $dato = explode("/",$foto['type']);
        $nombre_archivo = "nuevo_".$result[0]["numeros"].".". $dato[1];
        $tipo_archivo = $foto['type'];
        $tamano_archivo = $foto['size'];
        $target_path = "../img/nuevos/". $nombre_archivo;
        $ruta_bd = "img/nuevos/".$nombre_archivo;
        if (!((strpos($tipo_archivo, "png") || strpos($tipo_archivo, "jpeg")) )) {
            echo "La extensión o el tamaño de los archivos no es correcta. <br><br><table><tr><td><li>Se permiten archivos .gif o .jpg<br><li>se permiten archivos de 100 Kb máximo.</td></tr></table>";
         }else{
            if (move_uploaded_file($_FILES['foto']['tmp_name'], $target_path)){
                   //echo "El archivo ha sido cargado correctamente.";
            }else{
                   echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
            }
         }

        $stmt = $conn->prepare("INSERT INTO nuevos (modelo_n,marca_n,precio_n,promocion_n,seguro_n,url_foto_n) VALUES (?,?,?,?,?,?)");
        $stmt->bind_param("ssssss",$modelo,$marca,$precio,$promocion,$seguro,$ruta_bd);
        if($stmt->execute()){
            return 200;
        }else{
            return 404;
        }

    }
    function editar_nuevos($modelo,$marca,$precio,$promocion,$seguro,$id){
        $conn = connect();
        $stmt = $conn->prepare("UPDATE nuevos SET modelo_n = ?,marca_n = ?,precio_n = ?,promocion_n = ?,seguro_n = ? WHERE id_nuevo = ?");
        $stmt->bind_param("ssssss",$modelo,$marca,$precio,$promocion,$seguro,$id);
        if($stmt->execute()){
            return 201;
        }else{
            return 404;
        }

    }
    function eliminar_nuevos($id){
        $conn = connect();
        $stmt = $conn->prepare("DELETE FROM nuevos where  id_nuevo = ? ");
        $stmt->bind_param("i",$id);
        if($stmt->execute()){
            return 202;
        }else{
            return 404;
        }
    }
?>