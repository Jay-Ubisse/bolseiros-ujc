<?php
require "./assets/scripts/php/conexao_bd/conexao.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/styles/output.css">
</head>

<body>
    <main class="flex justify-center">

        <?php

        if (isset($_POST["usuario"]) || isset($_POST["senha"])) {
            $usuario = $_POST["usuario"];
            $senha = $_POST["senha"];

            $sql = "SELECT * FROM usuario WHERE utilizador = '$usuario'";
            $result = $db_con->query($sql);

            if ($result->rowCount() == 0) {
                echo "<h2>Código de usuário inválido!</h2>\n";
            } else {
                $row = $result->fetch(PDO::FETCH_ASSOC);
                $password = $row["senha"];

                if ($password !== $senha) {
                    echo "<h2>Palavra-passe inválida!</h2>\n";
                } else {
                    $_SESSION["login"] = $row;
                    header("location: ./telas/pagina-inicial");
                }
            }
        }
        ?>

        <div class="bg-[#22A5DB] mt-0 w-1/4 h-[calc(100vh)] border-t-2 border-white" id="aside">

            <div class=" flex flex-col justify-center items-center py-6 ">
                <img src="./assets/img/ujc 1.png" alt="logo " class="h-32">
                <p class="font-bold text-white mt-3 text-xl">Dire&ccedil&atilde;o da ac&ccedil&atilde;o social</p>
                <p class="font-bold text-white mt-3 text-xl px-6 text-center">Departamento de apoio aos estudantes</p>
                <p class="font-bold text-white mt-10 text-3xl ">Gest&atilde;o de bolsas</p>

            </div>

        </div>
        <div class="flex flex-col justify-center bg-slate-200 w-2/5 p-28">
            <form action="./index.php" method="POST">
                <label for="Usuaio" class="font-bold">Usuario</label>
                <input type="text" name="usuario" class=" border-black rounded-lg h-12 outline-none w-80 my-5">

                <label for="Senha" class="font-bold">Senha</label>
                <input type="password" name="senha" class=" border-black rounded-lg h-12 w-80  outline-none my-5">

                <input type="submit" value="Entrar" class="bg-[#22A5DB] rounded-lg h-12 text-white font-bold w-80">
                <a href="#" class="flex justify-end mt-4 font-bold">
                    <div>Esqueceu senha?</div>
                </a>
            </form>
        </div>
    </main>
</body>

</html>