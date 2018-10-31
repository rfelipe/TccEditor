<?php
require_once '../conecta.inc';

$usuario = $_POST['nome'];
$senha 	 = $_POST['senha'];


if(conecta()){
	$rst = selectPessoa($usuario,$senha);

	if(!empty($rst)){
		
			//Retorna os dados do banc
			$num = selectPessoa($usuario,$senha);
			foreach($num as $key => $value){
			$codpessoa=$value->codpessoa;
			$usuario 	=  $value->nome;
			$senha 	=  $value->senha;
			}
			
			session_start();
			$_SESSION['codpessoa']= $codpessoa;
			$_SESSION['nome']	  = $usuario;
			$_SESSION['senha']	  = $senha;

    		echo "<meta http-equiv='refresh' content='5;URL=../Funcional/selecionatrabalhos.php'>";
		}
else
	{
		echo("<script type='text/javascript'> alert('Usuário não cadastrado!'); location.href='../index.html';</script>");
        
	}
}
?>
