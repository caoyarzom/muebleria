<?php

$listaDeErrores = 'listaVacia';

$nombre = $_POST['nombre'];
$mail = $_POST['mail'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$telefono = $_POST['telefono'];

//echo"nombre" . $nombre . " mail " . $mail . " asunto " . $asunto . " mensaje " . $mensaje;
//valido el mail

if ($mail == "" or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/", $mail)) {

    $listaDeErrores = "Se encontraron <span style='color:red;'>Errores</span><br>";
    $listaDeErrores.="<ul>";
    $listaDeErrores.="<li>El <span style='color:red;'>Correo</span> ingresado no es valido <span style='color:red;'>" . $mail . "</span></li>";
}
if ($telefono == "" or !is_numeric($telefono)) {
    if ($listaDeErrores == "listaVacia") {
        $listaDeErrores = "Se encontraron <span>Errores<span><br>";
        $listaDeErrores.="<ul>";
        $listaDeErrores.="<li>El <span style='color:red;'>Telefono</span> ingresado no es valido <span style='color:red;'>" . $telefono . "</span></li>";
    } else {
        $listaDeErrores.="<li>El <span style='color:red;'>Telefono</span> ingresado no es valido <span style='color:red;'>" . $telefono . "</span></li>";
    }
}
if ($nombre == "") {
    if ($listaDeErrores == "listaVacia") {
        $listaDeErrores = "Se encontraron <span>Errores<span><br>";
        $listaDeErrores.="<ul>";
        $listaDeErrores.="<li>El campo <span style='color:red;'>Nombre</span> no puede quedar vacio </li>";
    } else {
        $listaDeErrores.="<li>El campo <span style='color:red;'>Nombre</span> no puede quedar vacio </li>";
    }
}
if ($asunto == "") {
    if ($listaDeErrores == "listaVacia") {
        $listaDeErrores = "Se encontraron <span>Errores<span><br>";
        $listaDeErrores.="<ul>";
        $listaDeErrores.="<li>El campo <span style='color:red;'>Asunto</span> no puede quedar vacio </li>";
    } else {
        $listaDeErrores.="<li>El campo <span style='color:red;'>Asunto</span> no puede quedar vacio </li>";
    }
}
if ($mensaje == "") {
    if ($listaDeErrores == "listaVacia") {
        $listaDeErrores = "Se encontraron <span>Errores<span><br>";
        $listaDeErrores.="<ul>";
        $listaDeErrores.="<li>El campo <span style='color:red;'>Mensaje</span> no puede quedar vacio </li>";
    } else {
        $listaDeErrores.="<li>El campo <span style='color:red;'>Mensaje</span> no puede quedar vacio </li>";
    }
}
if ($listaDeErrores != "listaVacia") {
    $listaDeErrores.="</ul>";
    echo $listaDeErrores;
    return;
} else {
    $header = 'From: ' . $mail . " \r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";

    $mensajeCompleto = "De : " . $nombre . "\n";
    $mensajeCompleto .="Teléfono : " . $telefono . "\n";
    $mensajeCompleto .="Mail: " . $mail . "\n";
    $mensajeCompleto .="Asunto: " . $asunto . "\n\n\n";
    $mensajeCompleto .=$mensaje;

    if (mail("contacto@dev-websur.tk", $asunto, $mensajeCompleto, $header)) {
        echo "<p style='text-align:center;'>Su mensaje ha sido enviado</p>";
       header("location:./index.php");
    } else {
        echo "<p style='text-align:center;'>Hay problemas de comunicacion con el servidor</p>";
    }
}
?>
