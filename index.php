<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>PHP Iscrizione Newsletter</title>
</head>

<body>
    <div class="container">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Iscriviti alla newsletter!</label>
                <input type="text" action="index.php" method="GET" class="form-control" id="subscribe" name="subscribe"><?php if (isset($_GET['subscribe'])) {
                                                                                                                            $email = $_GET['subscribe'];
                                                                                                                            if (str_contains($email, '@') && str_contains($email, '.')) {
                                                                                                                                echo '<div class="alert alert-success" role="alert">
                                                                                                                           Successo! Sei autorizzato a procedere.
                                                                                                                          </div>';
                                                                                                                            } else
                                                                                                                                echo '<div class="alert alert-danger" role="alert">
                                                                                                                                Errore! Inserisci una mail con caratteri validi.
                                                                                                                              </div>';
                                                                                                                        } ?> <?php  ?>
            </div>
        </form>
    </div>
</body>

</html>