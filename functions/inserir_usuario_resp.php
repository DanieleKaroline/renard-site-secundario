<?php
include("conexao-bd-renard.php");
$nome = $_POST['nome'];
$idade = $_POST['dtnasc'];
$cpf = $_POST['cpf'];
$sexo = $_POST['sexo'];
$email = $_POST['email'];
$senha =  $_POST['senha'];
$endereco = $_POST['endereco'];
mysqli_query($conexao, "insert into usuario_resp(nome,dtnasc,cpf,sexo,email,senha,endereco) values('$nome','$idade','$cpf','$sexo','$email','$senha','$endereco')");
header('location:../download.php')
?>