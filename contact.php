<?php
// Guardar los datos recibidos en variables:
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
// Definir el correo de destino:
$dest = "tucorreo@gmail.com"; 
 
// Estas son cabeceras que se usan para evitar que el correo llegue a SPAM:
//$headers = "From: $nombre <$email>\r\n";  
//$headers .= "X-Mailer: PHP5\n";
//$headers .= 'MIME-Version: 1.0' . "\n";
//$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Aqui definimos el asunto y armamos el cuerpo del mensaje
$asunto = "Contacto";
$cuerpo = "Nombre: ".$nombre."<br>";
$cuerpo .= "Email: ".$email."<br>";
$cuerpo .= "Telefono: ".$telefono."<br>";
$cuerpo .= "Mensaje: ".$mensaje;

$json = array();
$datos = array(
    'nombre' => $nombre,
    'email' => $email,
    'telefono' => $telefono,
    'mensaje' => $mensaje,
);

array_push($json, $datos);
 
// Esta es una pequena validación, que solo envie el correo si todas las variables tiene algo de contenido:
if($nombre != '' && $email != '' && $telefono != '' && $mensaje != ''){
//    mail($dest,$asunto,$cuerpo,$headers); //ENVIAR!
	$jsonstring = json_encode($json);
	echo $jsonstring;
}

?>