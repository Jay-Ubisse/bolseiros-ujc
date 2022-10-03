<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver bolseiro</title>
     <!-- <link rel="stylesheet" href="./assets/styles/output.css"> -->
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

    <main class="clear-right">
        <div class="flex justify-end mt-8">
            <input type="text" placeholder="Bolseiro completo" class=" bg-gray-300 w-56 placeholder:text-white text-left p-2 px-4">
            <button class="bg-[#044865] text-center text-white"> Pesquisar</button>
        </div>
    </main>
</body>
</html>