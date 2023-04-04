<?php 
$text = $_GET['words'];
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
        <div><?php echo strlen($text) ?></div>
    </div>
    
</body>
</html>