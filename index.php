<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/styles/output.css">
</head>
<body>

<div class="flex justify-center ">
        <div class="bg-[#22A5DB] mt-0 w-1/4 h-[calc(100vh)] border-t-2 border-white" id="aside">

                <div class=" flex flex-col justify-center items-center py-6 ">
                    <img src="./assets/img/ujc 1.png" alt="logo " class="h-32">
                    <p class="font-bold text-white mt-3 text-xl">Direc&ccedil;&atilde;o da Aac&ccedil&atilde;o Social</p>
                    <p class="font-bold text-white mt-3 text-xl px-6 text-center">Departamento de Apoio aos Estudantes</p>
                    <p class="font-bold text-white mt-10 text-3xl ">Gest&atilde;o de bolsas</p>
            
                </div>
    
        </div>
       
        <form class="flex flex-col justify-center bg-slate-200 w-2/5 p-28"  action="login.php" method="POST">
          
            <label for="Usuaio" class="font-bold">Utilizador</label>
                <input type="text" name="utilizador" class=" border-black rounded-lg h-12 outline-none w-80 my-5">

                <label for="Senha"class="font-bold">Senha</label>
                <input type="password" name="senha" class=" border-black rounded-lg h-12 w-80  outline-none my-5" >

                <button class="bg-[#22A5DB] rounded-lg h-12 text-white font-bold" name="entrar">Entrar</button>
                <a href="#" class="flex justify-end mt-4 font-bold"><div>Esqueceu senha?</div></a>
            
        </form>
      

       
</div>

</body>
</html>