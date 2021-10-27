<?php

$email = $_POST['email'];
$nombre = $_POST['nombre'];
$con = $_POST['con'];
$destinatario = "fede_olguin_10@outlook.com.ar":
$asunto = "Contacto desde nuestra web";


$carta="De: $nombre \n ";
$carta .= "Correo: $email \n";
$carta .= "Mensaje: $con";


mail($destinatario, $asunto, $carta);

?>