<?php 
    if (isset($_POST['utilizador']) && !empty($_POST['utilizador']) && isset($_POST['senha']) && !empty($_POST['senha'])){
        
        
        require_once './conexao/conexao.php';
        require_once './controller/Usuario.php'; //Importar a classe usuario


        $n = new Usuario(); // instanciar um objecto da classe Usuario
      

        $utilizador = addslashes($_POST['utilizador']);
        $senha = addslashes($_POST['senha']);
      
        if($n->login($utilizador, $senha) == true){
            if(isset($_SESSION['id_utilizador'])){
                header("Location: views/pagina-inicial/index.php");
            }else{
                header("location: index.php");
             }
        } else{
           header("location: index.php");
        }
    
    
    } else{
       header("location: index.php");
    } 

?>