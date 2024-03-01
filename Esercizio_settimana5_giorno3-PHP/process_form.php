<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera i dati del modulo
    $lastname = $_POST["lastname"];
    $firstname = $_POST["firstname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Eseguire qui qualsiasi convalida o elaborazione necessaria
    // A scopo dimostrativo, stampiamo semplicemente i dati inviati
    echo "Last Name: " . $lastname . "<br>";
    echo "First Name: " . $firstname . "<br>";
    echo "Email: " . $email . "<br>";
    // Nota: non visualizzare mai direttamente la password; questo è solo per dimostrazione
    echo "Password: " . $password . "<br>";
} else {
    echo "Invalid request method.";
}
?>