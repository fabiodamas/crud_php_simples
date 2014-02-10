<?php
require_once 'conn.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title></title>
</head>
<body>


	<table style="border: 1px solid red;" border="1">
		<thead>
			<tr>
				<th>Código</th>
				<th>Nome</th>
				<th>Sobrenome</th>
				<th>Telefone</th>
				<th>E-mail</th>
				<th colspan="2"></th>
			</tr>
		</thead>
		<tbody>
                <?php
                	$consulta = mysql_query ( "SELECT * from usuario" );
                	
                	while ( $campo = mysql_fetch_array ( $consulta ) ) { 
                
				?>
                    <tr>
                    	<td>
                            <?php echo $campo['usuario_id'];  ?>
                        </td>
                        
						<td>
                            <?php echo $campo['nome'];  ?>
                        </td>
						
						<td>
                            <?php echo $campo['sobrenome']; ?>
                        </td>
						
						<td>
                            <?php echo $campo['telefone'];  ?>
                        </td>
						
                        <td>
                            <?php echo $campo['email'];  ?>
                        </td>
						
                        <td> 
                        	<a	href="editar_formulario.php?usuario_id=<?php echo $campo['usuario_id'];  ?>"> Editar </a>
						</td>
						<td>
							<a href="excluir.php?usuario_id=<?php echo $campo['usuario_id'];   ?>"> Excluir </a>
						</td>
					</tr>
					
                <?php } ?>
            </tbody>
	</table>
	<a href="novo_formulario.php"> Novo </a>
	
</body>
</html>
 