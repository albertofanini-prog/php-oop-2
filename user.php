<?php
    class User{
        public $name;
        public $surname;
        public $username;
        public $birthDate;
        public $address;
        public $country;

        public function __construct($name, $surname, $username, $birthDate, $address, $country){
            $this->name = $name;
            $this->surname = $surname;
            $this->username = $username;
            $this->birthDate = $birthDate;
            $this->address = $address;
            $this->country = $country;
        }

    }
?>