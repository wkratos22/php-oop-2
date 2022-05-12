<?php
    require __DIR__ . './traits/traitsUtente.php';

    
    class Cliente {
        
        use Client;

        public function __construct($_nome, $_cognome, $_registrato, $_scadenzaCartaCredito){
            $this -> setNome ($_nome);
            $this -> setCognome ($_cognome);
            $this -> setRegistrato ($_registrato);
            $this -> setScadenzaCartaCredito ($_scadenzaCartaCredito);
        }

        //setter
        public function setNome($_nome){
            $this -> nome = $_nome;
        }

        public function setCognome($_cognome){
            $this -> cognome = $_cognome;
        }

        public function setRegistrato($_registrato){
            $this -> registrato = $_registrato;
        }

        public function setScadenzaCartaCredito($_scadenzaCartaCredito){
            $this -> scadenzaCartaCredito = $_scadenzaCartaCredito;
        }


        //getter
        public function getNome(){
            return $this -> nome;
        }

        public function getCognome(){
            return $this -> cognome;
        }

        public function getRegistrato(){
            return $this -> Registrato;
        }

        public function getScadenzaCartaCredito(){
            return $this -> scadenzaCartaCredito;
        }


        public function sconto( $_registrato ){
            if( $_registrato == "si"){
                $this -> sconto= 20;
            }
        }
        
    }
    
?> 