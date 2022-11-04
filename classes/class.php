<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Classes</title>
</head>
<body>
    <?php

        class Monkey {
            public $speed = 10;
            public $jumps = 'true';
            public $position = 'tree';
            public $canDance = 'unknown';
        
            function __construct($jumps) {
                $this->jumps = $jumps;
            }

            function move() {
                echo "I am moving at the speed of " . $this->speed;
            }
        }

        $monkey = new Monkey('false');
        echo $monkey->position;
        newLine();

        echo $monkey->jumps;

        $monkey2 = new Monkey;
        echo $monkey2->canDance;
        newLine();
        $monkey2->speed = 20;
        echo $monkey2->speed;
        newLine();
        $monkey2->move();







        function newLine() {
            echo '<br/>';
        }
    ?>
</body>
</html>