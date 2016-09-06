<?php

require 'vendor/autoload.php';

$forward = "../gracias";
$SENDGRID_API_KEY = getenv('SENDGRID_API_KEY');

$infoRequest = filter_input_array(INPUT_POST, array(
    'section' => FILTER_SANITIZE_STRING,
    'name' => FILTER_SANITIZE_STRING,
    'email' => FILTER_SANITIZE_STRING,
    'phone' => FILTER_SANITIZE_STRING,
    'msg' => FILTER_SANITIZE_STRING)
);

$v = new Valitron\Validator($infoRequest);

$v->rule('required', ['name', 'email', 'phone', 'msg']);
$v->rule('email', 'email');

if ($v->validate()) {
    $from = new SendGrid\Email("Marco Milon", "marco.milon@identired.com");
    $subject = "Gracias por enviarnos tu consulta";
    $to = new SendGrid\Email($infoRequest['name'], $infoRequest['email']);

    $template = file_get_contents(dirname(__FILE__) . '/email/template.html');
    $template = str_replace('{name}', $infoRequest['name'], $template);
    $content = new SendGrid\Content("text/html", $template);
    $mail = new SendGrid\Mail($from, $subject, $to, $content);

    $sg = new \SendGrid($SENDGRID_API_KEY);
    $response = $sg->client->mail()->send()->post($mail);

    $from = new SendGrid\Email("Marco Milon", "marco.milon@identired.com");
    $subject = "Contacto de la pagina web - Identired";
    $to = new SendGrid\Email('Identired', 'informes@identired.com');

    $body = "Sección: " . $infoRequest['section'] . "<br/>";
    $body .= "Nombre: " . $infoRequest['name'] . "<br/>";
    $body .= "Email: " . $infoRequest['email'] . "<br/>";
    $body .= "Teléfono: " . $infoRequest['phone'] . "<br/>";
    $body .= "Msg: " . $infoRequest['msg'] . "<br/>";

    $content = new SendGrid\Content("text/html", $body);

    $mail = new SendGrid\Mail($from, $subject, $to, $content);
    $sg = new \SendGrid($SENDGRID_API_KEY);
    $response = $sg->client->mail()->send()->post($mail);

    header("Location: " . $forward);
    exit();
} else {
    print_r($v->errors());
}
