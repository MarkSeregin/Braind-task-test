<!DOCTYPE html>
<html lang="xyz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Algoritm</title>
</head>
<body>
<div class="center__panel__result">
    <div class="text__result">Abbreviated text with a link to the full text :</div>

    <div class="result__algoritm">
    <?php
    $articleText = $_REQUEST["articleText"];
    $articleLink = "article.php?articleName=$articleName&articleText=$articleText";

    if (strlen($articleText) > 199) {

        $articlePreview = substr($articleText, 0, 199) . "...";
        $count = 0;
        $under = strlen($articlePreview);

        while ($count != 4) {

            if ($articlePreview{$under} == ' ') $count++;

            $under--;
        }

        $articlePreview = substr($articlePreview, 0, $under) . "<a href='$articleLink'>" . substr($articlePreview, $under, 203) . "</a>";
    }

    echo("$articlePreview");
    ?>
    </div>
</div>
</body>
</html>
