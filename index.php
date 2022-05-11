<?php

    include __DIR__ . '/utente.php';
    include __DIR__ . '/prodotti.php';
    

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

    $Utente2 = new Cliente( 
        "Marco", 
        "Bianchi", 
        "no", 
        2019 
    );

    echo "<div style = 'border: 1px solid; width: 200px; text-align: center; margin-left:20px; display: inline-block'>";
        echo "<h1>" . "Cliente" . "</h1>";
        echo "<p>" . "Nome:" . " " . $Utente2 -> nome . "</p>";
        echo "<p>" . "Cognome:" . " " . $Utente2 -> cognome . "</p>";
        echo "<p>" . "Registrato:" . " " . $Utente2 -> registrato . "</p>";
    echo "</div>";

   
?>