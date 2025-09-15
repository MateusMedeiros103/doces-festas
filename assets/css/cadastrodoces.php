<?php
   include("banco.php");
   $ID = $_POST ['ID'];
   $nome = $_POST ['nome'];
  

   $sql = "INSERT INTO doces (`ID`, `nome`) VALUES ('$ID', '$nome');";

   mysqli_query($conexao, $sql);
   
   ?>
<center>
    <button  class="btn-login" align="center"><a href="login.php"><b>Voltar</b></a></button></center>
</div>
   </body>
</html>