<?php

require 'vendor/autoload.php';

$forward = "../html/gracias-suscripcion.php";
$SENDGRID_API_KEY = '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';
$listId = "494674";

$infoRequest = filter_input_array(INPUT_POST, array(
    'name' => FILTER_SANITIZE_STRING,
    'email' => FILTER_SANITIZE_STRING
        ));

$v = new Valitron\Validator($infoRequest);

$v->rule('required', ['name', 'email']);
$v->rule('email', 'email');

if ($v->validate()) {
    $sg = new \SendGrid($SENDGRID_API_KEY);
    $request_body = json_decode('[{ "email": "' . $infoRequest['email'] . '",  "first_name": "' . $infoRequest['name'] . '", "last_name": ""}]');
    $response = $sg->client->contactdb()->recipients()->post($request_body);

    $responseBody = json_decode($response->body());

    $persistedRecipients = $responseBody->persisted_recipients[0];
    $sg->client->contactdb()->lists()->_($listId)->recipients()->_($persistedRecipients)->post();

    header("Location: " . $forward);
    exit();
} else {
    
}