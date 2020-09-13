<!DOCTYPE html>
<html lang="xyz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Result</title>
</head>
<body>
<div class="center__panel__result">
	<div class="text__result">Result :</div>

	<div class="result__panel">
	<?php 
	$n = (int)$_REQUEST['n'];
	$k = (int)$_REQUEST['k'];
	$count = 1;
	$ms[0] = "0";

	while ($count != $n + 1) {
	    $ms[$count] = (string)$count . "_";
	    $count++;
	}

	$calcul = count($ms);

    if ($calcul <= 1) return $ms;

    for ($i = 1; $i < $calcul; $i++) {
        $val = $ms[$i];
        $j = $i - 1;
 
        while (isset($ms[$j]) && $ms[$j] > $val) {
            $ms[$j + 1] = $ms[$j];
            $ms[$j] = $val;
            $j--;
        }
    }

	echo (array_search($k."_", $ms));
	?>
	</div>
</div>
</body>
</html>