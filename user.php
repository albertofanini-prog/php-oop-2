<?php
    class User{
        protected $name;
        protected $surname;
        protected $username;
        protected $birthDate;
        protected $address;
        protected $email;
        protected $telephoneNumber;
        protected $country;
        public $sale = 0;

        // Confermare che tutti i dati siano inseriti
        public function __construct($name, $surname, $username, $birthDate, $address, $email, $telephoneNumber, $country){
            $this->name = $name;
            $this->surname = $surname;
            $this->username = $username;
            $this->birthDate = $birthDate;
            $this->address = $address;
            $this->email = $email;
            $this->telephoneNumber = $telephoneNumber;
            $this->country = $country;
        }

        //Effettuare controllo su nome, cognome e username
            //Non numerici
            //Almeno tre caratteri
        public function getUserInfo($name, $surname, $username){
            if(
                strlen($nome) >= 3 && !is_numeric($name)
                && strlen($surname) >= 3 && !is_numeric($surname)
                && strlen($username) >= 3
            ){
                $this->name = $name;
                $this->surname = $surname;
                $this->username = $username;
                return true;
            }
        }

        //Effettuare controllo su indirizzio
            //Almeno due parole (Via Roma)
            //Almeno un numero (civico)
        public function getUserAddress($address){
            if (str_word_count($address) >= 2 && preg_match('~[0-9]~', $address) = true){
                $this->address = $address;
                return $true;
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

        //Effettuare controllo sul numero di telefono
            //Da 6 a 12 numeri
            //[]quali numeri includere
            //{}quanti numere includere
        public function getPhoneNumber($telephoneNumber){
            if (preg_match('~[0-9]{6-12}~', $telephoneNumber) = true){
                $this->$telephoneNumber = $telephoneNumber;
                return true;
            }
        }

        //Effettuare controllo su country
            //Due lettere. ES: IT-UK-US
        public function getCountry($country){
            if (str_word_count($country) = 2){
                $this->$country = $country;
                return true;
            }
        }
    }
?>