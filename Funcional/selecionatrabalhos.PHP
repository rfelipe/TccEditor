<?php
require_once '../conecta.inc';
include '../LogInOut/verifica.php';
require_once '../Modelos/classProjeto.php';

	$oProjeto = new Projeto();
	$oProjeto->set_codPessoa($_SESSION['codpessoa']);
	//$oProjeto->set_codProjeto($_SESSION['nome']);


	$rst = select('codpessoa',$oProjeto->get_codPessoa(),'projeto');
?>

<table width="60%" border="0" cellspacing="2" cellpadding="2" cellspacing="2">

<?php
	foreach($rst as $value){ ?>
	<tr>Nome projeto
	<td scope="col">
						<a  href="../Funcional/imprimir.php?id=<?php echo $value->codprojeto?>" >
							<?php print $nomeProjeto = $value->nomeprojeto;?>
							<? $_SESSION['codprojeto']= $value->codprojeto?>
						</a>
					</td>
	</tr>

<?php }?>
</table>
<p>
<div>
	<a  href="../SaveForm/FormNovoProjeto.php">:::CRIAR NOVO PROJETO:::</a>
</div>
