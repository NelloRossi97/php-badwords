<?php 
$text = $_POST['paragraph'];
$censor = $_POST['censor'];
$textLength = strlen($text);
$censoredText = str_replace($censor , "***", $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.scss">
    <title>Censored page</title>
</head>
<body>
    <div class="container vh-100 d-flex flex-column align-items-center justify-content-center">
        <h1 class="text-center">
            <?php echo "Il testo inserito è: $text"?>
        </h1>
        <h2 class="text-success">
            <?php echo "La lunghezza del testo inserito è: $textLength"?>
        </h2>
        <h2 class="text-center my-5"> 
            <?php echo "La parola da censurare è: $censor"?>
        </h2>

        <h3>
            <?php echo "Il testo censurato è: $censoredText"?>
        </h3>
    </div>
</body>
</html>