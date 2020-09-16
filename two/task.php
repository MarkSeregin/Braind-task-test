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
    $m = (int)$_REQUEST['m'];
    $count = 0;

    if ($n >= 0 && $m <= 1000) {

        while ($m > 2) {
            $m -= 2;
            $n += 1;
            $count++;

            while ($n != 1 && $n != 0) {
                $n -=2;
                $count++;
            }

        }

        if ($n == 0 && $m == 1) {
            $count += 6;
			echo $count;
        } else if ($n == 0 && $m == 2) {
            $count += 5;
			echo $count;
        } else if ($n == 1 && $m == 2) {
            $count +=2;
			echo $count;
        } else if ($n == 1 && $m == 1) {
            $count +=3;
			echo $count;
        } else if (($n / 2) != 0 && $m == 0) {
            echo "-1";
        }
    }

    
    ?>
    </div>
</div>
</body>
</html>