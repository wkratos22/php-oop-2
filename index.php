<?php
    include __DIR__ . '/utente.php';
    include __DIR__ . '/prodotti.php';
    include __DIR__ . '/giochi.php';
    
    $palla = new prodotto(  23, 'palla per cani', 'palla' );
    var_dump( $palla );

    $Utente = new Cliente(
        "Mario",
        "Rossi", 
        "si", 
        2025  
    );

    echo "<div style = 'border: 1px solid; width: 200px; text-align: center; display: inline-block'>";
        echo "<h1>" . "Cliente" . "</h1>";
        echo "<p>" . "Nome:" . " " . $Utente -> nome . "</p>";
        echo "<p>" . "Cognome:" . " " . $Utente -> cognome . "</p>";
        echo "<p>" . "Registrato:" . " " . $Utente -> registrato . "</p>";
    echo "</div>";

   
?>