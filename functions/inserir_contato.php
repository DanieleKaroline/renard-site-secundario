<?php
include("conexao.php");
$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

mysqli_query($conexao, "insert into mensagem(nome,email,assunto,mensagem) values('$nome','$email','$assunto','$mensagem')");
header('location:../contact.php');
?>