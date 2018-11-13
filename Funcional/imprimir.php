<?php

require_once '../Modelos/classCapa.php';
require_once '../Modelos/classResumo.php';
require_once '../conecta.inc';
include '../LogInOut/verifica.php';
require_once '../Funcional/tradutor.php';

//select(campo,valor,$tabela);
$codprojeto = $_GET['id'];

	$selecCapa = select('codprojeto',$codprojeto,'capa');
	$oCapa = new Capa(); 

	$selectResumo = select('codprojeto',$codprojeto,'resumo');
	$selectAbstract=select2('codprojeto',$codprojeto,'folharosto',2,'resumo');
	$oFolhaRosto	= new resumo();
	$oResumo	= new resumo();
	$oAbstract	= new resumo();

	//if($selecCapa){
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
	//}
	//if($selectResumo){
		foreach ($selectResumo as $key => $value) {
			if($value->folharosto==1){
				$oFolhaRosto->set_codResumo($value->codresumo);
				$oFolhaRosto->set_textoResumo($value->textoresumo);
				$oFolhaRosto->set_codProjeto($value->codprojeto);
				$oFolhaRosto->set_folharosto($value->folharosto);
			}
		}
		require_once '../Imprimir/FolhaRosto.html';
	//}

	//if($selectResumo){
		foreach ($selectResumo as $key => $value) {
			if($value->folharosto==2){
				$oResumo->set_codResumo($value->codresumo);
				$oResumo->set_textoResumo($value->textoresumo);
				$oResumo->set_objetivo($value->objetivo);
				$oResumo->set_codProjeto($value->codprojeto);
				$oResumo->set_folharosto($value->folharosto);
			}
		}
		require_once '../Imprimir/ResumoObjetivo.html';
	//}
	//if($selectResumo){
		foreach ($selectAbstract as $key => $value) {
			if($value->folharosto==2){
				$oAbstract->set_codResumo($value->codresumo);
				$y=TradutorApiGoogle($value->textoresumo);
				$oAbstract->set_textoResumo($y);
				$x=TradutorApiGoogle($value->objetivo);
				$oAbstract->set_objetivo($x);
				$oAbstract->set_codProjeto($value->codprojeto);
				$oAbstract->set_folharosto($value->folharosto);
			}
		require_once '../Imprimir/ResumoObjetivoT.html';
		}

?>
