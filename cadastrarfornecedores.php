<?php
$conexao = mysqli_connect("localhost","root","","mercadodotoninho-");
$nome = $_POST['nome'];
$cnpj = $_POST['cnpj'];
$endereco = $_POST['endereco'];

$sql_inserir = "insert into fornecedores(nome,cnpj,endereco) values ('{$nome}' , '{$cnpj}' , '{$endereco}' )";

mysqli_query($conexao, $sql_inserir);
mysqli_close($conexao);
?>