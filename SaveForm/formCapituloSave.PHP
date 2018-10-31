<?php
require_once '../Funcional/setUsuario.php';
require_once '../Modelos/classCapitulo.php';
require_once '../conecta.inc';

$oCapitulo = new Capitulo();
$uploaddir = '../ImagUp/'.$_FILES["capituloImagem"]["name"];
$uploadfile = $_FILES["capituloImagem"]["tmp_name"];
move_uploaded_file( $uploadfile, $uploaddir );

   $oCapitulo->set_codProjeto(1); 
   $oCapitulo->set_codRefImagem($_FILES["capituloImagem"]["name"]); 
   $oCapitulo->set_textoCapitulo($_POST['titulo']);
   $oCapitulo->set_textoDecorra($_POST['texto']);
   $oCapitulo->set_subcod($_POST['refimagem']);

   insertCapitulo($oCapitulo->get_codRefimagem(),
                  $oCapitulo->get_textoCapitulo(),
                  $oCapitulo->get_textoDecorra(),
                  $oCapitulo->get_codProjeto(),
                  $oCapitulo->get_subcod()
               );

  echo("<script type='text/javascript'> alert('Inclcusão de Capa realizada com sucesso!'); location.href='formFolhaRosto.php';</script>");
?>