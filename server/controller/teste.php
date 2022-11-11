<?php
    session_start();
    include_once '/opt/lampp/htdocs/bolseiros-ujc/controller/Bolseiro.php';
    include_once '/opt/lampp/htdocs/bolseiros-ujc/conexao/conexao.php';
    
    $cmd = $conexao->prepare("SELECT * FROM curso");
    $cmd->execute();

    // $result = $cmd->fetchAll();
    $result = $cmd->fetch(PDO::FETCH_ASSOC); //Uma unica linha 

    foreach ($result as $key => $value) {
        echo $key.": ".$value."<br>";
    }
    
       
?>