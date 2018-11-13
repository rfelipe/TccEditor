<?php
require_once '../Funcional/setUsuario.php';
require_once '../Modelos/classResumo.php';
require_once '../conecta.inc';

   $oResumo = new Resumo();

   $oResumo->set_textoResumo($_POST["natureza"]);
   $oResumo->set_folharosto(1);
   $oResumo->set_codProjeto($oProjeto->get_codProjeto());

insertResumoRosto($oResumo->get_textoResumo(),
                  $oResumo->get_folharosto(),
                  $oResumo->set_codProjeto()
              	);

  echo("<script type='text/javascript'> alert('Inclcusão da folha de rosto realizada com sucesso!'); location.href='formResumoObjetivo.php';</script>");
?>