<?php
require('class.phpmailer.php');
include("class.smtp.php");

    class Email extends PHPMailer{

        protected $gCorreo = 'antonymilian19@outlook.com'; //variable que contiene el correo destinatario antonymilian19@outlook.com
        protected $gContrasena = '@nton&m&il&an19071993'; //varibale que tiene la contraseña distanatario jorgemilian190793


        public function email_bienvenida($usu_correo){

            $this->IsSMTP();
            $this->Host = 'smtp.office365.com';
            $this->Port = 587;
            $this->SMTPAuth = true;
            $this->Username = $this->gCorreo;
            $this->Password = $this->gContrasena;
            $this->From = $this->gCorreo;
            $this->FromName = "Bienvenido a Fe y Alegría del Perú";
            $this->CharSet = 'UTF8';
            $this->addAddress($usu_correo);
            $this->WordWrap = 50;
            $this->IsHTML(true);
            $this->Subject = "Bienvenido";
            $cuerpo = file_get_contents('../public/Template_FyABienvenido.html');
            $this->Body = $cuerpo;
            $this->AltBody = strip_tags("Descuentos");
            return $this->Send();
        }


    }



?>