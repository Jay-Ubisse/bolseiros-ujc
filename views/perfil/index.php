<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver dados</title>
    <link rel="stylesheet" href="./../../assets/styles/output.css">
</head>
<body>
<header>
        <?php
            include "../components/header.php";
        ?>
    </header>
    <aside>
        <?php
            include "../components/aside.php";
        ?>
    </aside>

    <main class="clear-right flex flex-col">
        <div class="text-center text-2xl font-bold mt-5 text-[#044865] ">Dados do Bolseiro</div>

        <div class="bg-gray-100 w-[850px] h-[420px] flex justify-center ml-32 mt-3">
                <!-- Carregue aqui os dados do bolseiro -->
        </div>

        <div class="flex justify-evenly mt-5 ml-2">
            <a href="../sansao/index.php" class="bg-[#044865] text-center text-white font-medium py-2 px-4 w-[200px] rounded-lg">Imprimir</a>
        </div>

    </main>
</body>
</html>