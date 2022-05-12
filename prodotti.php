<?php
    
    require __DIR__ . './traits/traitsProdotti.php';

    class prodotto{

        use Product;

        //constructor
        public function __construct( $_name, $_description, $_price ){
            $this -> setName( $_name );
            $this -> setDescription( $_description );
            $this -> setName( $_price );
        }

        //setter
        public function setName($_name){
            $this -> name = $_name;
        }

        public function setDescription($_description){
            $this -> description = $_description;
        }

        public function setPrice($_price){
            $this -> price = $_price;
        }

        //getter
        public function getName(){
            return $this -> name;
        }

        public function getDescription(){
            return $this -> description;
        }

        public function getPrice(){
            return $this -> price;
        }

    }

?> 