<?php

if (isset($_POST['enviar'])) {
    if (!empty($_POST['name']) && !empty($_POST['asunto']) && !empty($_POST['msg']) && !empty($_POST[email])){ 
$nombre = $_POST ['introducir_nombre'];
$email = $_POST ['introducir_email'];
$telefono = $_POST ['introducir_telefono'];
$mensaje = $_POST ['introducir_mensaje'];
$header = "From: noreply@example.com" . "\r\n";
$header.= "Reply-To: noreply@example.com" . "\r\n";
$header.= "X-Mailer: PHP/" . phpversion ();
mail = @mail($email,$asunto,$msg,$header);
if ($mail) {
    echo "<h4>¡Mail enviado exitosamente!</h4>";
}
}
}

?>