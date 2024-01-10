<?php

session_start();

if (isset($_GET['subscribe'])) {
    $email = $_GET['subscribe'];
    if (str_contains($email, '@') && str_contains($email, '.')) {
        $_SESSION['email'] = $email;
        header('Location: thankyou.php');
        die;
    } else {
        echo '<div class="alert alert-danger" role="alert">
            Errore! Inserisci una mail con caratteri validi.
        </div>';
    }
}
