<?php
require_once '../Modelos/classPessoa.php';
require_once '../conecta.inc';


   $oPessoa = new Pessoa();

   $oPessoa->set_nomePessoa($_POST["nome"]); 
   $oPessoa->set_senha($_POST["senha"]);
   $email=$_POST["email"];     

   insertPessoa( $oPessoa->get_nomePessoa(),
               $oPessoa->get_senha(),
               $email
               );

  echo("<script type='text/javascript'> alert('Usario salvo com sucesso!'); location.href='../index.html';</script>");
?>