<?php
    class Product{
        public $name;
        public $price;
        public $description;
        public $quantity;

        public function __construct($name, $price, $type){
            $this->name = $name;
            $this->price = $price;
            $this->type = $type;
        }

        public function getInfo(){
            return $this->type.''.'name'.''.$this->name;
        }
    }
?>