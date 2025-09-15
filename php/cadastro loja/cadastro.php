<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <title>Document</title>


   <style type="text/css">

 @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700%display=swap');

body{
   margin: 0;
   font-family: 'Noto Sans', sans-serif;
}

body * {
   box-sizing: border-box;
}

.main-login{
   width: 100vw;
   height: 100vh;
   background: rgb(231, 143, 28);
   display: flex;
   justify-content: center;
   align-items: center;
}


.main-login button{
   color: red;
}

.left-login{
   width: 50vw;
   height: 100vh;
   display: flex;
   justify-content: center;
   align-items: center;
   flex-direction: column;
}

.left-login > h1{
   font-size: 3vw;
   color: rgb(255, 217, 3);
   font-family: indie flower, cursive;
}

.left-logim-image{
   width: 35vw;
}

.right-login{
   width: 50vw;
   height: 100vh;
   display: flex;
   justify-content: center;
   align-items: center;
}

.card-login{
   width: 60%;
   display: flex;
   justify-content: center;
   align-items: center;
   flex-direction: column;
   padding: 30px 35px ;
   background: rgb(253, 188, 46);
   border-radius: 20px;
   box-shadow: 0px -10px 40px rgb(253, 188, 46);
}

.card-login > h1 {
   color: rgb(231, 74, 74);
   font-weight: 800;
   margin: 0;
}

.textfield{
   width: 100%;
   display: flex;
   flex-direction: column;
   align-items: flex-start;
   justify-content: center;
   margin: 10px 0px;
}

.textfield > input {
   width: 100%;
   border: nome;
   border-radius: 10px;
   padding: 15px;
   background:  rgb(240, 159, 67);
   color:white;
   font-size: 12pt;
   box-shadow: 0px 10px 40px rgb(241, 154, 83);
   outline: nome;
   box-sizing: border-box;
}

.textfield> label {
   color: rgb(0, 0, 0);
   margin-bottom: 10px;
   font-family: indie flower, cursive; ;
}

.textfield > input::placeholder{
   color: rgb(0, 0, 0);
   font-family: indie flower, cursive;;
} 

.btn-login{
   width: 100%;
   padding: 16px 0px;
   margin: 25px;
   border: nome;
   border-radius: 8px;
   outline: nome;
   text-transform: uppercase;
   font-weight: 800;
   letter-spacing: 3px;
   color: rgb(0, 0, 0);
   background: rgb(243, 73, 43);
   cursor: pointer;
   box-shadow: 0px 10px 40px -12px rgb(255, 2, 2);
}

@media only screen and (max-width: 950px){
   .card-login{
      width: 85%;
   }
}

@media only screen and (max-width: 600px){
   .main-login{
      flex-direction: column;
   }
   .left-login > h1{
      display: nome;
   }
   .left-login{
      width: 100%;
      height: auto;
   }
   .right-login{
      width: 100%;
      height: auto;
   }
   .left-logim-image{
      width: 50vw;
   }
   .card-login{
      width: ;
   }
}
      </style>
</head>
<body>

<div class="main-login">

<?php
   include("banco.php");
   $email = $_POST['email'];
   $nome = $_POST['nome'];
   $senha = $_POST['senha'];
  

   $sql = "INSERT INTO cadastro (`email`, `nome`, `senha`) VALUES ('$email', '$nome', '$senha');";

   mysqli_query($conexao, $sql);
   
   ?>
<center><button class="btn-login" align="center"><a href="login.html"><b>Voltar</b></a></button></center>
</div>
   </body>
</html>