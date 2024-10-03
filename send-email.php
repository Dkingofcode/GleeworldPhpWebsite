<!-- <!?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Prepare the email content
    $to = "doladepo128@gmail.com"; // Replace with your Gmail
    $subject = "New Message from Contact Form";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Email successfully sent!";
    } else {
        echo "Failed to send the email.";
    }
}
?>








<!?php   


$name = $_POST['name'];
$email = $_POST['email'];
$message= $_POST['message'];


$mailheader + "From: " .$name. "<" .$email. ">\r\n";

$recipient  = "doladepo128@gmail.com";

mail($recipient, $subject, $message, $mailheader)
or die("Error!");

echo '  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
     <div class="container">
        <h1>Thank you for contacting Us. We will get back to you as soon as possible</h1>
        <p>Go back to the <a href="index.php">homepage</a> </p>


     </div>
    
</body>
</html>
'


?> -->




 

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // $transport = new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl');
        // $transport->setUsername('doladepo128@gmail.com');
        // $transport->setPassword('iunbiyuwvthjofvy');

        // $mailer = new Swift_Mailer($transport);

        // $message = (new Swift_Message('Test Email'))
        //     ->setFrom(['technitedevs@gmail.com' => 'Exam Admin'])
        //     ->setTo([$to => $firstname])
        //     ->setBody($message);



        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'doladepo128@gmail.com'; // Your Gmail address
        $mail->Password = 'iunbiyuwvthjofvy'; // Gmail app password
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        // Recipient
        $mail->setFrom($email, $name);
        $mail->addAddress('Gleeworldp@gmail.com'); // Your Gmail address
        //$mail->addReplyTo($email, $name); 


        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'New Message from Contact Form';
        $mail->Body = "<h4>Name: $name</h4><h4>Email: $email</h4><p>Message:<br>$message</p>";
        //$mail->AltBody = "Name: $name\nEmail: $email\n\nMessage:\n$message"; // Plain text version
        $mail->Body = $message;
  
        // Send email
        $mail->send();
        //$mail->SMTPDebug = 2;
        echo 'Email has been sent successfully!';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>   





<!-- 
$transport = new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl');
        $transport->setUsername('techie@gmail.com');
        $transport->setPassword('eydrnlsityrsdh');

        $mailer = new Swift_Mailer($transport);

        $message = (new Swift_Message('Test Email'))
            ->setFrom(['technitedevs@gmail.com' => 'Exam Admin'])
            ->setTo([$to => $firstname])
            ->setBody($message);

        $imagePath = $pngFilename;
        $imageData = file_get_contents($imagePath);
        $image = new Swift_Image($imageData, 'im -->
