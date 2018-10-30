<?php
require_once '../Funcional/setUsuario.php';
require_once '../Modelos/classResumo.php';
require_once '../conecta.inc';

   $oResumo = new Resumo();

   //$oResumo->set_codResumo($_POST[""]);
   $oResumo->set_textoResumo($_POST["natureza"]);
   //$oResumo->set_abstract("");
   $oResumo->set_folharosto(1);
   $oResumo->set_codProjeto(1);

insertResumoRosto($oResumo->get_textoResumo(),
                  $oResumo->get_folharosto(),
                  '1');

  echo("<script type='text/javascript'> alert('Inclcusão da folha de rosto realizada com sucesso!'); location.href='formCapitulo.php';</script>");
?>