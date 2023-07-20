<?php
    if(isset($_POST["enviar"])){
        if (!empty($_POST["nombre"]) && !empty($_POST["email"]) && !empty($_POST["mensaje"])) {
            
            $nombre = $_POST["nombre"];
            $email = $_POST["email"];
            $mensaje = $_POST["mensaje"];

            $correo_destino = "sgaona969@gmail.com";

            $asunto = "Nuevo mensaje del formulario de contacto";

            $cuerpo_correo = "Nombre: ".$nombre." \n";
            $cuerpo_correo .= "Email: ".$email. " \n";
            $cuerpo_correo .= "Mensaje: " .$mensaje. " \n";

            $cabeceras = "From: " . $email . "\r\n";
            $cabeceras .= "Reply-To: " . $email . "\r\n";

            $mail = @mail($correo_destino, $asunto, $cuerpo_correo, $cabeceras);

            if($mail){
                echo "Correo enviado correctamente";
             }//else {
            //     echo "Error al enviar el correo";
            // }
        }
    }
?>