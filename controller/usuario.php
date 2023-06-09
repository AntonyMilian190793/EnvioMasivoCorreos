<?php


    require_once("../config/conexion.php");
    require_once("../models/Usuario.php");
    $usuario = new Usuario();


    switch ($_GET["op"]){
        case "guardarcorreo":
            $datos = $usuario->get_correo($_POST["usu_correo"]);

            if(is_array($datos) == true and count($datos) == 0){
                $usuario->insert_correo($_POST["usu_correo"]);
                echo 1;
        }else{
            echo 2;
        }
            break;
    }


?>