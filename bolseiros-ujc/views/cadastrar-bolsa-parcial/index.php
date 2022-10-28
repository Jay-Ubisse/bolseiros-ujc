<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Bolsa parcial - Gestão de Bolseiros</title>
    <link rel="stylesheet" href="./../../assets/styles/output.css">
    <style>
        #aside {
            height: calc(100vh + 90px);
        }
    </style>
</head>

<body>
    <header>
        <?php
        include "../componentes/header.php";
        ?>
    </header>
    <aside>
        <?php
        include "../componentes/aside.php";
        ?>
    </aside>

    
    <main class=" float-right w-4/5 mt-8">
        <h1 class=" w-1/3 m-auto font-semibold mt-10 text-xl">
            Cadastro de Bolsa Parcial
        </h1>
        <br>
        <br>

        <form action="" method="POST" class="w-[93%] ml-24">
            <div>
                <div class="w-24 min-h-24  p-6 text-center bg-gray-300 float-left border-solid border-gray-300 border-2">
                    <h1 class="font-semibold">Foto</h1>
                </div>
                <h2 class=" w-1/3 m-auto font-semibold text-xl">
                    Dados do Bolseiro
                </h2>
            </div>
            <table class="clear-both relative top-4">
                    <tbody>
                        <tr>
                            <td class="p-1" colspan="2">
                                <label for="code" class="font-semibold">Código de estudante</label>
                                <input type="number" name="codigo" maxlength="7" class="bg-gray-300 focus:outline-none rounded-sm" requirede>
                            </td>
                            <td class="p-1">
                                <label for="course" class="font-semibold">Curso</label>
                                <select name="curso" class="bg-gray-300 focus:outline-none w-1/2" requirede>
                                    <option value="ap">Admnistração pública</option>
                                    <option value="rid">Relações Internacionais e Diplomacia</option>
                                    <option value="etsi">Engenharia em Tecnologias e Sistemas de Informação</option>
                                </select>
                            </td>
                        </tr>
                        <tr>   
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Primeiro Nome</label>
                                <input type="text" name="nome_B" class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Segundo Nome</label>
                                <input type="text" name="segundo_B"  class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Apelido</label>
                                <input type="text" name="apelido_B"  class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1">
                                <label for="ate" class="font-semibold">Data de nascimento</label>
                                <input type="date" name="data_B" class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                            <td class="p-1">
                                <label for="id" class="font-semibold">BI</label>
                                <input type="number" name="bi_B" maxlength="13" class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                            <td class="p-1">
                                <label for="course" class="font-semibold">Sexo</label>
                                <select name="genero_B" class="bg-gray-300 focus:outline-none w-1/2" requirede>
                                    <option value="female">F</option>
                                    <option value="male">M</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1">
                                <label for="province" class="font-semibold">Província</label>
                                <input type="text" name="provincia_B" class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                            <td class="p-1">
                                <label for="state" class="font-semibold">Distrito</label>
                                <input type="text" name="distrito_B" class="bg-gray-300 focus:outline-none" requirede>
                            </td>

                        </tr>
                        <tr>
                            <td class="p-1" colspan="3">
                                <label for="contacts" class="font-semibold">Contactos</label>
                                <input type="text"  placeholder="+258" size="4" disabled class="bg-gray-300 focus:outline-none">
                                <input type="text" name="contacto1_B" maxlength="11" size="20" class="bg-gray-300 focus:outline-none" requirede>
                                <input type="text"  placeholder="+258" size="4" disabled class="bg-gray-300 focus:outline-none">
                                <input type="text" name="contacto2_B" maxlength="11" class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="p-1">
                                <label for="email" class="font-semibold">Email</label>
                                <input type="text" name="email_B" size="70" class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1" colspan="3">
                                <label for="entry-year" class="font-semibold">Ano de ingresso</label>
                                <input type="date" name="ingresso_B" class="bg-gray-300 focus:outline-none" requirede>
                                <label for="exit-year" class="font-semibold">Ano de saída</label>
                                <input type="date" name="saida_B" class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                        </tr>
                    </tbody>
            </table>
                <h2 class=" w-1/3 m-auto font-semibold mt-10 text-xl">
                    Dados do Pai
                </h2>
            <table class="relative top-4">
                    <tbody>
                        <tr>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Primeiro Nome</label>
                                <input type="text" name="nome_P" class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Segundo Nome</label>
                                <input type="text" name="segundo_P"  class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Apelido</label>
                                <input type="text" name="apelido_P"  class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="p-1">
                                <label for="province" class="font-semibold">Data Nascimento</label>
                                <input type="date" name="data_P" class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                            <td class="p-1">
                                <label for="state" class="font-semibold">Profissao</label>
                                <input type="text" name="profissao_P" class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                            <td class="p-1">
                                <label for="neighborhood" class="font-semibold">Entidade Patronal</label>
                                <input type="text" name="patronal_P" class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="p-1">
                                <label for="province" class="font-semibold">Província</label>
                                <input type="text" name="provincia_P" class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                            <td class="p-1">
                                <label for="state" class="font-semibold">Distrito</label>
                                <input type="text" name="distrito_P" class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                            <td class="p-1">
                                <label for="neighborhood" class="font-semibold">Bairro</label>
                                <input type="text" name="bairro_P" class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1" colspan="3">
                                <label for="contacts" class="font-semibold">Contactos</label>
                                <input type="text" name="contacts" placeholder="+258" size="4" disabled class="bg-gray-300 focus:outline-none">
                                <input type="number" name="contacto1_P" maxlength="11" size="20" class="bg-gray-300 focus:outline-none" requirede>
                                <input type="text" name="contacts" placeholder="+258" size="4" disabled class="bg-gray-300 focus:outline-none">
                                <input type="number" name="contacto2_P" maxlength="11" class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                        </tr>
                       
                    </tbody>
            </table>


                <h2 class=" w-1/3 m-auto font-semibold mt-10 text-xl">
                    Dados da M&atilde;e
                </h2>
            <table class="relative top-4">
                    <tbody>
                        <tr>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Primeiro Nome</label>
                                <input type="text" name="nome_M" class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Segundo Nome</label>
                                <input type="text" name="segundo_M"  class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Apelido</label>
                                <input type="text" name="apelido_M"  class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1">
                                <label for="province" class="font-semibold">Data Nascimento</label>
                                <input type="date" name="data_mae" class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                            <td class="p-1">
                                <label for="state" class="font-semibold">Profissao</label>
                                <input type="text" name="profissao_M" class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                            <td class="p-1">
                                <label for="neighborhood" class="font-semibold">Entidade Patronal</label>
                                <input type="text" name="patronal_M" class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1">
                                <label for="province" class="font-semibold">Província</label>
                                <input type="text" name="provincia_M" class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                            <td class="p-1">
                                <label for="state" class="font-semibold">Distrito</label>
                                <input type="text" name="distrito_M" class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                            <td class="p-1">
                                <label for="neighborhood" class="font-semibold">Bairro</label>
                                <input type="text" name="bairro_M" class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1" colspan="3">
                                <label for="contacts" class="font-semibold">Contactos</label>
                                <input type="text" name="contacts" placeholder="+258" size="4" disabled class="bg-gray-300 focus:outline-none">
                                <input type="number" name="contacto1_M" maxlength="11" size="20" class="bg-gray-300 focus:outline-none" requirede>
                                <input type="text" name="contacts" placeholder="+258" size="4" disabled class="bg-gray-300 focus:outline-none">
                                <input type="number" name="contacto2_M" maxlength="11" class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                        </tr>
                        
                    </tbody>
            </table>
                <h2 class=" w-1/3 m-auto font-semibold mt-10 text-xl">
                    Contacto de Emergencia
                </h2>
             <table class="relative top-4">
                    <tbody>
                        <tr>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Primeiro Nome</label>
                                <input type="text" name="nome_E" class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Segundo Nome</label>
                                <input type="text" name="segundo_E"  class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Apelido</label>
                                <input type="text" name="apelido_E"  class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1">
                                <label for="province" class="font-semibold">Grau de parentesco</label>
                                <input type="text" name="parentesco_E" class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                            <td class="p-1">
                                <label for="state" class="font-semibold">Bairro</label>
                                <input type="text" name="bairro_E" class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                            <td class="p-1">
                                <label for="neighborhood" class="font-semibold">Avenida</label>
                                <input type="text" name="avenida_E" class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1" colspan="3">
                                <label for="contacts" class="font-semibold">Contactos</label>
                                <input type="text" name="contacts" placeholder="+258" size="4" disabled class="bg-gray-300 focus:outline-none">
                                <input type="number" name="contacto1_E" maxlength="11" size="20" class="bg-gray-300 focus:outline-none" requirede>
                                <input type="text" name="contacts" placeholder="+258" size="4" disabled class="bg-gray-300 focus:outline-none">
                                <input type="number" name="contacto2_E" maxlength="11" class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                        </tr>  
                    </tbody>    
            </table> 
                <h2 class=" w-1/3 m-auto font-semibold mt-10 text-xl">
                    Situacao Escolar
                </h2>
            <table class="relative top-4">
                    <tbody>   
                    <tr>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Ano de conclusao do nivel medio</label>
                                <input type="date" name="medio" size="10" class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                    </tr>
                    <tr>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Escola</label>
                                <input type="text" name="escola" size="50" class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                    </tr>
                    <tr>                    
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Provincia</label>
                                <input type="text" name="provincia" class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                            <td  class="p-1">
                                <label for="name" class="font-semibold">Distrito</label>
                                <input type="text" name="distrito" class="bg-gray-300 focus:outline-none" requirede>
                            </td>
                            <td></td>
                    </tr>   

                        <tr>
                            <td>
                            </td>
                            <td>
                            </td>
                            <td class="flex justify-end" class="p-3">
                                <input type="submit" value="Cadastrar" name="cadastrar" class="bg-[#044865] text-center text-white font-medium py-2 px-4 w-[200px] rounded-lg">
                            </td>
                        </tr>
                    </tr>
                </tbody>
            </table>
            <input type="submit" value="guardar" name="guardar">
        </form>
    </main>
</body>

</html>


<?php
    // session_start();
    
    require_once '/opt/lampp/htdocs/bolseiros-ujc/conexao/conexao.php';
    require_once '/opt/lampp/htdocs/bolseiros-ujc/controller/Bolseiro.php';


    $b = new Bolseiro();
    $p = new Bolseiro();
    $m = new Bolseiro();
    $e = new Bolseiro();
    $s = new Bolseiro();




    if(isset($_POST['cadastrar'])){


        if(isset($_POST['nome_B'])){
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
            $email_B = addslashes($_POST['email_B']);
            $ingresso_B = addslashes($_POST['ingresso_B']);
            $saida_B = addslashes($_POST['saida_B']);
            $codigo = addslashes($_POST['codigo']);

            if(!empty($curso) && !empty($nome_B) && !empty($segundo_B) && !empty($apelido_B) && !empty($data_B) && !empty($bi_B) && !empty($genero_B) && !empty($provincia_B) && !empty($distrito_B) && !empty($contacto1_B) && !empty($contacto2_B) && !empty($email_B) && !empty($ingresso_B) && !empty($saida_B) && !empty($codigo)){
                $b->cadastrarBolseiroParcial($curso, $nome_B, $segundo_B, $apelido_B, $data_B, $bi_B, $genero_B, $provincia_B, $distrito_B, $contacto1_B, $contacto2_B, $email_B, $ingresso_B, $saida_B, $codigo);
            }
        }

        

        if(isset($_POST_['nome_P'])){
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
            
            if(!empty($nome_P) && !empty($segundo_P) && !empty($apelido_P) && !empty($data_P) && !empty($profissao_P) && !empty($patronal_P) && !empty($provincia_P) && !empty($distrito_P) && !empty($bairro_P) && !empty($contacto1_P) && !empty($contacto2_P)){
                $p->cadastrarPai($nome_P, $segundo_P, $apelido_P, $data_P, $profissao_P, $patronal_P, $provincia_P, $distrito_P, $bairro_P, $contacto1_P, $contacto2_P, $id_bolseiro);
            }

        }

        if(isset($_POST_['nome_M'])){
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
            
            if(!empty($nome_M) && !empty($segundo_M) && !empty($apelido_M) && !empty($data_M) && !empty($profissao_M) && !empty($patronal_M) && !empty($provincia_M) && !empty($distrito_M) && !empty($bairro_M) && !empty($contacto1_M) && !empty($contacto2_M)){
                $m->cadastrarPai($nome_M, $segundo_M, $apelido_M, $data_M, $profissao_M, $patronal_M, $provincia_M, $distrito_M, $bairro_M, $contacto1_M, $contacto2_M, $id_bolseiro);
            }

        }

        if(isset($_POST_['nome_E'])){
            $nome_E = addslashes($_POST['nome_E']); 
            $segundo_E = addslashes($_POST['segundo_E']); 
            $apelido_E = addslashes($_POST['apelido_E']); 
            $parentesco = addslashes($_POST['parentesco_E']); 
            $bairro_E = addslashes($_POST['bairro_E']); 
            $avenida_E = addslashes($_POST['avenida_E']); 
            $contacto1_E = addslashes($_POST['contacto1_E']); 
            $contacto2_E = addslashes($_POST['contacto2_E']); 
            
            if(!empty($nome_E) && !empty($segundo_E) && !empty($apelido_E) && !empty($parentesco_E) && !empty($bairro_E) && !empty($avenida_E) && !empty($contacto1_E) && !empty($contacto2_E)){
                $e->cadastrarCEmergencia($nome_E, $segundo_E, $apelido_E, $parentesco_E, $bairro_E, $avenida_E, $contacto1_E, $contacto2_E, $id_bolseiro);
            }

        }

        if(isset($_POST['medio'])){
            $medio = addslashes($_POST['medio']);
            $escola = addslashes($_POST['escola']);
            $provinicia = addslashes($_POST['provincia']);
            $distrito = addslashes($_POST['distrito']);
            if(!empty($medio) && !empty($escola) && !empty($provincia) && !empty($distrito)){
                $s->cadastrarSituacaoEscolar($medio, $escola, $provincia, $distrito, $id_bolseiro);
            }
        }
    }    

?>