<?php
if (isset($_POST['Enviar'])){
    if (!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['mensaje'])){
        $name = $_POST['nombre'];
        $correo = $_POST['correo'];
        $mensaje = $_POST['mensaje'];
        $header = "From: noreply@example.com" . "\r\n";
        $header .= "Reply-To: noreply@example.com" . "\r\n";
        $header .= "X-Mailer: PHP/".phpversion();
        mail($email,$mensaje,$header);
        if($email){
            echo "<h4> Mail enviado exitosamente <h4>"
        }
    }

}
$name



?>