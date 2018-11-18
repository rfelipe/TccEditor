<?php header("Content-type: text/css");
	require_once '../conecta.inc';

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

?>
	.{
	}
.breack{
	page-break-after: void;}

.folha{
	width: 			<?php echo $fwidth.'cm' ?>;		
	height: 		<?php echo $fheight.'cm' ?>;
}
.capa{
	align-items: 	<?php echo $centralizacao ?>;
	text-align: 	<?php echo $centralizacao ?>;
	font-family:	'Arial';
 	font-size: 		<?php echo $tamanhoFonte.'px' ?>;
	font-weight:	<?php echo ($negrito  == 1) ? 'bold': '' ?>;
 	text-transform: <?php echo ($tituloCaixaAlta == 0) ? '':'Uppercase'?>;
 	margin-top:		<?php echo $fMargemU.'cm' ?>;
 	margin-right:	<?php echo $fMargemR.'cm' ?>;
 	margin-bottom:	<?php echo $fMargemD.'cm' ?>;
 	margin-left:	<?php echo $fMargemL.'cm' ?>;
	}
.p{
	line-height: 4.65cm ;
	}
.p0{
	line-height: -3.65cm;
}
.imag{
		width:		<?php echo $tamanhoimagX.'cm' ?>; 
		height:		<?php echo $tamanhoImagY.'cm' ?>;
	}

.folhaRosto{
	
	align-items: 	<?php echo $centralizacao ?>;
	text-align: 	<?php echo $centralizacao ?>;
	font-family:	'Arial';
 	margin-right:	<?php echo $fMargemR.'cm' ?>;
 	margin-bottom:	<?php echo $fMargemD.'cm' ?>;
 	margin-left:	<?php echo $fMargemL.'cm' ?>;
}

.texto{
	align-items:<?php echo $objetivocentralizacao ?>;
	text-align:<?php echo $objetivocentralizacao ?>;
	font-size:<?php echo $objetivotamanhofonte.'px' ?>;
	margin-left:<?php echo $objetivobordapos.'cm' ?>;
	margin-right:	<?php echo $fMargemR.'cm' ?>;
	font-weight:<?php echo ($objetivonegrito  == 1) ? 'bold': '' ?>;
}

.nome, .cidade, .nomeprojeto{
 	font-size: 		<?php echo $tamanhoFonte.'px' ?>;
 	text-transform: <?php echo ($tituloCaixaAlta == 0) ? '':'Uppercase'?>;
	font-weight:	<?php echo ($negrito  == 1) ? 'bold': '' ?>;
}
.nomeR{
 	font-size: 		<?php echo $tamanhoFonte.'px' ?>;
 	text-transform: <?php echo ($tituloCaixaAlta == 0) ? '':'Uppercase'?>;
	font-weight:	<?php echo ($negrito  == 1) ? 'bold': '' ?>;
}

.prosto{
	line-height: 9.50cm;
}

.Resumo{
	
	font-size:<?php echo $objetivotamanhofonte.'px' ?>;
	font-family:	'Arial';
	margin-top:		<?php echo $fMargemU.'cm' ?>;
 	margin-right:	<?php echo $fMargemR.'cm' ?>;
 	margin-bottom:	<?php echo $fMargemD.'cm' ?>;
 	margin-left:	<?php echo $fMargemL.'cm' ?>;
}
.nomeprojeto2{
	align-items: 	<?php echo $centralizacao ?>;
	text-align: 	<?php echo $centralizacao ?>;
 	font-size: 		<?php echo $tamanhoFonte.'px' ?>;
 	text-transform: <?php echo ($tituloCaixaAlta == 0) ? '':'Uppercase'?>;
	font-weight:	<?php echo ($negrito  == 1) ? 'bold': '' ?>;
}

.alinhadireita{
	text-align:right;
	margin-bottom:	1.5cm;
}
.textoSimples{
	font-size:<?php echo $objetivotamanhofonte.'px' ?>;
}
.textoSimplesb{
	font-size:<?php echo $objetivotamanhofonte.'px' ?>;
	font-weight:<?php echo ($objetivonegrito  == 1) ? 'bold': '' ?>;
}

.textoCapitulo{
	text-align:<?php echo $objetivocentralizacao ?>;
	font-family:	'Arial';
	font-size:		<?php echo $objetivotamanhofonte.'px' ?>;
 
	}
.palavra-Chave{
	align-items:left;
	text-align:left;
	font-size:<?php echo $objetivotamanhofonte.'px' ?>;	
	font-family:	'Arial';
	font-weight:<?php echo ($objetivonegrito  == 1) ? 'bold': '' ?>;
 	
 	margin-bottom:	<?php echo $fMargemD.'cm' ?>;
 	
}

.capitulo{
	text-align:<?php echo $objetivocentralizacao ?>;
	font-family:	'Arial';
 	font-size: 		<?php echo $tamanhoFonte.'px' ?>;
 	margin-right:	<?php echo $fMargemR.'cm' ?>;
 	margin-bottom:	<?php echo $fMargemD.'cm' ?>;
 	margin-left:	<?php echo $fMargemL.'cm' ?>;
}
.textoCapitulo1{
	text-transform: <?php echo ($tituloCaixaAlta == 0) ? '':'Uppercase'?>;
	font-size:		<?php echo $objetivotamanhofonte.'px' ?>;
	font-weight:	<?php echo ($negrito  == 1) ? 'bold': '' ?>;
	}
.textoCapitulo2{
	font-size:		<?php echo $objetivotamanhofonte.'px' ?>;
	}
.paragrafo{
	text-indent:1.5cm;
}
.justifica{
	align-items:<?php echo $objetivocentralizacao ?>;
	text-align:<?php echo $objetivocentralizacao ?>;
	font-size:<?php echo $objetivotamanhofonte.'px' ?>;
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
	}