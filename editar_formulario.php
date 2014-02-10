<?php
require_once 'conn.php';

$consulta = mysql_query ( "SELECT * from usuario where usuario_id=" . $_GET['usuario_id']  );

$campo = mysql_fetch_array ( $consulta );
	
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title></title>
</head>
<body>
	<form action="editar_gravar.php" method="post">
		<input type="hidden" name="usuario_id" value="<?=$campo["usuario_id"]?>">
		<label>Código:</label> <?=$campo["usuario_id"]?> <br />
		<label>Nome:</label> <input type="text" name="txt_nome" value="<?=$campo["nome"]?>" /> <br />
		<label>Sobrenome:</label> <input type="text" name="txt_sobrenome" value="<?=$campo["sobrenome"]?>" /> <br />
		<label>Telefone:</label> <input type="text" name="txt_telefone" value="<?=$campo["telefone"]?>" /> <br />
		<label>E-mail:</label> <input type="text" name="txt_email" value="<?=$campo["email"]?>" /> <br />
		<input type="submit" value="Alterar" />		
	</form>
</body>
</html>
