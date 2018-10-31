<?php
require_once '../Funcional/setUsuario.php';

?>

<!DOCTYPE html>
<html>
<head> <include >
</head>
	<body>
		<hr>
		<h1>::Novo Capitulo::</h1>
			<form method='POST' action='formCapaSave.php' enctype="multipart/form-data">

				<label> Titulo Capitulo:
					<input type="text" name="titulo">
				</label>
			<p>
				<label> Texto:
					<textarea type="text" name="texto">
				</label>
			<p>
				<label> Imagem:
					<input type="file" name="capituloImagem" accept="image/*">
				</label>
			<input type="submit" value="Salvar Capa" action="submit"> 
			
			</form>
	</body>
</hml>