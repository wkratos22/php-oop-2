<?php
    require __DIR__ . './traits/traitsGiochi.php';

class Giochi extends Prodotto{

    use Games;

    public function __construct( $_name, $_description, $_price, $_dimensione){
        parent::__construct( $_name, $_description, $_price );
        $this -> setDescription( $_dimensione );
        $this -> setName($name);
    }

    //setter
    public function setDimensione($_dimensione){
        $this -> dimensione = $_dimensione;
    }

    public function setColore($_colore){
        $this -> colore = $_colore;
    }

    //getter
    public function getDimensione(){
        return $this -> dimensione;
    }

    public function getColore(){
        return $this -> colore;
    }
}

?>