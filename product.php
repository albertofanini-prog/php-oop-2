<?php
    class Product{
        public $brand;
        public $name;
        public $price;
        public $description;
        public $quantity;

        public function __construct($brand, $name, $price, $description, $quantity){
            $this->brand = $brand;
            $this->name = $name;
            $this->price = $price;
            $this->description = $description;
            $this->quantity = $quantity;
        }

        //Controllo su nome prodotto
        public function getName($name){
            if(strlen($name) >= 4 && !isnumeric($name){
                $this->name = $name;
                return true;
            } else{
                return false;
            }
            )
        }
    }
?>