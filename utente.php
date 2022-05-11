<?php

    class Cliente {
        public $nome;
        public $cognome;
        public $registrato;
        public $scadenzaCartaCredito;
        public $sconto;


        public function __construct($_nome, $_cognome, $_registrato, $_scadenzaCartaCredito){
            $this -> nome = $_nome;
            $this -> cognome = $_cognome;
            $this -> registrato = $_registrato;
            $this -> scadenzaCartaCredito = $_scadenzaCartaCredito;
        }

        public function sconto( $_registrato ){
            if( $_registrato == "si"){
                $this -> sconto= 20;
            }
        }
        
    }
    
?> 