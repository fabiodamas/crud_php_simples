<?php
require_once 'conn.php';

$usuario_id = $_GET["usuario_id"];

$sql = "delete from usuario where usuario_id= $usuario_id";

mysql_query($sql) or die ( "Erro na exclusão: " . mysql_error () );
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title></title>
</head>
<body>
	<h1>Dados excluídos com sucesso</h1>
	<a href="index.php"> Clique aqui para voltar</a>
</body>
</html>