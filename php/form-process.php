<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "El nombre es requerido";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "El email es requerido";
} else {
    $email = $_POST["email"];
}

// TELEFONO
if (empty($_POST["telefono"])) {
    $errorMSG .= "El teléfono es requerido ";
} else {
    $telefono = $_POST["telefono"];
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "El mensaje es requerido ";
} else {
    $message = $_POST["message"];
}

//DESDE
$desde = $_POST["desde"];

$EmailTo = "contacto@cirugiaplasticachile.com";
$Subject = "Contacto desde cirugiaplasticachile.com";

// prepare email body text
$Body = "Desde: ";
$Body .= $desde;
$Body .= "\n";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Teléfono: ";
$Body .= $telefono;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Algo salió mal :(";
    } else {
        echo $errorMSG;
    }
}

?>