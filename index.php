<?php

$paragraph = "Il mio primo paragrafo in php";
$lengthParagraph = strlen($paragraph);
$badWord = $_GET["badword"];
$newParagraph = str_replace($badWord, '***', $paragraph);
$lengthNewParagraph = strlen($newParagraph);

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
    
    <h1><?php echo $paragraph ?></h1>
    <h2>La lunghezza di paragrafo è di <?php echo $lengthParagraph ?> caratteri.</h2>
    <h1><?php echo $newParagraph ?></h1>
    <h2>La lunghezza di questo paragrafo censurato è di <?php echo $lengthNewParagraph ?> caratteri.</h2>

</body>
</html>