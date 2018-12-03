<?php
require_once '../Funcional/setUsuario.php';
require_once '../Modelos/classResumo.php';
require_once '../conecta.inc';

   $oResumo = new Resumo();

   $oResumo->set_textoResumo($_POST["natureza"]);
   $oResumo->set_folharosto(2);
   $oResumo->set_objetivo($_POST["objetivo"]);
   $oResumo->set_codProjeto($oProjeto->get_codProjeto());
   $orientador=$_POST["orientador"];

insertResumoObjetivo(
					$oResumo->get_textoResumo(),
                  	$oResumo->get_folharosto(),
                  	$oResumo->get_objetivo(),
                  	$oResumo->get_codProjeto(),
                    $orientador
              	);

  echo("<script type='text/javascript'> alert('Inclcusão da Resumo Objetivo realizada com sucesso!'); location.href='formCapitulo.php';</script>");
?>