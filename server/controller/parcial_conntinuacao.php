<?php
    require_once "Bolseiro.php";
    require_once "../connection/connection.php";


    $p = new Bolseiro();
    $m = new Bolseiro();
    $e = new Bolseiro();        

        $bolseiro =($connection->lastInsertId());    

        
  
       
        header("Location: ../../client/pages/ver-bolseiros");
       
?>