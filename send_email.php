<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "fadilarizkanuraminah@gmail.com";
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);

    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Error sending message.";
    }
} else {
    http_response_code(403);
    echo "Forbidden";
}
?>
