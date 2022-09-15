<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swap</title>
</head>
<body>
    <?php
        $x = 10;
        $y = 20;

        echo "Before swapping: <br/> x = $x <br/> y = $y";

        swap($x , $y);

        function swap($x , $y) {
            $temp;

            $temp = $x;
            $x = $y;
            $y = $temp;

            echo "<br/>After swapping: <br/> x = $x <br/> y = $y";

        }
    ?>
</body>
</html>