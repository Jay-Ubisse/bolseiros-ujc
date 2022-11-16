<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver bolseiro</title>
    <link rel="stylesheet" href="./../../assets/styles/output.css">
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

    <main class="clear-right flex flex-col">
        <div class="flex justify-center mt-8 mx-10 ml-80">
            <input type="text" placeholder="Bolseiro completo" class=" bg-gray-300 w-56 placeholder:text-black text-left p-2 px-4">
            <button class="bg-[#044865] text-center text-white w-32 ml-2 font-medium"> Pesquisar</button>
        </div>

        <div>
            <table class=" table-auto flex justify-center mt-32">

                <tbody class="flex flex-col">
                    <tr class=" border-b-2 border-white">
                        <td>
                            <div class="w-10 h-10 bg-[#F2F4F9] text-center text-lg mr-1">1</div>

                        </td>
                        <td>
                            <div class="bg-[#F2F4F9] text-lg w-96 h-10 px-4 py-1"> Gedia Genifa Lucas Jangamo</div>

                        </td>
                        <td>
                            <div class="ml-1 text-lg ">
                                <a href="../perfil/" class="bg-[#044865] text-white mr-0 py-2 px-4 font-medium">Ver perfil</a>
                                <a href="#" class="bg-[#044865] text-white mr-0 py-2 px-4 font-medium">Actualizar</a>
                               
                            </div>
                        </td>

                    </tr>

                    <tr class="border-b-2 border-white">
                        <td>
                            <div class="w-10 h-10 bg-[#F2F4F9] text-center text-lg mr-1">2</div>

                        </td>
                        <td>
                            <div class="bg-[#F2F4F9] text-lg w-96 h-10 px-4 py-1"> Eufrasia Avelino Marco</div>

                        </td>
                        <td>
                            <div class="ml-1 text-lg">
                                <a href="../perfil/" class="bg-[#044865] text-white mr-0 py-2 px-4 font-medium">Ver perfil</a>
                                <a href="#" class="bg-[#044865] text-white mr-0 py-2 px-4 font-medium">Actualizar</a>
                            </div>
                        </td>

                    </tr>

                    <tr class="">
                        <td>
                            <div class="w-10 h-10 bg-[#F2F4F9] text-center text-lg mr-1">3</div>

                        </td>
                        <td>
                            <div class="bg-[#F2F4F9] text-lg w-96 h-10 px-4 py-1"> Joaquim Ubisse</div>

                        </td>
                        <td>
                            <div class="ml-1 text-lg">
                                <a href="../perfil/" class="bg-[#044865] text-white mr-0 py-2 px-4 font-medium">Ver perfil</a>
                                <a href="#" class="bg-[#044865] text-white mr-0 py-2 px-4 font-medium">Actualizar</a>
                              
                            </div>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>