<?php
    $text = $_GET['words'];
    $censured = $_GET['censured'];
    $censuredText = str_replace($censured, '***', $text);
    $censuredTextLen = strlen($censuredText);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h3>Testo Originale</h3>
        <p><?php echo $text ?></p>
        <div>Lunghezza: <?php echo strlen($text) ?></div>
    </div>
    <div>
        <h3>Testo Censurato</h3>
        <p><?php echo $censuredText ?></p>
        <div>Lunghezza: <?php echo $censuredTextLen ?></div>
    </div>
</body>

</html>