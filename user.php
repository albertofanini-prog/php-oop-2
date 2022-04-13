<?php
    class User{
        protected $name;
        protected $surname;
        protected $username;
        protected $birthDate;
        protected $address;
        protected $emai;
        protected $telephonNumber;
        protected $country;
        public $sale = 0;

        // Confermare che tutti i dati siano inseriti
        public function __construct($name, $surname, $username, $birthDate, $address, $email, $telephonNumber, $country){
            $this->name = $name;
            $this->surname = $surname;
            $this->username = $username;
            $this->birthDate = $birthDate;
            $this->address = $address;
            $this->email = $email;
            $this->telephoneNumber;
            $this->country = $country;
        }

        //Effettuare controllo su nome, cognome e username
            //Non numerici
            //Almeno tre caratteri
        public function getUserInfo($name, $surname, $username){
            if(
                strlen($nome) >= 3 && !is_numeric($name)
                && strlen($surname) >= 3 && !is_numeric($surname)
                && strlen($username)
            ){
                $this->name = $name;
                $this->surname = $surname;
                $this->username = $username;
                return true;
            }
        }

        //Effettuare controllo su email
            //Deve includere tutti i campi per confermare una mail
        public function getUserEmail($email){
            if (filter_var($email, FILTER_VALIDATE_MAIL)){
                $this->$email = $email;
                return true;
            }
        }
    }
?>