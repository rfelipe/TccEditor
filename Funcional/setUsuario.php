<?php
	require_once '../Modelos/classPessoa.php';
	require_once '../Modelos/classProjeto.php';
	require_once '../conecta.inc';
	include '../LogInOut/verifica.php';


/*	$rst = selectPessoa('Felipe Souza Rodrigues');
			foreach($rst as $key => $value){
			$codPessoa	=  $value->codpessoa;
			$nome 		=  $value->nome;
			}*/

	$oPessoa = new Pessoa();
	$oPessoa->set_codPessoa($codPessoa);
	$oPessoa->set_nomePessoa($nome);

	$rst = select('codpessoa',$oPessoa->get_codPessoa(),'projeto');
	foreach($rst as $key => $value){
			$codProjeto  = $value->codprojeto;
			$nomeProjeto = $value->nomeprojeto;
			$projPessoa = $value->codpessoa;	
	}

	$oProjeto = new Projeto();
	$oProjeto->set_codProjeto($codProjeto);
	$oProjeto->set_nomeProjeto($nomeProjeto);
	$oProjeto->set_codPessoa($projPessoa);

	echo "<span>"."Esta logado como: ". $oPessoa->get_nomePessoa() ." ID: ".$oPessoa->get_codPessoa()."</span>";
	echo "<p>";
	echo "<span>"."Projeto :".$oProjeto->get_codProjeto() . " Nome do Proejeto: " . $oProjeto->get_nomeProjeto() . " IdPessoa : " .$oProjeto->get_codPessoa()."</span>";
	

	

?>
<!DOCTYPE html>
<html>
    <body class="noprint">
        <p>
        <a  href="../SaveForm/formCapa.php">::<?php echo "Criar Projeto:" ?>::</a>
        
        <a  href="">::<?php echo "||  Editar Projeto:" ?>::</a>
        
        <a  href="../Funcional/imprimir.php">::<?php echo "|| Imprimir Projeto:" ?>::</a>
    </body>
</hml>