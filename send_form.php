<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "feras@dinbyggteknik.se"; // replace with your real email
    $subject = "Nytt meddelande från webbplatsen";
    $body = "Namn: $name\nE-post: $email\n\nMeddelande:\n$message";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Tack! Ditt meddelande har skickats.";
    } else {
        echo "Ett fel uppstod. Försök igen senare.";
    }
} else {
    http_response_code(405);
    echo "405 Method Not Allowed";
}
?>

