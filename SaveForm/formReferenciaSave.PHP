<?php
require_once '../Funcional/setUsuario.php';
require_once '../Modelos/classReferencia.php';
require_once '../conecta.inc';

 $oReferencia = new Referencia();

  private $codprojeto;
  private $autor;
  private $titulo;
  private $endereco;
  private $acessado;

   $oReferencia->set_codProjeto($oProjeto->get_codProjeto()); 
   $oReferencia->set_autor($_POST['autor']);
   $oReferencia->set_titulo($_POST['titulo']);
   $oReferencia->set_endereco($_POST['endereco']);
   $oReferencia->set_acessado($_POST['acessado']);

   insertCapa( $oReferencia->get_codProjeto(),
               $oReferencia->get_autor(),
               $oReferencia->get_titulo(),
               $oReferencia->get_endereco(),
               $oReferencia->get_acessado()
            );

if(isset($_POST["ncapitulo"])){
     echo("<script type='text/javascript'> alert('Capitulo salvo!'); location.href='formReferencia.php';</script>");
} 
else if(isset($_POST["pular"])){
      echo("<script type='text/javascript'> alert('Nova etapa a definir! ##era pra imprimir agora'); </script>");
}
?>