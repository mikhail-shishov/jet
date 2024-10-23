<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['username']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "request@thejet.io";
    $subject = "Новое сообщение с сайта The Jet";

    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";

    $email_message = "Имя: $name\n";
    $email_message .= "Телефон: $phone\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Сообщение: \n$message\n";

    if (mail($to, $subject, $email_message, $headers)) {
        echo "Сообщение отправлено!";
    } else {
        echo "Ошибка.";
    }
}
?>
