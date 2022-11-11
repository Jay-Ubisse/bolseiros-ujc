<?php
    session_start();
     class Usuario{

        public function login($utilizador , $senha){
            global $conexao;

            $sql = "SELECT * FROM usuario WHERE utilizador = :utilizador";
            $sql = $conexao->prepare($sql); 
            $sql-> bindValue(":utilizador", $utilizador);
            $sql->execute();

            if($sql->rowCount() > 0){
                $resultado = $sql->fetch(PDO::FETCH_ASSOC);

                if($resultado["senha"] == md5($senha)) {
                    return true;
                } else {
                    $_SESSION["auth"] = "Senha invalida";
                return false;
                }
                
            } else {
                $_SESSION["auth"] = "Usuario nao encontrado";
                return false;
            }
        } 
     }

?>