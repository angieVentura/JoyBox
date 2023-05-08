<?php
if(isset($_POST['email'])){
    $email = $_POST['email'];
    $titulo = $_POST['titulo'];
    $body = $_POST['prosa'];

    if(empty($email) || empty($titulo)){
        echo "no papito, el email y el titulo son REALMENTE obligatorios";
        exit;
    }

    $email_desde = "From: --JoyBox";
    $email_body = "Nuevo mensaje desde seccion contacto de JoyBox!\n". 
                    "Direccion de email: $email\n". 
                    "Titulo: $titulo\n". 
                    "Contenido: \n\n.". 
                    "$body";
    $to = "Tobias.coman@hotmail.com";

    mail($to, "Nuevo email de contacto de JoyBox", $email_body, $email_desde);
}
$view = "contacto";
require_once "views/layout.php";
?>