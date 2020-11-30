<?php

include("conexaobiko.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$tel = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);


$result_usuario = "INSERT INTO `ClientesBiko` (`id_cliente`, `Nome`, `Email`, `Telefone`, `CPF`, `CEP`, `Cidade`, `Bairro`, `Rua`, `Estado`, `Numero`, `Senha`) VALUES (NULL, '$nome', '$email', '$tel', '$cpf', '$cep', '$cidade', '$bairro', '$rua', '$estado', '$numero', MD5('$senha'))";
$resultadousuario = mysqli_query($conn, $result_usuario);

header('Location: Tela_Login.php')

?>
