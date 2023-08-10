<?php

if(isset($_POST['submit']))
{

    include_once('vincular.php');

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];
    $genero = $_POST['genero'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO usuario (nome,sobrenome,email,idade,genero,senha) VALUES 
    ('$nome','$sobrenome','$email','$idade','$genero','$senha')");

if ($result) {
    header("Location: login.html");
} else {
    echo "Erro ao inserir os dados, tente novamente!";
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="styleCadastro.css">

    <title>Cadastro</title>

</head>
<body>

<div class="formulario">
<form action="Cadastro.php" method="POST">
<div class="titulo"> Cadastre-se aqui</div> <p>

<i class="bi bi-person-circle"></i> <input type="text" name="nome" placeholder="Nome"> <p>

<i class="bi bi-person-circle"></i> <input type="text" name="sobrenome" placeholder="Sobrenome" > <p>

<i class="bi bi-envelope-fill"></i> <input type="text" name="email" placeholder="E-mail" > <p>

<i class="bi bi-gift-fill"></i> <input type="number" name="idade" placeholder="Idade"> <p>

<i class="bi bi-person-bounding-box"></i> <select id="genero" name="genero">
<option value=""> Gênero </option>
    <option value="masculino"> Masculino </option>
    <option value="feminino"> Feminino </option>
    <option value="outros"> Outros </option>
</select>
<p>

<div>
<i class="bi bi-lock-fill"></i> <input type="password" name="senha" id="senha" placeholder="Senha">
</div> <p>

<input type="submit" name="submit">

</form>

<div class="assinatura">
@brennoproject
</div>

</body>
</html>
