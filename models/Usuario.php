<?php


class Usuario extends Conectar {

    public function insert_correo($usu_correo){
        $conectar = parent::conexion();
        parent::set_names();
        $sql ="INSERT INTO tm_usuario (usu_correo, fech_crea, est) VALUES (?, now(), 1)";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $usu_correo);
        $sql->execute();
    }

    public function get_correo($usu_correo){
        $conectar = parent::conexion();
        parent::set_names();
        $sql ="SELECT * FROM tm_usuario WHERE usu_correo=?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $usu_correo);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>