<?php 
    require_once '../conexao/conexao.php';
    require_once 'Usuario.php'; //Importar a classe usuario


        $n = new Usuario(); // instanciar um objecto da classe Usuario
      

        $utilizador = addslashes($_POST['utilizador']);
        $senha = addslashes($_POST['senha']);
      
        if($n->login($utilizador, $senha) == true){
            header("Location: ../../client/views/pagina-inicial/");
        } else{
           header("location: ../../");
        }
?>