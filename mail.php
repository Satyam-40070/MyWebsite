<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>

<body>
            

<form method="post"  action="<?php echo $_SERVER['PHP_SELF'];?>">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
        
        <label for="email">email</label>
        <input type="email" name="email" id="email" required>
        
        <label for="subject">Subject</label>
        <input type="text" name="subject" id="subject" required>
        
        <label for="message">Message</label>
        <textarea name="message" id="message" required></textarea>
        
        <br>
        
        <button>Send</button>
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$name = $_POST["uname"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

require "vendor/autoload.php";

include ("PHPMailer.php");
include ("SMTP.php");

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.example.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "satyamsharma40070@gmail.com";
$mail->Password = "satyam@thapar";

$mail->setFrom($email, $name);
$mail->addAddress("ssharma1_be21@thapar.edu", "");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

header("Location: sent.html");
}
?>
</body>
</html>