<?php
    require_once "../../../server/connection/connection.php";
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver bolseiro</title>
    <link rel="stylesheet" href="./../../assets/styles/output.css">
</head>

<body class="h-[calc(100vh-80px)] overflow-hidden">
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

    <main class="clear-right flex flex-col h-[calc(100vh-80px)] overflow-scroll">
        <div class="flex justify-center mt-8 mx-10 ml-80">
            <input type="text" placeholder="Nome do Bolseiro" class=" bg-gray-300 w-56 placeholder:text-black text-left p-2 px-4">
            <button class="bg-[#044865] text-center text-white w-32 ml-2 font-medium"> Pesquisar</button>
        </div>

        <!-- <div>
            <table >

                <tbody class="flex flex-col">
                    <tr class=" border-b-2 border-white">
                       
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
        </div> -->

        <div>
            <table class=" table-auto block justify-center mt-32">
                <thead>
                        <tr>
                            <th >Nome</th>
                            <th>Ac&ccedil;&otilde;es</th>
                        </tr>
                </thead>

                <?php 
                        $stmt = $connection->query("SELECT * FROM bolseiro ");
                        $stmt->execute();
                        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);        
                        foreach ($resultado as $bolseiro) {
                ?>
                        
                <tbody>
                    <tr>

                        <td class="bg-[#F2F4F9] text-lg w-96 h-10 px-4 py-1">
                            <?php echo $bolseiro['primeiro_nome'];?> <?php echo $bolseiro['apelido'];?>
                        </td>  

                        <td>
                            <a href="editar.php?id=<?php echo $bolseiro['id'];?>" class="bg-[#044865] text-white mr-0 py-2 px-4 font-medium">Editar</a>
                            <a href="delete.php?id=<?php echo $bolseiro['id'];?>" class="bg-[#044865] text-white mr-0 py-2 px-4 font-medium">Excluir</a>
                        </td>

                    </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
       
    </main>
</body>

</html>