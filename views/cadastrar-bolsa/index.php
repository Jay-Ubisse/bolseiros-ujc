<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar - Gestão de Bolseiros</title>
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
        include "../components/header.php";
        ?>
    </header>
    <aside>
        <?php
        include "../components/aside.php";
        ?>
    </aside>
    <main class=" float-right w-4/5 mt-8">

        <form action="" method="POST" class="w-[93%] ml-24">
            <div>
                <div class="w-24 min-h-24  p-6 text-center bg-gray-300 float-left border-solid border-gray-300 border-2">
                    <h1 class="font-semibold">Foto</h1>
                </div>
                <h1 class=" w-1/3 m-auto font-semibold text-xl">
                    Dados pessoais
                </h1>
            </div>
            <table class="clear-both relative top-4">
                <tbody>
                    <tr>
                        <td class="p-1" colspan="2">
                            <label for="code" class="font-semibold">Código de estudante</label>
                            <input type="number" name="code" class="bg-gray-300 focus:outline-none">
                        </td>
                        <td class="p-1">
                            <label for="course" class="font-semibold">Curso</label>
                            <select name="course" class="bg-gray-300 focus:outline-none w-1/2">
                                <option value="ap">Admnistração pública</option>
                                <option value="rid">Relações Internacionais e Diplomacia</option>
                                <option value="esti">Engenharia em Tecnologias e Sistemas de Informação</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" class="p-1">
                            <label for="name" class="font-semibold">Nome completo</label>
                            <input type="text" name="name" size="88" class="bg-gray-300 focus:outline-none">
                        </td>
                    </tr>
                    <tr>
                        <td class="p-1">
                            <label for="ate" class="font-semibold">Data de nascimento</label>
                            <input type="date" name="date" class="bg-gray-300 focus:outline-none">
                        </td>
                        <td class="p-1">
                            <label for="id" class="font-semibold">BI</label>
                            <input type="number" name="id" class="bg-gray-300 focus:outline-none">
                        </td>
                        <td class="p-1">
                            <label for="course" class="font-semibold">Sexo</label>
                            <select name="course" class="bg-gray-300 focus:outline-none w-1/2">
                                <option value="female">Feminino</option>
                                <option value="male">Masculino</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-1">
                            <label for="province" class="font-semibold">Província</label>
                            <input type="text" name="province" class="bg-gray-300 focus:outline-none">
                        </td>
                        <td class="p-1">
                            <label for="state" class="font-semibold">Distrito</label>
                            <input type="text" name="state" class="bg-gray-300 focus:outline-none">
                        </td>
                    </tr>
                    <tr>
                        <td class="p-1" colspan="3">
                            <label for="contacts" class="font-semibold">Contactos</label>
                            <input type="text" name="contacts" placeholder="+258" size="4" disabled class="bg-gray-300 focus:outline-none">
                            <input type="number" name="contacts" size="20" class="bg-gray-300 focus:outline-none">
                            <input type="text" name="contacts" placeholder="+258" size="4" disabled class="bg-gray-300 focus:outline-none">
                            <input type="number" name="contacts" class="bg-gray-300 focus:outline-none">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" class="p-1">
                            <label for="email" class="font-semibold">Email</label>
                            <input type="text" name="email" size="100" class="bg-gray-300 focus:outline-none">
                        </td>
                    </tr>
                    <tr>
                        <td class="p-1" colspan="3">
                            <label for="entry-year" class="font-semibold">Ano de ingresso</label>
                            <input type="number" name="entry year" class="bg-gray-300 focus:outline-none">
                            <label for="exit-year" class="font-semibold">Ano de saída</label>
                            <input type="number" name="exit-year" class="bg-gray-300 focus:outline-none">
                            <label for="bag-type" class="font-semibold">Tipo de bolsa</label>
                            <select name="bag-type" class="bg-gray-300 focus:outline-none w-[12%]">
                                <option value="full">Completa</option>
                                <option value="partial">Parcial</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h1 class=" w-1/3 m-auto font-semibold mt-10 text-xl">
                Dados do encarregado
            </h1>
            <table class="relative top-4">
                <tbody>
                    <tr>
                        <td colspan="3" class="p-1">
                            <label for="name" class="font-semibold">Nome completo</label>
                            <input type="text" name="name" size="88" class="bg-gray-300 focus:outline-none">
                        </td>
                    </tr>
                    <tr>
                        <td class="p-1">
                            <label for="course" class="font-semibold">Sexo</label>
                            <select name="course" class="bg-gray-300 focus:outline-none w-1/2">
                                <option value="female">Feminino</option>
                                <option value="male">Masculino</option>
                            </select>
                        </td>
                        <td class="p-1">
                            <label for="neighborhood" class="font-semibold">Bairo</label>
                            <input type="text" name="neighborhood" class="bg-gray-300 focus:outline-none">
                        </td>
                    </tr>
                    <tr>
                        <td class="p-1">
                            <label for="province" class="font-semibold">Província</label>
                            <input type="text" name="province" class="bg-gray-300 focus:outline-none">
                        </td>
                        <td class="p-1">
                            <label for="state" class="font-semibold">Distrito</label>
                            <input type="text" name="state" class="bg-gray-300 focus:outline-none">
                        </td>
                    </tr>
                    <tr>
                        <td class="p-1" colspan="3">
                            <label for="contacts" class="font-semibold">Contactos</label>
                            <input type="text" name="contacts" placeholder="+258" size="4" disabled class="bg-gray-300 focus:outline-none">
                            <input type="number" name="contacts" size="20" class="bg-gray-300 focus:outline-none">
                            <input type="text" name="contacts" placeholder="+258" disabled class="bg-gray-300 focus:outline-none">
                            <input type="number" name="contacts" class="bg-gray-300 focus:outline-none">
                        </td>
                    </tr>
                </tbody>
            </table>
            <h1 class=" w-1/3 m-auto font-semibold mt-10 text-xl">
                Contacto opcional
            </h1>
            <table class="relative top-4">
                <tbody>
                    <tr>
                        <td class="p-1">
                            <label for="name" class="font-semibold">Nome</label>
                            <input type="text" name="name" size="60" class="bg-gray-300 focus:outline-none">
                        </td>
                        <td class="p-1">
                            <label for="contacts" class="font-semibold">Contacto</label>
                            <input type="text" name="contacts" placeholder="+258" size="4" disabled class="bg-gray-300 focus:outline-none">
                            <input type="number" name="contacts" class="bg-gray-300 focus:outline-none">
                        </td>
                        <tr>
                            <td>
                            </td>
                            <td class="flex justify-end" class="p-3">
                                <input type="submit" value="Cadastrar" class="bg-[#044865] text-center text-white font-medium py-2 px-4 w-[200px] rounded-lg">
                            </td>
                        </tr>
                    </tr>
                </tbody>
            </table>
        </form>
    </main>
</body>

</html>