<?php

$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['email'];
$msg = $_POST['msg'];

