<?php
require_once '../Funcional/setUsuario.php';

?>

<!DOCTYPE html>
<html>
<head> <include >
</head>
	<body>
		<hr>
		<h1>::Capa do Projeto::</h1>
			<form method='POST' action='formCapaSave.php' enctype="multipart/form-data">

				<label> Imagem logo da faculdade:
					<input type="file" name="capaImagem" accept="image/*">
				</label>
			<p>
				

				<label> unidade:
					<input type="texto" name="capaUnidade">
				</label>
			<p>	
				<label> Faculdade:
					<input type="texto" name="capaFaculdade">
				</label>
			<p>

				<label> Curso:
					<input type="texto" name="capaCurso">
				</label>
			<p>

				<label> Nome: <?php echo $oPessoa->get_nomePessoa();?>
					<input type="texto" name="capaNome">
				</label>
			<p>
				<label> Nome do Projeto:
					<input type="text" name="nomeProjeto">
				</label>
			<p>

				<label> Cidade:
					<input type="text" name="cidade">
				</label>
			<p>

				<label> Ano:
					<time><?php echo date ( 'Y'); ?></time> 
				</label>
			<p>
			<input type="submit" value="Salvar Capa" action="submit"> 
			
			</form>
	</body>
</hml>