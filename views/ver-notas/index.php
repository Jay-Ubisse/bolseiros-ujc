<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver notas</title>
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

    <main class="clear-right flex flex-col justify-center">
        
        <div class="flex justify-start ml-28 mt-8"> 

            <p class="font-bold">XXXXX-</p>
            <p>Gedia Genifa Lucas Jangamo</p>

        </div>

           <div class="flex ml-28 mt-14 ">

               <div class="mr-16">
                    <label class="font-bold text-lg mr-2">Ano</label>
                    <select name="ano" class="bg-[#F2F4F9] w-24 h-8">">
                        <option value="ano">2020</option>
                        <option value="ano">2021</option>
                        <option value="ano">2022</option>
                        <option value="ano">2023</option>

                    </select>
               </div>

               <div>
                    <label class="font-bold text-lg mr-2">Semestre</label>
                    <select name="semestre" class="bg-[#F2F4F9] w-24 h-8 text-center">">
                        <option value="semestre">1</option>
                        <option value="semestre">2</option>
                    </select>
               </div>
           </div>
        
        </div>
        
        <div class="flex justify-start ml-28 mt-14">
            <div class="flex flex-col">
                <label class="font-bold text-lg text-left py-3">Cadeiras</label>
                <input type="text" name="cadeira" class="bg-[#F2F4F9] w-96 h-8 text-center mb-2">
                <input type="text" name="cadeira" class="bg-[#F2F4F9] w-96 h-8 text-center mb-2">
                <input type="text" name="cadeira" class="bg-[#F2F4F9] w-96 h-8 text-center mb-2">
                <input type="text" name="cadeira" class="bg-[#F2F4F9] w-96 h-8 text-center mb-2">
                <input type="text" name="cadeira" class="bg-[#F2F4F9] w-96 h-8 text-center mb-2">
                <input type="text" name="cadeira" class="bg-[#F2F4F9] w-96 h-8 text-center mb-2">
                
            </div>

            <div class="flex flex-col ml-8">
                <label class="font-bold text-lg text-left py-3">Notas</label>
                <input type="text" name="nota" class="bg-[#F2F4F9] w-24 h-8 text-center mb-2">
                <input type="text" name="nota" class="bg-[#F2F4F9] w-24 h-8 text-center mb-2">
                <input type="text" name="nota" class="bg-[#F2F4F9] w-24 h-8 text-center mb-2">
                <input type="text" name="nota" class="bg-[#F2F4F9] w-24 h-8 text-center mb-2">
                <input type="text" name="nota" class="bg-[#F2F4F9] w-24 h-8 text-center mb-2">
                <input type="text" name="nota" class="bg-[#F2F4F9] w-24 h-8 text-center mb-2">
            </div>
        </div>

        <div class="flex justify-center">
             <button class="bg-[#044865] text-white py-2 px-4 w-[150px] rounded-lg font-medium mt-5">Guardar</button>
        </div>
       
    </main>
</body>
</html>