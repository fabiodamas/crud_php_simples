<?php
require_once 'conn.php';

$usuario_id = $_POST["usuario_id"];
$nome = $_POST["txt_nome"];
$sobrenome = $_POST["txt_sobrenome"];
$telefone = $_POST["txt_telefone"];
$email = $_POST["txt_email"];

$sql = "update usuario set nome='$nome', sobrenome='$sobrenome', telefone='$telefone', email='$email' where usuario_id= $usuario_id";

mysql_query($sql) or die ( "Erro na alteração: " . mysql_error () );
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title></title>
</head>
<body>
	<h1>Dados alterados com sucesso</h1>
	<a href="index.php"> Clique aqui para voltar</a>
</body>
</html>