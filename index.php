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
    <div class="container d-flex justify-content-center">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label my-4">Iscriviti alla newsletter!</label>
                <input type="text" action="index.php" method="GET" class="form-control mb-4" id="subscribe" name="subscribe"><?php include 'functions.php' ?>
            </div>
        </form>
    </div>
</body>

</html>