<?php 
    require_once 'configuracao.php';


try {
    //criação do data source name (dsn)
    $dsn = "mysql:host=" .HOST . ";dbname=" . DBNAME;

    //criação de um objecto PDO com o dsn, nome de usuário e password para a conexão com a BD
    $db_con = new PDO($dsn , USER, PASSWORD);
    
} 
catch (PDOException $m) {
    echo $m->getMessage();    
} 
catch (Exception $m) {
    echo "Erro generico" .$m->getMessage();
    exit();
}

?>