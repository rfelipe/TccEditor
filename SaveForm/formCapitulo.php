<?php
include '../LogInOut/verifica.php';
require_once '../conecta.inc';
?>

<!DOCTYPE html>
<html>
<head> <include >
</head>
	<body>
		<h1>::Novo Capitulo::</h1>
			<form method='POST' action='formCapituloSave.php' enctype="multipart/form-data">

				<label> Titulo Capitulo:
					<input type="text" name="titulo">
				</label>
			<p>
				<label> Texto:
					<textarea type="text" name="texto"></textarea>
				</label>
			<p>				
				<label> Descrição imagem:
					<input type="text" name="refimagem">
				</label>
			<p>
				<label> Imagem:
					<input type="file" name="capituloImagem" accept="image/*">
				</label>
			<input type="submit" value="Salvar Capa" action="submit"> 
			
			</form>
	</body>
</hml>