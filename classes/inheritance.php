<?php
    class Animal {
        private $colour = 'black';
        public $height = 20;
        public $weight = 40;
    
        public function getcolor() {
            return $this -> colour;
        }

        public function move() {
            echo "moving <br>";
        }

        public function jump() {
            echo "jumping <br>";
        }
    }

    class Dog extends Animal {
        function what() {
            echo "What the Dog doin!";
        }
    }

    
    $animal = new Animal();
    $animal -> move();
    echo $animal -> getcolor();


    $dog = new Dog();
    $dog -> jump();
    newLine();
    $dog -> what();







    function newLine() {
        echo '<br/>';
    }
?>   