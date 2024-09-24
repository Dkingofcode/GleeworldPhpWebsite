<?php
header('Content-Type: application/json');

$input = json_decode(file_get_contents('php://input'), true);

$name = $input['name'];
$email = $input['email'];
$message = $input['message'];

// Here you can implement your email sending logic (e.g., using PHPMailer or mail())



$response = ['message' => 'Thank you for your message!'];

echo json_encode($response);
?>
