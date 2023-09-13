<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginfuncionario.css">
    <title>Login</title>
</head>

<body>
    <fieldset id="tipodecadastro">
        <legend>Faça seu Login</legend>
        <h2>Login Funcionário</h2>
        <form method="post" action="code.php">
            <p><label>E-mail</label></p>
            <input required type="email" placeholder="Digite seu email" size="36" name="email" id="email"><br>
            <p><label>Senha</label><br></p>
            <input required type="password" placeholder="Digite sua senha" size="36" name="senha" id="senha"><br>
            <label id="esqueceu" for="">Esqueceu sua senha?</label><br><br>
            <input value="enviar" type="submit" name="loginFuncionario" />
        </form>
    </fieldset>

</body>

</html>