<?php
require_once '../conecta.inc';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if(conecta()){
	$num = selectPessoa($usuario,$senha);

	if($num > 0){
		
			//Retorna os dados do banc
			//$num = selectPessoa($usuario,$senha);
			foreach($num as $key => $value){
			$codpessoa=  $value->codpessoa;
			$senha 	=  $value->senha;
			$nome 	=  $value->nome;
			}
		
			session_start();
			$_SESSION['codpessoa']= $codpessoa;
			$_SESSION['senha']	= $senha;
			$_SESSION['nome']	= $nome;

    		echo "<meta http-equiv='refresh' content='5;URL=../Funcional/selecionatrabalhos.php'>";
		}
else
	{
		//Encerra a conexão com o banco
		//Caso nenhuma linha seja retornada emite o alerta e retorna
		echo("<script type='text/javascript'> alert('Usuário não cadastrado!'); location.href='index.html';</script>");
        
	}
}
?>