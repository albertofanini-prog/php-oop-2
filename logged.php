<?php
    require __DIR__ . '/user.php';
    class Logged extends User{

        public $logged = true;
        public $password;

        //Creazione profilo
        public function __construct($name, $surname, $username, $address, $email, $password){
            if ($password != ""){
                $this->logged = true;
            }
        }
    }
?>