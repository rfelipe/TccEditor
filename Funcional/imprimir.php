<?php

include '../LogInOut/verifica.php';
require_once '../vendor/autoload.php';
require_once '../conecta.inc';
require_once '../Modelos/classCapa.php';
require_once '../Modelos/classResumo.php';
require_once '../Modelos/classCapitulo.php';
require_once '../Modelos/classReferencia.php';
require_once '../Funcional/tradutor.php';
require_once '../vendor/dompdf/dompdf/Autoload.inc.php';


$codprojeto = $_GET['id'];

	$selecCapa 			= select('codprojeto',$codprojeto,'capa');
	$selectResumo 		= select('codprojeto',$codprojeto,'resumo');
	$selectAbstract		= select2('codprojeto',$codprojeto,'folharosto',2,'resumo');
	$selectCapitulo		= select('codprojeto',$codprojeto,'capitulo');
	$selectReferencia	= select('codprojeto',$codprojeto,'referencia');

	$oCapa 			= new Capa(); 
	$oFolhaRosto	= new resumo();
	$oResumo		= new resumo();
	$oAbstract		= new resumo();
	$oCapitulo		= new Capitulo();
	$oReferencia	= new Referencia();

	$rstCapa = select('codcapa',1,'configcapa');
	foreach ($rstCapa as $key => $value) {
		$codcapa	  	=	$value->codcapa;
		$centralizacao	=  	$value->centralizacao_capa;
		$tamanhoImagY	=	$value->tamanho_img_capa_y;
		$tamanhoimagX	=	$value->tamanho_img_capa_x;
		$paragrafo		=	$value->paragrafo_capa;
		$tamanhoFonte 	=	$value->tamanho_fonte_capa;
		$negrito 		=	$value->Negrito_capa;
		$tituloCaixaAlta   = $value->titulo_caixa_alta;
		}

	$rstFolha = select('codfolha',1,'tamanhofolha');
	foreach($rstFolha as $key => $value){
		// codfolha;
		$fwidth		=	$value->width;
		$fheight	=	$value->height;
		$fMargemR	=	$value->margem_right;
		$fMargemL	=	$value->margem_left;
		$fMargemU	=	$value->margem_up;
		$fMargemD	=	$value->margem_down;
	}

	$rstfolharosto = select('idfolharosto',1,'cssfolhaderosto');
	foreach ($rstfolharosto as $key => $value) {
		$posnome = $value->pos_nome;
		$nomefonte = $value->nome_fonte;
		$Dadoscentralizacao = $value->dados_centralizacao;
		$objetivofonte = $value->objetivo_fonte;
		$objetivobordapos = $value->objetivo_borda_pos;
		$objetivocentralizacao = $value->objetivo_centralizacao;
		$objetivotamanhofonte = $value->objetivo_tamanho_fonte;
		$objetivonegrito = $value->objetivo_negrito;
		$nomeorientadorpos = $value->nome_orientador_pos;
	}
	$rstCapitulo = select('idcapitulos',1,'csscapitulo');
	foreach ($rstCapitulo as $key => $value) {
		$capcentralizado=$value->capcentralizado;
	}


	$css="@page { margin: 0px; } 
			body { margin: 0px; }
			}
			.breack{
	page-break-after: void;
	}
	.folha{
		width: 			". $fwidth."cm;		
		height: 		". $fheight."cm;
	}
	.capa{
		align-items: 	". $centralizacao .";
		text-align: 	". $centralizacao .";
		font-family:	Arial;
	 	font-size: 		". $tamanhoFonte."px;
		font-weight:	". ($negrito  == 1 ? 'bold' : '') .";
	 	text-transform: ". ($tituloCaixaAlta == 0 ? '' : 'Uppercase') .";
	 	margin-top:		". $fMargemU."cm;
	 	margin-right:	". $fMargemR."cm;
	 	margin-bottom:	". $fMargemD."cm;
	 	margin-left:	". $fMargemL."cm;
		}
	.p{
		line-height: 6.65cm ;
		}
	.p0{
		line-height: -3.65cm;
	}
	.abaixolegenda{
		position: relative;
		border: 1px solid black;
		top:1;
	}
	.footer {
    position:absolute;
    bottom:0;
    width:100%;
	}
	.imag{
			width:		". $tamanhoimagX."cm; 
			height:		". $tamanhoImagY."cm;
		}
	.folhaRosto{
		align-items: 	". $centralizacao .";
		text-align: 	". $centralizacao .";
		font-family:	Arial;
		margin-top:		". $fMargemU."cm;
	 	margin-right:	". $fMargemR."cm;
	 	margin-bottom:	". $fMargemD."cm;
	 	margin-left:	". $fMargemL."cm;
	}
	.texto{
		align-items:". $objetivocentralizacao .";
		text-align:". $objetivocentralizacao .";
		font-size:". $objetivotamanhofonte."px;
		margin-left:". $objetivobordapos."cm;
		margin-right:	". $fMargemR."cm;
		font-weight:". ($objetivonegrito  == 1 ? 'bold':'') .";
	}
	.nome, .cidade, .nomeprojeto{
	 	font-size: 		". $tamanhoFonte."px;
	 	text-transform: ". ($tituloCaixaAlta == 0 ? '':'Uppercase') .";
		font-weight:	". ($negrito  == 1 ? 'bold': '') .";
	}
	.nomeR{
	 	font-size: 		". $tamanhoFonte."px;
	 	text-transform: ". ($tituloCaixaAlta == 0 ? '':'Uppercase') .";
		font-weight:	". ($negrito  == 1 ? 'bold': '') .";
	}
	.prosto{
		line-height: 6.50cm;
	}
	.Resumo{
		font-size:". $objetivotamanhofonte ."px;
		font-family:	'Arial';
		margin-top:		". $fMargemU."cm;
	 	margin-right:	". $fMargemR."cm;
	 	margin-bottom:	". $fMargemD."cm;
	 	margin-left:	". $fMargemL."cm;
	}
	.nomeprojeto2{
		align-items: 	". $centralizacao .";
		text-align: 	". $centralizacao .";
	 	font-size: 		". $tamanhoFonte."px;
	 	text-transform: ". ($tituloCaixaAlta == 0 ? '':'Uppercase' ) .";
		font-weight:	". ($negrito  == 1 ? 'bold': '') .";
	}
	.alinhadireita{
		text-align:right;
		margin-bottom:	1.5cm;
	}
	.textoSimples{
		font-size:". $objetivotamanhofonte."px;
	}
	.textoSimplesb{
		font-size:". $objetivotamanhofonte."px;
		font-weight:". ($objetivonegrito  == 1 ? 'bold': '') .";
	}
	.textoCapitulo{
		text-align:". $objetivocentralizacao .";
		font-family:	'Arial';
		font-size:		". $objetivotamanhofonte."px;
		}
	.palavra-Chave{
		align-items:left;
		text-align:left;
		font-size:". $objetivotamanhofonte."px;	
		font-family:	'Arial';
		font-weight:". ($objetivonegrito  == 1 ? 'bold': '') .";
	 	margin-bottom:	". $fMargemD."cm;
	}
	.capitulo{
		text-align:". $objetivocentralizacao .";
		font-family:	'Arial';
	 	font-size: 		". $tamanhoFonte."px;
	 	position: absolute;
	 	margin-top:		". $fMargemU."cm;
	 	margin-right:	". $fMargemR."cm;
	 	margin-bottom:	". $fMargemD."cm;
	 	margin-left:	". $fMargemL."cm;
	}
	.textoCapitulo1{
		text-transform: ". ($tituloCaixaAlta == 0 ? '':'Uppercase') .";
		font-size:		". $objetivotamanhofonte."px;
		font-weight:	". ($negrito  == 1 ? 'bold': '') . " ;
		}
	.textoCapitulo2{
		font-size:		". $objetivotamanhofonte."px ;
		}
	.paragrafo{
		text-indent: 1.5cm ;
	}
	.refencia{
		font-family:	'Arial';
		margin-top:		". $fMargemU."cm;
	 	margin-right:	". $fMargemR."cm;
	 	margin-bottom:	". $fMargemD."cm;
	 	margin-left:	". $fMargemL."cm;
	}
	.justifica{
	align-items:justify;
	text-align:justify;
	font-size:12px;
	}
	.titulo{
	text-transform:Uppercase;
	font-weight:bold;
	}
	.autor{
	text-transform:Uppercase;
	}
	.titulolivro{
	font-weight:bold;
	}"
	;

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

		$html ="<html>
					<head> <title>".$oCapa->get_nomeProjeto()."</title> 
						<style>".$css."</style>
					</head>
						<body>
							<div class='capa'>
										<div>
										<img  class='imag'src='../ImagUp/".$oCapa->get_imgCapa()."'>
										<p class='p'>
										</div>
										<div>
											<span class='unidade'>".$oCapa->get_unidade()."</span>
												<p class='p0'>
											<span class='curso'>".$oCapa->get_curso()."</span>
										</div>
										<p class='p'>
										<span class='nome'>".$oCapa->get_nomePessoa()."</span>
										<p class='p'>
										<span class='nomeprojeto'>".$oCapa->get_nomeProjeto()."</span>
										<div class='footer'>
										<span class='cidade'>". $oCapa->get_cidade() ."
										<div class=''><span class='cidade'>". date ('Y') ."</span></div>
										</div>
									</div>
								</div>									
						</body></hml>";

		foreach ($selectResumo as $key => $value) {
			if($value->folharosto==1){
				$oFolhaRosto->set_codResumo($value->codresumo);
				$oFolhaRosto->set_textoResumo($value->textoresumo);
				$oFolhaRosto->set_codProjeto($value->codprojeto);
		//require_once '../Imprimir/FolhaRosto.html';
			$html .="<body>
					<div>
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
								<div class='footer'>
									<span class='cidade'>". $oCapa->get_cidade() ."
									<div><span class='cidade'>". date ('Y') ."</span></div>
								</div>
							</div>
						</div>
					</body>";
			}
		}

		foreach ($selectResumo as $key => $value) {
			
				$oResumo->set_codResumo($value->codresumo);
				$oResumo->set_textoResumo($value->textoresumo);
				$oResumo->set_objetivo($value->objetivo);
			
		//require_once '../Imprimir/ResumoObjetivo.html';	
		}

		$html .="<body>
				<div>
					<div class='Resumo'>
						<div class='nomeprojeto2'>
							<span >". $oCapa->get_nomeProjeto() ."</span>
						</div>
						<p class='presumo'>
							<div class='alinhadireita'>
								<span class='textoSimplesb'". $oCapa->get_nomePessoa() ."</span>
									<p class='presumo'>
								<span class='textoSimples'>Autor(a)</span>
									<p class='presumo'>
								<span class='textoSimplesb'>Colocar dados do orientador</span>
									<p class='presumo'>
								<span class='textoSimples'>Orientador (a):Prof. ME.</span>
									<p class='presumo'>
								<span class='textoSimples'>meu email </span>
								<p class='presumo'>
							</div>
						<p class='p'>
							<div class='textoCapitulo'>
								<span><b>Resumo:</b>". $oResumo->get_textoResumo() ."</span>
							</div>
						<p class='presumo'>
							<span class='palavra-Chave'>Palavra-Chave:
							". $oResumo->get_objetivo() ."</span>
					</div>
				</div>
				</body>";

		foreach ($selectAbstract as $key => $value) {
			
				$oAbstract->set_codResumo($value->codresumo);
				$y=TradutorApiGoogle($value->textoresumo);
				$oAbstract->set_textoResumo($y);
				$x=TradutorApiGoogle($value->objetivo);
				$oAbstract->set_objetivo($x);
		//require_once '../Imprimir/ResumoObjetivoT.html';
		}
			$html .="<body>
				<div>
				<div class='Resumo'>
					<div class='nomeprojeto2'>
						<span >". $oCapa->get_nomeProjeto()."</span>
					</div>
					<p class='presumo'>
						<div class='alinhadireita'>
							<span class='textoSimplesb'". $oCapa->get_nomePessoa()."</span>
								<p class='presumo'>
							<span class='textoSimples'>Autor(a)</span>
								<p class='presumo'>
							<span class='textoSimplesb'>Colocar dados do orientador</span>
								<p class='presumo'>
							<span class='textoSimples'>Orientador (a):Prof. ME.</span>
								<p class='presumo'>
							<span class='textoSimples'>meu email </span>
							<p class='presumo'>
						</div>
					<p class='p'>
						<div class='textoCapitulo'>
							<span><b>Abstract:</b>". $oAbstract->get_textoResumo()."</span>
						</div>
					<p class='presumo'>
						<span class='palavra-Chave'>KeyWords:
						". $oAbstract->get_objetivo()."</span>
				</div>
			</div>
			</body>";

		foreach ($selectCapitulo as $key => $value) {
			
				$oCapitulo->set_textoCapitulo($value->textocapitulo);
				$oCapitulo->set_textoDecorra($value->textodecorra);
				$oCapitulo->set_subcod($value->subcod);
				if($value->codrefimagem != null){
					$NtemImag=$value->codrefimagem;
				}else{
					$NtemImag='pixel.jpg';
				}
				$oCapitulo->set_codRefImagem($NtemImag);

		//require_once '../Imprimir/Capitulos.html';

					$html .="<body>
					<div class='capitulo'>
						<div class='textoCapitulo1'>
						<span class=''>".$oCapitulo->get_textoCapitulo()."
						</span>
					</div>
							<p class='espaco'>
							<div class='paragrafo'>
								<span class='textoCapitulo2'>".$oCapitulo->get_textoDecorra()."
								</span>
							</div>
								<p class='espaco'>
							<div class='paragrafo'>
								<span class='textoImagem'>".$oCapitulo->get_subcod()."</span>
								<img  class='' src='../ImagUp/".$oCapitulo->get_codRefImagem()."'>
							</div>
					</div>
				</div>
				</body>";				
		}



			$html.="<body>
						<div class=''>
							<div class='refencia'>
								<div>
								<center><span class='titulo'>REFERÊNCIAS BIBLIOGRÁFICA</center></span>
								<p>
								<div class='justifica'>";
		foreach ($selectReferencia as $key => $value) {
				     $oReferencia->set_autor($value->autor); 
				     $oReferencia->set_titulo($value->titulo); 
				     $oReferencia->set_endereco($value->endereco);
				     $oReferencia->set_acessado($value->acessado);
				    //require_once '../Imprimir/Referencia.html';

			$html.="
									
									<span class='autor'>". $oReferencia->get_autor() .".</span>
									<span class='titulolivro'>". $oReferencia->get_titulo() .".</span>
									<span class='site'> ". $oReferencia->get_endereco() .".</span>
									<span class='acesso'>". $oReferencia->get_acessado() .".</span>
									<p>
									";
		}

			$html.="</div>
						</div>	
						</div>
						</div></body>";

use Dompdf\Dompdf;
$dompdf = new Dompdf();
$dompdf->loadHtml($html);
// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');
// Render the HTML as PDF
$dompdf->render();
// Output the generated PDF to Browser
$dompdf->stream();
?>