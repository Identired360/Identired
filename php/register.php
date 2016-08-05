<?php

require 'vendor/autoload.php';

use Respect\Validation\Validator as v;

$method = 'POST';

$validRuest = v::arr()
        ->key('name', $n = v::string()->notEmpty())
        ->key('email', v::email())
        ->key('phone', v::string()->notEmpty())
        ->key('msg', v::string()->notEmpty())
        ->setName('Information Request');

$infoRequest = filter_input_array(INPUT_POST, array(
    'name' => FILTER_SANITIZE_STRING,
    'email' => FILTER_SANITIZE_STRING,
    'phone' => FILTER_SANITIZE_STRING,
    'msg' => FILTER_SANITIZE_STRING)
);

try {
    $validRuest->assert($infoRequest);
    echo "Success!";
} catch (ValidationException $invalidRequest) {
    echo $invalidRequest->getMainMessage();
}

//$from = new SendGrid\Email(null, "marco.milon@identired.com");
//$subject = "Hello World from the SendGrid PHP Library!";
//$to = new SendGrid\Email(null, "test@example.com");
//$content = new SendGrid\Content("text/plain", "Hello, Email!");
//$mail = new SendGrid\Mail($from, $subject, $to, $content);
//
//$apiKey = getenv('SENDGRID_API_KEY');
//$sg = new \SendGrid($apiKey);
//
//$response = $sg->client->mail()->send()->post($mail);
//echo $response->statusCode();
//echo $response->headers();
//echo $response->body();
