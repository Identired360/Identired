<?php

require 'vendor/autoload.php';

$forward = "../gracias-brief";
$SENDGRID_API_KEY = getenv('SENDGRID_API_KEY');

$infoRequest = filter_input_array(INPUT_POST, array(
    'nombre' => FILTER_SANITIZE_STRING,
    'correo' => FILTER_SANITIZE_STRING,
    'empresa' => FILTER_SANITIZE_STRING,
    'dedica' => FILTER_SANITIZE_STRING,
    'tiempo' => FILTER_SANITIZE_STRING,
    'productos-servicios' => FILTER_SANITIZE_STRING,
    'cuantos-productos' => FILTER_SANITIZE_STRING,
    'logo' => FILTER_SANITIZE_STRING,
    'presupuesto' => FILTER_SANITIZE_STRING,
    'informacion' => FILTER_SANITIZE_STRING,
    'referencia' => FILTER_SANITIZE_STRING
        )
);

$v = new Valitron\Validator($infoRequest);

$v->rule('required', ['correo', 'empresa', 'dedica', 'cuantos-productos', 'logo', 'presupuesto', 'informacion']);
$v->rule('email', 'correo');

if ($v->validate()) {
    $from = new SendGrid\Email("Marco Milon", "marco.milon@identired.com");
    $subject = "Brief - Identired";
    $to = new SendGrid\Email('Identired', 'informes@identired.com');

    $body = "Nombre: " . $infoRequest['nombre'] . "<br/>";
    $body .= "Correo: " . $infoRequest['correo'] . "<br/>";
    $body .= "Empresa: " . $infoRequest['empresa'] . "<br/>";
    $body .= "A que se dedica: " . $infoRequest['dedica'] . "<br/>";
    $body .= "Caunto tiempo: " . $infoRequest['tiempo'] . "<br/>";
    $body .= "Productos/Servicios: " . $infoRequest['productos-servicios'] . "<br/>";
    $body .= "Cuantos productos: " . $infoRequest['cuantos-productos'] . "<br/>";
    $body .= "Tienes logo: " . $infoRequest['logo'] . "<br/>";
    $body .= "Presupuesto: " . $infoRequest['presupuesto'] . "<br/>";
    $body .= "Información: " . $infoRequest['informacion'] . "<br/>";
    $body .= "Referencia: " . $infoRequest['referencia'] . "<br/>";
    

    $content = new SendGrid\Content("text/html", $body);

    $mail = new SendGrid\Mail($from, $subject, $to, $content);
    $sg = new \SendGrid($SENDGRID_API_KEY);
    $response = $sg->client->mail()->send()->post($mail);

    header("Location: " . $forward);
    exit();
} else {
    print_r($v->errors());
}