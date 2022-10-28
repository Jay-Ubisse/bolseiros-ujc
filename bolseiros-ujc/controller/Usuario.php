<?php
     class Usuario{

        public function login($utilizador , $senha){
            global $conexao;

            $sql = "SELECT * FROM usuario WHERE utilizador = :utilizador AND senha = :senha";
            $sql = $conexao->prepare($sql); 
            $sql-> bindValue(":utilizador", $utilizador);
            $sql->bindValue(":senha", md5($senha)); 
            $sql->execute();

            if($sql->rowCount() > 0){
                $resultado = $sql ->fetch();

                $_SESSION['id_utilizador'] = $resultado['id'];

                return true;
            } else {
                return false;
            }
        } 
     }

?>