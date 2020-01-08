<?php
header('Content-Type: application/json');

$name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
$subject = filter_input(INPUT_POST,'subject',FILTER_SANITIZE_STRING);
$text = filter_input(INPUT_POST,'text',FILTER_SANITIZE_STRING);


if(empty($name) || empty($email) || empty($subject) || empty($text)) {
    http_response_code (400);
    echo json_encode(['error' => 'Please enter all fields']);
    die;
}

if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['error' => 'Please enter a valid email address']);
    die;
}

$to      = 'patarcic98@gmail.com';
$headers =  "From: $name <$email>" . PHP_EOL .
            "Reply-To: $name <$email>" . PHP_EOL .
            "X-Mailer: PHP/" . phpversion();

$send = mail($to,$subject,$text,$headers);

if(!$send) {
    http_response_code(400);
    echo json_encode(['error' => 'Oops... Something went wrong']);
    exit;
}

echo json_encode(['success' => 'Email sent successfully']);

