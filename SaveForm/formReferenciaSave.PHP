<?php
require_once '../Funcional/setUsuario.php';
require_once '../Modelos/classReferencia.php';
require_once '../conecta.inc';

 $oReferencia = new Referencia();

   $oReferencia->set_codProjeto($oProjeto->get_codProjeto()); 
   $oReferencia->set_autor($_POST['autor']);
   $oReferencia->set_titulo($_POST['titulo']);
   $oReferencia->set_endereco($_POST['endereco']);
   $oReferencia->set_acessado($_POST['acessado']);

   insertReferencia( $oReferencia->get_codProjeto(),
               $oReferencia->get_autor(),
               $oReferencia->get_titulo(),
               $oReferencia->get_endereco(),
               $oReferencia->get_acessado()
            );

if(isset($_POST["ncapitulo"])){
     echo("<script type='text/javascript'> alert('Referencia salva!'); location.href='formReferencia.php';</script>");
} 
else if(isset($_POST["pular"])){
      echo("<script type='text/javascript'> alert('Projeto finalizado');
        location.href='../Funcional/selecionatrabalhos.php'; </script>");
}
?>