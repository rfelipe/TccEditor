<?php
include '../LogInOut/verifica.php';
require_once '../conecta.inc';
require_once '../Modelos/classProjeto.php';

   $oProjeto = new Projeto;
   $oProjeto->set_nomeProjeto($_POST['nomeProjeto']);
   $oProjeto->set_codPessoa($_SESSION['codpessoa']);
   
   $_SESSION['idprojeto']=insertProjeto(
   $oProjeto->get_nomeProjeto(),
   $oProjeto->get_codPessoa()
   );

  echo("<script type='text/javascript'> alert('Novo projeto salvo com sucesso!'); location.href='formCapa.php';</script>");
?>