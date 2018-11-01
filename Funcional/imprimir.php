<?php

require_once '../Modelos/classCapa.php';
require_once '../Modelos/classResumo.php';
require_once '../conecta.inc';
include '../LogInOut/verifica.php';


//select(campo,valor,$tabela);
$codprojeto=$_SESSION['codprojeto'];

	$selecCapa = select('codprojeto',$codprojeto,'capa');
	$oCapa = new Capa(); 

	$selectResumo = select('codprojeto',$codprojeto,'resumo');
	$oFolhaRosto	= new resumo();


	if($selecCapa){
		foreach ($selecCapa as $key => $value) {
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
		require_once '../Imprimir/Capa.html';
	}
	if($selectResumo){
		foreach ($selectResumo as $key => $value) {
			if($value->folharosto=1){
				$oFolhaRosto->set_codResumo($value->codresumo);
				$oFolhaRosto->set_textoResumo($value->textoresumo);
				$oFolhaRosto->set_abstract($value->abstract);
				$oFolhaRosto->set_codProjeto($value->codprojeto);
				$oFolhaRosto->set_folharosto($value->folharosto);
			}
		}
		require_once '../Imprimir/FolhaRosto.html';
	}

?>
