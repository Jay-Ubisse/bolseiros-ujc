<?php
    require_once "Bolseiro.php";
    require_once "escolar.php";
    require_once "familiares.php";
    require_once "../connection/connection.php";


    $b = new Bolseiro();
    $e = new Escolar();
    $f = new Familiares();

        if(isset($_POST['cadastrar'])){

            $curso = addslashes($_POST['curso']);
            $nome_B = addslashes($_POST['nome_B']);
            $segundo_B = addslashes($_POST['segundo_B']); 
            $apelido_B = addslashes($_POST['apelido_B']);
            $data_B = addslashes($_POST['data_B']);
            $bi_B = addslashes($_POST['bi_B']);
            $genero_B = addslashes($_POST['genero_B']);
            $provincia_B = addslashes($_POST['provincia_B']);
            $distrito_B = addslashes($_POST['distrito_B']);
            $contacto1_B = addslashes($_POST['contacto1_B']);
            $contacto2_B = addslashes($_POST['contacto2_B']);
            $orfao_B = addslashes($_POST['orfao_B']);
            $nuit_B = addslashes($_POST['nuit_B']);
            $email_B = addslashes($_POST['email_B']);
            $ingresso_B = addslashes($_POST['ingresso_B']);
            $saida_B = addslashes($_POST['saida_B']);
            $codigo = addslashes($_POST['codigo']);
            $curso = addslashes($_POST['curso']);

            $b->cadastrarBolseiroParcial($curso, $nome_B, $segundo_B, $apelido_B, $data_B, $bi_B, $nuit_B, $genero_B, $orfao_B, $provincia_B, $distrito_B, $contacto1_B, $contacto2_B, $email_B, $ingresso_B, $saida_B, $codigo);        
            
         }

       

        $bolseiro =($connection->lastInsertId());    


        if(isset($_POST_['cadastrar'])){
            $nome_P = addslashes($_POST['nome_P']); 
            $segundo_P = addslashes($_POST['segundo_P']); 
            $apelido_P = addslashes($_POST['apelido_P']); 
            $data_P = addslashes($_POST['data_P']); 
            $profissao_P = addslashes($_POST['profissao_P']); 
            $patronal_P = addslashes($_POST['patronal_P']); 
            $provincia_P = addslashes($_POST['provincia_P']); 
            $distrito_P = addslashes($_POST['distrito_P']); 
            $bairro_P = addslashes($_POST['bairro_P']); 
            $contacto1_P = addslashes($_POST['contacto1_P']); 
            $contacto2_P = addslashes($_POST['contacto2_P']); 
            $id_bolseiro = $bolseiro;
            
            $f->cadastrarPai($nome_P, $segundo_P, $apelido_P, $provincia_P, $distrito_P, $data_P,$contacto1_P, $contacto2_P, $profissao_P, $patronal_P,   $bairro_P, $id_bolseiro);
            
        }

        if(isset($_POST_['cadastrar'])){
            $nome_M = addslashes($_POST['nome_M']); 
            $segundo_M = addslashes($_POST['segundo_M']); 
            $apelido_M = addslashes($_POST['apelido_M']); 
            $data_M = addslashes($_POST['data_M']); 
            $profissao_M = addslashes($_POST['profissao_M']); 
            $patronal_M = addslashes($_POST['patronal_M']); 
            $provincia_M = addslashes($_POST['provincia_M']); 
            $distrito_M = addslashes($_POST['distrito_M']); 
            $bairro_M = addslashes($_POST['bairro_M']); 
            $contacto1_M = addslashes($_POST['contacto1_M']); 
            $contacto2_M = addslashes($_POST['contacto2_M']); 
            $id_bolseiro = $bolseiro;

            $f->cadastrarMae($nome_M, $segundo_M, $apelido_M, $data_M, $profissao_M, $patronal_M, $provincia_M, $distrito_M, $bairro_M, $contacto1_M, $contacto2_M, $id_bolseiro);
            

        }

        if(isset($_POST_['cadastrar'])){
            $nome_E = addslashes($_POST['nome_E']); 
            $segundo_E = addslashes($_POST['segundo_E']); 
            $apelido_E = addslashes($_POST['apelido_E']); 
            $parentesco = addslashes($_POST['parentesco_E']); 
            $bairro_E = addslashes($_POST['bairro_E']); 
            $avenida_E = addslashes($_POST['avenida_E']); 
            $contacto1_E = addslashes($_POST['contacto1_E']); 
            $contacto2_E = addslashes($_POST['contacto2_E']); 
            $id_bolseiro = $bolseiro;

            $f->cadastrarEmergencia($nome_E, $segundo_E, $apelido_E, $parentesco_E, $bairro_E, $avenida_E, $contacto1_E, $contacto2_E, $id_bolseiro);
            
           
        }

        if(isset($_POST['cadastrar'])){
            $medio = addslashes($_POST['medio']);
            $escola = addslashes($_POST['escola']);
            $provincia = addslashes($_POST['provincia']);
            $distrito = addslashes($_POST['distrito']);
            $id_bolseiro = $bolseiro;
            
            $e->cadastrarSituacaoEscolar($medio, $escola, $provincia, $distrito, $id_bolseiro);
            
             
        }
      

     
       

        header("Location: parcial_conntinuacao.php");
       
?>