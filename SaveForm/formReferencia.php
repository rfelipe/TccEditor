<?php
include '../LogInOut/verifica.php';
require_once '../conecta.inc';
?>

<!DOCTYPE html>
<html>
<head>
</head>
	<body>
		<h1>::Referencias::</h1>
			<form method='POST' action='formReferenciaSave.php' enctype="multipart/form-data">
				<label> Autor:
					<input type="text" name="autor">
				</label>
			<p>
				<label> Titulo:
					<input type="text" name="titulo">
				</label>
			<p>				
				<label> Endereço:
					<input type="text" name="endereco">
				</label>
			<p>
				<label> Data do acesso:
					<input type="text" name="acessado">
				</label>
			<p>
			<input type="submit" name="ncapitulo" value="Nova Referencia" 	 action="submit"> 
			<input type="submit" name="pular"value="imprimir" 	action="submit">
			</form>
	</body>
</hml>