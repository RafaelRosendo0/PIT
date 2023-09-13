<?php
session_start();
require 'db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastrofuncionario.css">
    <title>Cadastro</title>
</head>

<body>
    <fieldset id="tipodecadastro">
        <legend>Faça seu cadastro</legend>
        <h2>Cadastro do Funcionário</h2>
        <form method="post" action="code.php">
            <p><label>Primeiro nome</label><label>⠀⠀⠀⠀⠀⠀⠀⠀Sobrenome</label></p>
            <input required type="text" placeholder="Digite seu nome" name="nome" id="nome">
            <input required type="text" placeholder="Digite seu sobrenome" name="sobrenome" id="sobrenome">

            <p><label>E-mail</label><label>⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀RG</label></p>
            <input required placeholder="Digite seu e-mail" type="email" name="email" id="email">
            <input required placeholder="Digite seu RG" type="text" maxlength="13" name="rg" id="rg"><br>

            <p><label>Endereço completo</label><label>⠀⠀⠀⠀⠀CPF</label></p>
            <input required placeholder="Digite seu endereço" type="text" name="endereco" id="endereço">
            <input required placeholder="Digite seu CPF" type="text" maxlength="12" name="cpf" id="cpf"><br>

            <p><label>Senha</labe><label>⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀Confirmar senha</label></p>
            <input required placeholder="Digite sua senha" type="password" name="password" id="password">
            <input required placeholder="Confirme sua senha" type="password" name="confirmpassword" id="confirmpassword">


            <p><label>Gênero</label></p>
            <input type="radio" required name="genero" id="masculino" value="masculino">
            <label for="masculino">Masculino</label>
            <input type="radio" required name="genero" id="feminino" value="feminino">
            <label for="feminino">Feminino</label>
            <input type="radio" required name="genero" id="pf" value="prefiro não dizer">
            <label for="pf">Prefiro não dizer</label><br><br>
            <input type="radio" required name="genero" id="outros" value="outros">
            <label for="outros">Outros</label>

            <br><br><br>

            <input type="submit" name="cadastrarFuncionario" value="Enviar">
        </form>
    </fieldset>
</body>

</html>