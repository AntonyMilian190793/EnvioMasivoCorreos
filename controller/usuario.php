<?php


    require_once("../config/conexion.php");
    require_once("../models/Usuario.php");
    $usuario = new Usuario();


    switch ($_GET["op"]){
        case "GuardarCorreo":
            $usuario->insert_correo($_POST["usu_correo"]);
            break;
    }


?>