<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'your-email@example.com';
    $subject = 'رسالة جديدة من نموذج الاتصال';
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    $body = "لقد تلقيت رسالة جديدة من نموذج الاتصال:\n\n".
            "الاسم: $name\n".
            "البريد الإلكتروني: $email\n".
            "الرسالة:\n$message";

    if(mail($to, $subject, $body, $headers)) {
        echo 'شكراً! تم إرسال رسالتك.';
    } else {
        echo 'عذراً، حدث خطأ أثناء إرسال رسالتك.';
    }
}
?>
