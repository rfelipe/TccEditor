<?php
require_once '../Funcional/setUsuario.php';
require_once '../Modelos/classCapa.php';

	$rst = select('codprojeto',1,'capa');
	$oCapa = new Capa(); 

	foreach ($rst as $key => $value) {
		$oCapa->set_idCapa		 ($value->idcapa);
		$oCapa->set_codProjeto	 ($value->codprojeto);
		$oCapa->set_nomePessoa	 ($value->nomepessoa);
		$oCapa->set_unidade 	 ($value->unidade);
		$oCapa->set_curso 	 	 ($value->curso);
		$oCapa->set_imgCapa		 ($value->imagcapa);
		$oCapa->set_nomeProjeto	 ($value->nomeprojeto);
		$oCapa->set_nomeFaculdade($value->nomefaculdade);
		$oCapa->set_cidade		 ($value->cidade);
	}
?>

<!DOCTYPE html>
<html>
<head> <include >
</head>
	<body>
		<hr>
		<h1>::Resumo Objetivo::</h1>
			<form method='POST' action='formResumoObjetivoSave.php' enctype="multipart/form-data">
				

				<label> Nome do Projeto:
					<span class='nomeprojeto'><?php echo $oCapa->get_nomeProjeto() ?></span>
				</label>
			<p>
				<label> Nome Aluno:
				 <span class='nome'><?php echo $oCapa->get_nomePessoa() ?></span>
				</label>
			<p>	
				<label>Natureza do trabalho:
					<textarea  type="texto" name="natureza">					
					</textarea>
				</label>
			<p>
				<label>Palavra Chave:
					<input type="text" name="objetivo">
				</label>
			<p>
			<input type="submit" value="Salvar Folha Rosto" action="submit"> 
			
			</form>
	</body>
</hml>