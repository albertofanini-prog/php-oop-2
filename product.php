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

        // public function getInfo(){
        //     return $this->type.''.'name'.''.$this->name;
        // }
    }
?>