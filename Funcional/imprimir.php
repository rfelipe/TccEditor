<?php

include '../LogInOut/verifica.php';
require_once '../conecta.inc';
require_once '../Modelos/classCapa.php';
require_once '../Modelos/classResumo.php';
require_once '../Modelos/classCapitulo.php';
require_once '../Funcional/tradutor.php';

$codprojeto = $_GET['id'];

	$selecCapa 		= select('codprojeto',$codprojeto,'capa');
	$selectResumo 	= select('codprojeto',$codprojeto,'resumo');
	$selectAbstract	= select2('codprojeto',$codprojeto,'folharosto',2,'resumo');
	$selectCapitulo	= select('codprojeto',$codprojeto,'capitulo');

	$oCapa 			= new Capa(); 
	$oFolhaRosto	= new resumo();
	$oResumo		= new resumo();
	$oAbstract		= new resumo();
	$oCapitulo		= new Capitulo();


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
		require_once '../Imprimir/Capa.html';
		}

		foreach ($selectResumo as $key => $value) {
			if($value->folharosto==1){
				$oFolhaRosto->set_codResumo($value->codresumo);
				$oFolhaRosto->set_textoResumo($value->textoresumo);
				$oFolhaRosto->set_codProjeto($value->codprojeto);
			}
		require_once '../Imprimir/FolhaRosto.html';
		}

		foreach ($selectResumo as $key => $value) {
			
				$oResumo->set_codResumo($value->codresumo);
				$oResumo->set_textoResumo($value->textoresumo);
				$oResumo->set_objetivo($value->objetivo);
			
		require_once '../Imprimir/ResumoObjetivo.html';
		}

		foreach ($selectAbstract as $key => $value) {
			
				$oAbstract->set_codResumo($value->codresumo);
				$y=TradutorApiGoogle($value->textoresumo);
				$oAbstract->set_textoResumo($y);
				$x=TradutorApiGoogle($value->objetivo);
				$oAbstract->set_objetivo($x);
			
		require_once '../Imprimir/ResumoObjetivoT.html';
		}

		foreach ($selectCapitulo as $key => $value) {
			
				$oCapitulo->set_textoCapitulo($value->textocapitulo);
				$oCapitulo->set_textoDecorra($value->textodecorra);
				$oCapitulo->set_subcod($value->subcod);
				$oCapitulo->set_codRefImagem($value->codrefimagem);

		require_once '../Imprimir/Capitulos.html';
		}

?>
