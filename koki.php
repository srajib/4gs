<html>
<head>
</head>
<body>

<form action="" method="post">
    <input type="submit" value="Send details to embassy" />
    <input type="hidden" name="button_pressed" value="1" />
</form>

<?php

if(isset($_POST['button_pressed']))
{
    $to      = 'mdmkrahman@yahoo.com';
    $subject = 'How funny!!!';
    $message = 'wish u...';
    $headers = 'From: admin@4gs.com' . "\r\n" .
        'Reply-To: mdmkrahman@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

    echo 'Email Sent.';
}

?>


<!-- http://stackoverflow.com/questions/5650237/sending-emails-automatically-at-the-click-of-a-button -->
</body>
</html>