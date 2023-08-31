<?php
        require_once '../connection/connection.php';

    class Escolar{
        public function cadastrarSituacaoEscolar($medio, $escola, $provincia, $distrito, $id_bolseiro){
            global $connection;

            $stmt = $connection->prepare("INSERT INTO situacao_escolar (ano_conclusao, escola_frequentada, provincia, distrito, id_bolseiro) 
            VALUES(:a, :b, :c, :d, :e);");
            $stmt->bindValue(":a",$medio);
            $stmt->bindValue(":b",$escola);
            $stmt->bindValue(":c",$provincia);
            $stmt->bindValue(":d",$distrito);
            $stmt->bindValue(":e",$id_bolseiro);
            $stmt->execute();
            return true;
            
        }
    }


?>