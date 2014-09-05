<?php ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>My email</title>
</head>

<body>

<form action="" method="post">
    <input type="submit" value="Send details to embassy" />
    <input type="hidden" name="button_pressed" value="1" />
</form>

<?php

if(isset($_POST['button_pressed']))
{
    $to      = 'mdmkrahman@gmail.com';
    $subject = 'the subject';
    $message = 'hello';
    $headers = 'From: mdmkrahman@yahoo.com' . "\r\n" .
        'Reply-To: mdmkrahman@yahoo.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

    echo 'Email Sent.';
}

?>

</body>

</html>