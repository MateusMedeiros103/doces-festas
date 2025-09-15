<?php

session_start();

   //print_r($_REQUEST);
   if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['nome']) && !empty($_POST['senha']))
   {
     
    include_once('banco.php');
    $email  = $_POST['email'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    //print_r('email: ' . $email);
    //print_r('<br>');
    //print_r('senha: ' . $senha);

    $sql = " SELECT * FROM cadastro WHERE email = '$email' and nome = '$nome'and senha = '$senha'";

    $result = $conexao->query($sql);

    //print_r($sql);
    //print_r($result);

    if (mysqli_num_rows($result) < 1) 
    {
      
      unset($_SESSION['email']);
      unset($_SESSION['nome']);
      unset($_SESSION['senha']);
      header('Location: Resultado.html');
    }
    else
    {
      $_SESSION['email'] = $email;
      $_SESSION['nome'] = $nome;
      $_SESSION['senha'] = $senha;
      header('Location: acesso.php');
    }
      
    
   }


?>