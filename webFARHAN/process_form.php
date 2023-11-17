<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phoneNumber"];
    $message = $_POST["message"];

    $to = "alamat-email-dheafarhan7@gmail.com";
    $subject = "Pesan dari Formulir Kontak";
    $messageBody = "Nama: $name\nEmail: $email\nTelepon: $phone\nPesan:\n$message";

    mail($to, $subject, $messageBody);

    // Redirect atau tampilkan pesan sukses
    header("Location: thank_you.html");
    exit();
}
?>
