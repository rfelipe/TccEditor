<?php header("Content-type: text/css");
	require_once '../conecta.inc';

	$rstCapa = select('codcapa',1,'configcapa');
	foreach ($rstCapa as $key => $value) {
		$codcapa	  	=	$value->codcapa;
		$centralizacao	=  	$value->centralizacao_capa;
		$tamanhoImagY	=	$value->tamanho_img_capa_y;
		$tamanhoimagX	=	$value->tamanho_img_capa_x;
		$paragrafo		=	$value->paragrafo_capa;
		//$centralizacao_curso;
		$tamanhoFonte 	=	$value->tamanho_fonte_capa;
		$negrito 		=	$value->Negrito_capa;
		//$subitulominusculo = $value->subtitulo_caixa_baixa;
		$tituloCaixaAlta   = $value->titulo_caixa_alt;
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

?>
	.{
	}

.folha{
	width: 			<?php echo $fwidth.'cm' ?>;		
	height: 		<?php echo $fheight.'cm' ?>;
	border-width:medium;
 	border-style:solid;
 	border-color:black;
}
.capa{
	align-items: 	<?php echo $centralizacao ?>;
	text-align: 	<?php echo $centralizacao ?>;
	font-family:	'Arial';
 	font-size: 		<?php echo $tamanhoFonte.'px' ?>;
	font-weight:	<?php echo ($negrito  == 1) ? 'bold': '' ?>;
 	text-transform: <?php echo ($tituloCaixaAlta == 1) ? '':'Uppercase'?>;
 	margin-top:		<?php echo $fMargemU.'cm' ?>;
 	margin-right:	<?php echo $fMargemR.'cm' ?>;
 	margin-bottom:	<?php echo $fMargemD.'cm' ?>;
 	margin-left:	<?php echo $fMargemL.'cm' ?>;
 	line-height: 3.65cm ;
	}
.imag{
		width:		<?php echo $tamanhoimagX.'cm' ?>; 
		height:		<?php echo $tamanhoImagY.'cm' ?>;
	}
.noprint{
	display:none;
}