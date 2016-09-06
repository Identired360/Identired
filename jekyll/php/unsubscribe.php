<?php

require 'vendor/autoload.php';

$forward = "/gracias/confirma-desuscripcion";
$SENDGRID_API_KEY = getenv('SENDGRID_API_KEY');
$listId = "494674";

$infoRequest = filter_input_array(INPUT_POST, array(
    'email' => FILTER_SANITIZE_STRING
        ));

$v = new Valitron\Validator($infoRequest);

$v->rule('required', ['email']);
$v->rule('email', 'email');

if ($v->validate()) {
    $from = new SendGrid\Email("Marco Milon", "marco.milon@identired.com");
    $subject = "Brief - Identired";
    $to = new SendGrid\Email('Identired', 'informes@identired.com');

    $body = "Desuscribir: <br/> ";
    $body .= "Correo: " . $infoRequest['email'] . "<br/>";
    
    $content = new SendGrid\Content("text/html", $body);

    $mail = new SendGrid\Mail($from, $subject, $to, $content);
    $sg = new \SendGrid($SENDGRID_API_KEY);
    $response = $sg->client->mail()->send()->post($mail);

    header("Location: " . $forward);
    exit();
} else {

}