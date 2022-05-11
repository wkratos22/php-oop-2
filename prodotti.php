<?php

    class giochi {
        public $tipo;
        public $prezzo;
        public $colore;


        public function __construct($_tipo, $_prezzo, $_colore){
            $this -> tipo = $_tipo;
            $this -> prezzo = $_prezzo;
            $this -> colore = $_colore;
        }
    }
    

    class cucce {
        public $prezzo;
        public $colore;


        public function __construct($_prezzo, $_colore){
            $this -> colore = $_colore;
            $this -> prezzo = $_prezzo;
            
        }
    }


    class cibo {
        public $tipo;
        public $peso;
        public $prezzo;


        public function __construct($_tipo, $_peso, $_prezzo){
            $this -> tipo = $_tipo;
            $this -> peso = $_peso;
            $this -> prezzo = $_prezzo;

            
        }
    }

?> 