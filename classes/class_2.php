<?php

    class User {
        public $username;
        // private $email = "manoj@gmail.com";
        protected $email;
        public $password;

        public function __construct ($username, $email, $password) {
            $this -> username = $username;
            $this -> email = $email;
            $this -> password = $password;
        }

        public function getEmail () {
            return $this -> email;
        }

        public function setEmail ($email) {
            return $this -> email = $email;
        }

        public function login () {
            echo $this -> username . " logged in";
        }
    
    }

    class Admin extends User {
        public $role;

        public function __construct ($username, $email, $password, $role) {
            parent:: __construct($username, $email, $password);
            $this -> role = $role;
        }
        
        public function logged () {
            echo $this -> email . " has logged in.";
        }
    }

    $user = new User("badarni", "badarni@gmail.com", "aaa");
    // $user -> username = "badarni";
    $user -> login();
    echo '<br>';
    echo $user -> setEmail("badarni@gmail.com");
    echo '<br>';
    echo $user -> password;


    // echo $user -> getEmail();
    
    // echo $user -> email; 

    $admin = new Admin("superbadarni", "superbadarni@gmail.com", "aaa");
    echo "<br>";
    echo $admin -> username;
    echo "<br>";
    echo $admin -> login();
    echo "<br>";

    $admin -> username = "ABC";
    echo $admin -> username;
    echo "<br>";
    echo $admin -> login();
    echo "<br>";
    echo $admin -> logged();

?>