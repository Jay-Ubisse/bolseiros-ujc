<?php
        require_once '/opt/lampp/htdocs/bolseiros-ujc/conexao/conexao.php';
       

        class Bolseiro{
       
            public $id_bolseiro;

          

        public function cadastrarBolseiroCompleto($curso, $nome_B, $segundo_B, $apelido_B, $data_B, $bi_B, $nuit_B, $genero_B, $orfao_B, $provincia_B, $distrito_B, $contacto1_B, $contacto2_B, $email_B, $ingresso_B, $codigo){
            global $conexao;
            $stmt = $conexao->prepare("SELECT nome from bolseiro  WHERE b.i = :b AND nuit = :n");
            $stmt->bindValue(":b",$bi_B);
            $stmt->bindValue(":n",$nuit_B);
            $stmt->execute();
            if($stmt->rowCount() > 0){

                return false;
            }else{ // nao cadastrado

                
                $stmt = $conexao->prepare("INSERT INTO bolseiro (primeiro_nome, segundo_nome, apelido, data_nascimento, provincia, distrito, b.i, nuit, sexo, orfao, contacto1, contacto2, ano_ingresso, codigo_estudante, email, id_bolsa, id_curso)
                VALUES (:a, :b, :c, :d, :e, :f, :g, :h, :i, :j, :k, :l, :n, :m, :o, :p, :q)");
                $stmt->bindValue(":a",$nome_B);
                $stmt->bindValue(":b",$segundo_B);
                $stmt->bindValue(":c",$apelido_B);
                $stmt->bindValue(":d",$data_B);
                $stmt->bindValue(":e",$provincia_B);
                $stmt->bindValue(":f",$distrito_B);
                $stmt->bindValue(":g",$bi_B);
                $stmt->bindValue(":h",$nuit_B);
                $stmt->bindValue(":i",$genero_B);
                $stmt->bindValue(":j",$orfao_B);
                $stmt->bindValue(":k",$contacto1_B);
                $stmt->bindValue(":l",$contacto2_B);
                $stmt->bindValue(":n",$ingresso_B);
                $stmt->bindValue(":m",$codigo);
                $stmt->bindValue(":o",$email_B);
                $stmt->bindValue(":p",$curso);
                $stmt->bindValue(":q","1");
                $stmt->execute();
                $id_bolseiro =($conexao->lastInsertId());
                return true;

            }

        }

        
        public function cadastrarBolseiroParcial($curso, $nome_B, $segundo_B, $apelido_B, $data_B, $bi_B, $nuit_B, $genero_B, $orfao_B, $provincia_B, $distrito_B, $contacto1_B, $contacto2_B, $email_B, $ingresso_B, $saida_B, $codigo){
                global $conexao;
            $stmt = $conexao->prepare("SELECT nome from bolseiro  WHERE b.i = :b");
            $stmt->bindValue(":b",$bi_B);
            $stmt->execute();
            if($$stmt->rowCount() > 0){

                return false;
            }else{ // nao cadastrado

                $stmt = $conexao->prepare("INSERT INTO bolseiro (primeiro_nome, segundo_nome, apelido, data_nascimento, provincia, distrito, b.i, nuit, sexo, orfao, contacto1, contacto2, ano_ingresso, codigo_estudante, email, id_bolsa, id_curso)
                VALUES (:a, :b, :c, :d, :e, :f, :g, :h, :i, :j, :k, :l, :n, :m, :o, :p, :q)");
                $stmt->bindValue(":a",$nome_B);
                $stmt->bindValue(":b",$segundo_B);
                $stmt->bindValue(":c",$apelido_B);
                $stmt->bindValue(":d",$data_B);
                $stmt->bindValue(":e",$provincia_B);
                $stmt->bindValue(":f",$distrito_B);
                $stmt->bindValue(":g",$bi_B);
                $stmt->bindValue(":h",$nuit_B);
                $stmt->bindValue(":i",$genero_B);
                $stmt->bindValue(":j",$orfao_B);
                $stmt->bindValue(":k",$contacto1_B);
                $stmt->bindValue(":l",$contacto2_B);
                $stmt->bindValue(":n",$ingresso_B);
                $stmt->bindValue(":m",$codigo);
                $stmt->bindValue(":o",$email_B);
                $stmt->bindValue(":p",$curso);
                $stmt->bindValue(":q","2");
                $stmt->execute();
                $id_bolseiro =($conexao->lastInsertId());
                return true;
            }

        }



        public function cadastrarPai($nome_P, $segundo_P, $apelido_P, $data_P, $profissao_P, $patronal_P, $provincia_P, $distrito_P, $bairro_P, $contacto1_P, $contacto2_P, $id_bolseiro){
            global $conexao;
            $id_bolseiro;
            $stmt = $conexao->prepare("INSERT INTO pai (primeiro_nome, segundo_nome, apelido, provincia, distrito, data_nascimento, contacto1, contacto2, profissao, entidade_patronal, id_bolseiro) 
            VALUES(:a, :b, :c, :d, :e, :f, :g, :h, :i, :j, :k )");

            $stmt->bindValue(":a",$nome_P);
            $stmt->bindValue(":b",$segundo_P);
            $stmt->bindValue(":c",$apelido_P);
            $stmt->bindValue(":d",$data_P);
            $stmt->bindValue(":e",$profissao_P);
            $stmt->bindValue(":f",$patronal_P);
            $stmt->bindValue(":g",$provincia_P);
            $stmt->bindValue(":h",$distrito_P);
            $stmt->bindValue(":i",$bairro_P);
            $stmt->bindValue(":j",$contacto1_P);
            $stmt->bindValue(":k",$contacto2_P);
            $stmt->bindValue(":j",$profissao_P);
            $stmt->bindValue(":k",$patronal_P);
            $stmt->bindValue(":j",$id_bolseiro);          
            $stmt->execute();
            return true;

        }


        public function cadastrarMae($nome_M, $segundo_M, $apelido_M, $data_M, $profissao_M, $patronal_M, $provincia_M, $distrito_M, $bairro_M, $contacto1_M, $contacto2_M, $id_bolseiro){
            global $conexao;
            $id_bolseiro;
            
           $stmt = $conexao->prepare("INSERT INTO mae (primeiro_nome, segundo_nome, apelido, data_nascimento, provincia, distrito, contacto1, contacto2, profissao, entidade_patronal, id_bolseiro) 
            VALUES(:a, :b, :c, :d, :e, :f, :g, :h, :i, :j, :k, :j )");
    
            $stmt->bindValue(":a",$nome_M);
            $stmt->bindValue(":b",$segundo_M);
            $stmt->bindValue(":c",$apelido_M);
            $stmt->bindValue(":d",$data_M);
            $stmt->bindValue(":e",$profissao_M);
            $stmt->bindValue(":f",$patronal_M);
            $stmt->bindValue(":g",$provincia_M);
            $stmt->bindValue(":h",$distrito_M);
            $stmt->bindValue(":i",$bairro_M);
            $stmt->bindValue(":j",$contacto1_M);
            $stmt->bindValue(":k",$contacto2_M);
            $stmt->bindValue(":j",$profissao_M);
            $stmt->bindValue(":k",$patronal_M);
            $stmt->bindValue(":j",$id_bolseiro);          
            $stmt->execute();
            return true;

        }

        public function cadastrarCEmergencia($nome_E, $segundo_E, $apelido_E, $parentesco_E, $bairro_E, $avenida_E, $contacto1_E, $contacto2_E, $id_bolseiro){
            global  $conexao;
            $id_bolseiro;

            $stmt = $conexao->prepare("INSERT INTO contacto_emergencia (primeiro_nome, segundo_nome, apelido, parentesco, contacto1, contacto2, bairro, avenida, id_bolseiro) 
            VALUES(:a, :b, :c, :d, :e, :f, :g, :h, :i) ");

            $stmt->bindValue(":a",$nome_E);
            $stmt->bindValue(":b",$segundo_E);
            $stmt->bindValue(":c",$apelido_E);
            $stmt->bindValue(":d",$parentesco_E);
            $stmt->bindValue(":e",$bairro_E);
            $stmt->bindValue(":f",$avenida_E);
            $stmt->bindValue(":g",$contacto1_E);
            $stmt->bindValue(":h",$contacto2_E);
            $stmt->bindValue(":i",$id_bolseiro);
            $stmt->execute();
            return true;
        }

        public function cadastrarSituacaoEscolar($medio, $escola, $provincia, $distrito, $id_bolseiro){
            global  $conexao;
            $id_bolseiro;
            $stmt = $conexao->prepare("INSERT INTO situacao_escolar (ano_conclusao, escola_frequentada, provincia, distrito, id_bolseiro) 
            VALUES(:a, :b, :c, :d, :e)");
            $stmt->bindValue(":a",$medio);
            $stmt->bindValue(":b",$escola);
            $stmt->bindValue(":c",$provincia);
            $stmt->bindValue(":d",$distrito);
            $stmt->bindValue(":e",$id_bolseiro);
            $stmt->execute();
            return true;
            
        }

        public function cadastrarEstadoSaude($restricao, $doenca ,$observacao, $id_bolseiro){
            global  $conexao;
            $id_bolseiro;
            $stmt = $conexao->prepare("INSERT INTO estado_saude(id_bolseiro, restricao_alimentar, doenca_cronica, observacao)
            VALUES(:a, :b, :c, :d)");
            $stmt->bindValue(":a",$restricao);
            $stmt->bindValue(":b",$doenca);
            $stmt->bindValue(":c",$observacao);
            $stmt->bindValue(":d",$id_bolseiro);
            $stmt->execute();
            return true;
        }

        public function cadastrarAlocacao($andar, $quarto, $id_bolseiro){
            global  $conexao;
            $id_bolseiro;
            $stmt = $conexao->prepare("INSERT INTO alocacao(andar, quarto, id_bolseiro) 
            VALUES(:a, :b, :c)");
            $stmt->bindValue(":a",$andar);
            $stmt->bindValue(":b",$quarto);
            $stmt->bindValue(":c",$id_bolseiro);
            $stmt->execute();

        } 

    
    }

?>