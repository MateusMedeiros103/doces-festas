<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bancoDados = "login";
//conexao com a porta
      $conexao = mysqli_connect($servidor, $usuario, $senha, $bancoDados);
      if(!$conexao){
        echo 'Erro ao conectar.' .die();
      }
      else{
        //echo 'Conexão realizada com sucesso.';
      }
      //mysqli_close($conexao);
?>