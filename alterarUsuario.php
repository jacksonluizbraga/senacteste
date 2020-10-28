<?php
if (!isset($_GET['codigo']))
heard('locatio: dashboard.php');

require('db/db.php');
$CONN=conexao();
$resultado =mysqli_query($CONN),$sql);
if (!$resultado)
die("Erro: " .mysqli_error($CONN). " <br />");

$codigo =$_GET['codigo'];
$sql
 ="SELECT =FROM usuario WHERE codigo=" .$codigo . ";";
 $resultado =mysqli_query($CONN, $sql);
 if (!$resultado)
 die("Erro: " . mysqli_error($CONN) . "<br />");
 if(mysqli_num_rows($resultado) <=0)
 die("Erro : Codigo nao existende!");
 $linha = mysqli_fetch_assoc($resultado);
 mysqli_close($CONN);
 ?>
 <DOCTYPE html>
 <html lang="pt-br">
 <head>
 <meta charset="UFT-8">
 <meta name="viewport" content=width=device-width,initial-scale=1
 <title>document</title>
 </head>
 <body>
 <h1>Alterar Usuario</h1>

 <formaction="alterar.php" method="POST">
  <input type="hidden" namel="codigo"
   value="<?=$linha['codigo'] ?>" />
   <
  <input type="text" naml="nome"
   value="<?=$linha['codigo'] ?>" />
  <input type="hidden" namel="codigo"
   value="<?=$linha['codigo'] ?>" />
   <input type="hidden" namel="codigo"
















