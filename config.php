<?php
 $servidor = "localhost"; // localhost tambem é web
 $dbname = "igw"; // nome do banco
 $dbusuario = "root"; // usuário do banco
 $dbsenha = "Lino"; // senha usuário do banco
 $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
 if (!$conn) {
      die("Conexao falhou: " . mysqli_connect_error());
}
?>