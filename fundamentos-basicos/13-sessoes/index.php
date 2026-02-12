<?php
session_start();

$_SESSION['cor'] = 'vermelho';
$_SESSION['carro'] = 'onix';

echo $_SESSION['cor']."<br>".$_SESSION['carro'];

?>