<?php
include '../LogInOut/verifica.php';
?>

<!DOCTYPE html>
<html>
<head> <include >
</head>
	<body>
		<hr>
		<h1>::Novo Projeto::</h1>
			<form method='POST' action='formNovoProjetoSave.php' enctype="multipart/form-data">

				<label> Nome do Projeto:
					<input type="text" name="nomeProjeto">
				</label>

			<input type="submit" value="Salvar Novo Projeto" action="submit"> 
			
			</form>
	</body>
</hml>