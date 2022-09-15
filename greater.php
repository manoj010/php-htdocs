<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greatest</title>
</head>
<body>
    <?php
        $numbers = array(20, 30, 10, 50, 5);
        $n = count($numbers)-1;
        $max = $numbers[0];

        for($i = 1; $i <= $n; $i++) {
            if($max < $numbers[$i]) {
                $max = $numbers[$i];
            }
        }

        echo "The greatest number in array is $max.";
    ?>
</body>
</html>