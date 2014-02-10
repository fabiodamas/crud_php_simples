<?php
require_once 'conn.php';

$nome = $_POST["txt_nome"];
$sobrenome = $_POST["txt_sobrenome"];
$telefone = $_POST["txt_telefone"];
$email = $_POST["txt_email"];

$sql = "INSERT INTO usuario (nome, sobrenome, telefone, email) values ('$nome', '$sobrenome', '$telefone', '$email' )" ;

mysql_query($sql) or die ( "Erro na inclusão: " . mysql_error () );
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title></title>
</head>
<body>
	<h1>Dados gravados com sucesso</h1>
	<a href="index.php"> Clique aqui para voltar</a>
</body>
</html>