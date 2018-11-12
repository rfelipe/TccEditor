<?php
//include '../LogInOut/verifica.php';
require  '../vendor/autoload.php';
use Stichoza\GoogleTranslate\TranslateClient;

function TradutorApiGoogle($texto){
$tr = new TranslateClient();
$tr->setSource('pt-br');
$tr->setTarget('en'); 
$tr->setUrlBase('http://translate.google.cn/translate_a/single');

$traduzido = $tr->translate($texto);
return $traduzido;
}
?>