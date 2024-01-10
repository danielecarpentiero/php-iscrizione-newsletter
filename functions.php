<?php
if (isset($_GET['subscribe'])) {
    $email = $_GET['subscribe'];
    if (str_contains($email, '@') && str_contains($email, '.')) {
        echo '<div class="alert alert-success" role="alert">
            Successo! Sei autorizzato a procedere.
        </div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">
            Errore! Inserisci una mail con caratteri validi.
        </div>';
    }
}
