<?php
include('conexao.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];

mysqli_query($conexao, "INSERT INTO usuario (nome, email, senha, endereco, cidade, estado, cep, telefone, celular) VALUES ('$nome','$email','$senha','$endereco','$cidade','$estado','$cep', '$telefone','$celular')");

echo "<script type='text/javascript'> alert('Você foi cadastrado!'); window.location.href = '../cadastro.php'; </script>"

?>