<?php

include("conexaobiko.php");

$nomeauto = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$emailauto = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$telauto = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_STRING);
$cidadeauto = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$estadoauto = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
$servico = filter_input(INPUT_POST, 'servico', FILTER_SANITIZE_STRING);
$anos = filter_input(INPUT_POST, 'anos', FILTER_SANITIZE_STRING);

$result_autonomo = "INSERT INTO `autonomos` (`id`, `Nome`, `Email`, `Telefone`, `Cidade`, `Estado`, `Servico`, `Anos`) VALUES (NULL, '$nomeauto', '$emailauto', '$telauto', '$cidadeauto', '$estadoauto', '$servico', '$anos')";
$resultadoautonomo = mysqli_query($conn, $result_autonomo);

header('Location: TelaInicialLogado.html')

?>