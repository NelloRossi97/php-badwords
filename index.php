<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.scss">
    <title>PHP Badwords</title>
</head>
<body>
    <div class="container vh-100 d-flex flex-column align-items-center justify-content-center">
        <form action="censor.php" method="POST" class="d-flex flex-column">
            <label for="paragraph">Inserisci il testo</label>
            <input type="text" name="paragraph" id="paragraph">
            <label for="censor">Inserisci la parola da censurare</label>
            <input type="text" name="censor" id="censor">
            <input type="submit" value="Invia">
        </form>
    </div>
</body>
</html>