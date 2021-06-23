<?php
$nombre = $_POST ['introducir_nombre'];
$email = $_POST ['introducir_email'];
$telefono = $_POST ['introducir_telefono'];
$mensaje = $_POST ['introducir_mensaje'];

echo "<h2> Información recibida desde PHP </h2>";
echo "el nombre recibido es:" . $nombre;
echo "el mail recibido es:" . $email;
echo "el telefono recibido es:" . $telefono;
echo "el mensaje recibido es:" . $mensaje;

?>