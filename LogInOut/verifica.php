<?php

session_start();

if(!isset($_SESSION['senha']) && !isset($_SESSION['nome']))
{
echo("<script type='text/javascript'> alert('Acesso negado ao sistema.O Usuário não foi autenticado!'); location.href='../index.html';</script>");
exit;
}
?>