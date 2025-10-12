<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "feras@dinbyggteknik.se"; // your Strato email
    $subject = "Nytt meddelande från dinbyggteknik.se";
    $body = "Namn: $name\nE-post: $email\nTelefon: $phone\n\nMeddelande:\n$message";
    $headers = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8";

    if (mail($to, $subject, $body, $headers)) {
        echo "<h2>Tack för ditt meddelande!</h2><p>Vi återkommer så snart som möjligt.</p>";
    } else {
        echo "<h2>Tyvärr gick det inte att skicka meddelandet.</h2><p>Försök igen senare.</p>";
    }
}
?>
