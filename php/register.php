<?php

require 'vendor/autoload.php';

$SENDGRID_API_KEY = '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';

$infoRequest = filter_input_array(INPUT_POST, array(
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

    $template = file_get_contents(dirname(__FILE__) . '/../html/email/template.html');
    $template = str_replace('{name}', $infoRequest['name'], $template);

    $content = new SendGrid\Content("text/html", $template);
    
    $mail = new SendGrid\Mail($from, $subject, $to, $content);
    $sg = new \SendGrid($SENDGRID_API_KEY);
    $response = $sg->client->mail()->send()->post($mail);
    echo $response->statusCode();
    echo $response->headers();
    echo $response->body();
} else {
    print_r($v->errors());
}