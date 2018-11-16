<?php

include '../LogInOut/verifica.php';
require_once '../vendor/autoload.php';
require_once '../conecta.inc';
require_once '../Modelos/classCapa.php';
require_once '../Modelos/classResumo.php';
require_once '../Modelos/classCapitulo.php';
require_once '../Funcional/tradutor.php';
require_once '../vendor/dompdf/dompdf/Autoload.inc.php';


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



	$css="<style type='text/css'>
			@page { margin: 0px; } 
			body { margin: 0px; }
			}
			.breack{
				page-break-after: always;}
			.capa{
				align-items: 	center;
				text-align: 	center;
				font-family:	'Arial';
			 	font-size: 		14px;
				font-weight:	bold;
			 	text-transform: Uppercase;
			 	margin-top:		3cm;
			 	margin-right:	2cm;
			 	margin-bottom:	2cm;
			 	margin-left:	3cm;
				}
			.p{
				line-height: 6.65cm ;
				}
			.p0{
				line-height: -7cm;
			}
			.imag{
					width:		15.9cm; 
					height:		2.2cm;
				}
			.folhaRosto{
				align-items: 	center;
				text-align: 	center;
				font-family:	'Arial';
				margin-top:		3cm;
			 	margin-right:	2cm;
			 	margin-left:	3cm;
			 	margin-bottom:	1.5cm;
			}
			.texto{
				align-items:justify;
				text-align:justify;
				font-size:12px;
				margin-left:7.5cm;
				margin-right:	2cm;
				font-weight:bold;
			}
			.nome, .cidade, .nomeprojeto{
			 	font-size: 		14px;
			 	text-transform: Uppercase;
				font-weight:	bold;
			}
			.nomeR{
			 	font-size: 		14px;
			 	text-transform: Uppercase;
				font-weight:	bold;
			}
			.prosto{
				line-height: 5.80cm;
			}
			.Resumo{
				font-size:12px;
				font-family:	'Arial';
				margin-top:		3cm;
			 	margin-right:	2cm;
			 	margin-bottom:	2cm;
			 	margin-left:	3cm;
			}
			.nomeprojeto2{
				align-items: 	center;
				text-align: 	center;
			 	font-size: 		14px;
			 	text-transform: Uppercase;
				font-weight:	bold;
			}
			.alinhadireita{
				text-align:right;
				margin-bottom:	1.5cm;
			}
			.textoSimples{
				font-size:12px;
			}
			.textoSimplesb{
				font-size:12px;
				font-weight:bold;
			}
			.textoCapitulo{
				text-align:justify;
				font-family:	'Arial';
				font-size:		12px;
			 
				}
			.palavra-Chave{
				align-items:left;
				text-align:left;
				font-size:12px;	
				font-family:	'Arial';
				font-weight:bold;
			 	margin-bottom:	2cm;
			}
			.capitulo{
				text-align:justify;
				font-family:	'Arial';
			 	font-size: 		14px;
			 	margin-right:	2cm;
			 	margin-bottom:	2cm;
			 	margin-left:	3cm;
			}
			.textoCapitulo1{
				text-transform: Uppercase;
				font-size:		12px;
				font-weight:	bold;
				}
			.textoCapitulo2{
				font-size:		12px;
				}
			.paragrafo{
				text-indent: 1.5cm;
			}
			.altura{
				
				padding-top: 8.2cm;
			}
			</style>";


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
			$html ="
					<html>
					<head> <title>".$oCapa->get_nomeProjeto()."</title> 
						".$css."
					</head>
						<body>
							<div class='capa'>
										<div>
										<img  class='imag'src='../ImagUp/".$oCapa->get_imgCapa()."'>
										<p class='p'>
										</div>
											<span class='unidade'>".$oCapa->get_unidade()."</span>
												<p class='p0'>
											<span class='curso'>".$oCapa->get_curso()."</span>
										<p class='p'>
										<span class='nome'>".$oCapa->get_nomePessoa()."</span>
										<p class='p'>
										<span class='nomeprojeto'>".$oCapa->get_nomeProjeto()."</span>
										 <div class='p'>
										  <span class='cidade'>".$oCapa->get_cidade()."</span>
										  <p class='p0'>".date('Y')."
										 </div>
								</div>									
						</body>
					</hml>";
		}

		foreach ($selectResumo as $key => $value) {
			if($value->folharosto==1){
				$oFolhaRosto->set_codResumo($value->codresumo);
				$oFolhaRosto->set_textoResumo($value->textoresumo);
				$oFolhaRosto->set_codProjeto($value->codprojeto);
		//require_once '../Imprimir/FolhaRosto.html';
			$html .="<div>
						<div class='folhaRosto'>
								<span class='nomeR'>". $oCapa->get_nomePessoa() ."</span>
							<p class='prosto'>
								<span class='nomeprojeto'>". $oCapa->get_nomeProjeto() ."</span>
							<p class='prosto'>
								<div class='texto'>
									<span>". $oFolhaRosto->get_textoResumo() ."</span>
								</div>
							<p class='prosto'>
								<span class='nome'>colocar dados do orientador</span>
								<p class='prosto'>
								<div class='cidade altura'>
									<span class='cidade'>". $oCapa->get_cidade() ."
									<div><span class='cidade'>". date ('Y') ."</span></div>
								</div>
							</div>
						</div>";
			}
		}

		foreach ($selectResumo as $key => $value) {
			
				$oResumo->set_codResumo($value->codresumo);
				$oResumo->set_textoResumo($value->textoresumo);
				$oResumo->set_objetivo($value->objetivo);
			
		require_once '../Imprimir/ResumoObjetivo.html';
		}

/*			foreach ($selectAbstract as $key => $value) {
			
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
		}*/


use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($html);
// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');
// Render the HTML as PDF
$dompdf->render();
// Output the generated PDF to Browser
$dompdf->stream();



?>