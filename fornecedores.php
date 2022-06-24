<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fornecedores</title>
</head>
<body>
<h1>Cadastro de Fornecedores</h1>
   <hr>
   <br>
   <form method="post" id="cadastro" action="cadastrarfornecedores.php">
   <fieldset id="cad">
   <legend> fornecedores </legend>
   <p> <label for="nome">Nome:</label><input type="text" name="nome" id="nome" size="30" maxlenght="100" placeholder="Digite o nome do fornecedor"></p>
   <p> <label for="cnpj">CNPJ:</label><input type="text" name="cnpj" id="cnpj" size="11" maxlenght="100" placeholder="Digite o CNPJ do fornecedor"></p>
   <p> <label for="endereco">Endereço:</label><input type="text" name="endereco" id="endereco" size="40" maxlenght="100" placeholder="Digite o endereço do fornecedor"></p>
</fieldset>
   <input type="submit" value="Cadastrar">
<hr>
</form>
</body>
</html>