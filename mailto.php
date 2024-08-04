<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST['token']) || $_POST['token'] != 'FsWga4&@f6aw') {
        echo '<span class="notice">Error!</span>';
        exit;
    }
    
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $from = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
    $subject = isset($_POST['subject']) ? htmlspecialchars(stripslashes(nl2br($_POST['subject']))) : '';
    $message = isset($_POST['message']) ? htmlspecialchars(stripslashes(nl2br($_POST['message']))) : '';
    
    $headers = "From: $from\r\n";
    $headers .= "Reply-To: $from\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";

    $body = "
    <html>
    <head>
    <title><strong>$subject</strong></title>
    </head>
    <body>
    <p>Hello Vegmart Admin!</p>
    <p>$name has sent you a message via contact form on your website!</p><br />
    <p><strong>Name:</strong> $name</p>
    <p><strong>Email:</strong> $from</p>
    <p><strong>Phone:</strong> $phone</p>
    <p><strong>Subject:</strong> $subject</p>
    <p><strong>Message:</strong> $message</p>
    <br />
    <br />
    ============================================================
    </body>
    </html>";

    $to = 'albrightwagandi@gmail.com';

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Thank You! \nYour message has been sent successfully.')</script>";
        echo "<script>window.location.href='contact.php';</script>";
    } else {
        echo "<script>alert('Your message sending failed!')</script>";
        echo "<script>window.location.href='contact.php';</script>";
    }
}
?>
