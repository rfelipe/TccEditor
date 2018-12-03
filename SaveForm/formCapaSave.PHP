<?php
require_once '../Funcional/setUsuario.php';
require_once '../Modelos/classCapa.php';
require_once '../conecta.inc';


$oCapa = new capa();
$uploaddir = '../ImagUp/'.$_FILES["capaImagem"]["name"];
$uploadfile = $_FILES["capaImagem"]["tmp_name"];
move_uploaded_file( $uploadfile, $uploaddir );

   //set_idCapa($_POST[]);
   $oCapa->set_codProjeto($oProjeto->get_codProjeto()); 
   $oCapa->set_imgCapa($_FILES["capaImagem"]["name"]); 
   $oCapa->set_unidade($_POST["capaUnidade"]);
   $oCapa->set_curso($_POST["capaCurso"]);
   $oCapa->set_nomeFaculdade($_POST["capaFaculdade"]); 
   $oCapa->set_nomePessoa($oPessoa->get_nomePessoa()); 
   $oCapa->set_nomeProjeto($_POST["nomeProjeto"]);     
   $oCapa->set_cidade($_POST["cidade"]);


   insertCapa( $oCapa->get_unidade(),
               $oCapa->get_curso(),
               $oCapa->get_imgCapa(),
               $oCapa->get_nomeProjeto(),
               $oCapa->get_nomeFaculdade(),
               $oCapa->get_cidade(),
               $oCapa->get_nomePessoa(),
               $oCapa->get_codProjeto(),
            );

  echo("<script type='text/javascript'> alert('Inclcusão de Capa realizada com sucesso!'); location.href='formFolhaRosto.php';</script>");
?>