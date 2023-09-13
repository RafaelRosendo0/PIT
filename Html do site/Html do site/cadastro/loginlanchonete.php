<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginaluno.css">
    <title>Login</title>
</head>

<body>
    <fieldset id="tipodecadastro">
        <legend>Faça seu Login</legend>
        <h2>Login Lanchonete</h2>
        <form method="post" action="code.php">
            <p><label>Nome Fantasia</label></p>
            <input required type="text" placeholder="Digite o nome Fanatasia" size="36" name="fantasia" id="fantasia"><br>
            <p><label>Senha</label><br></p>
            <input required type="password" placeholder="Digite sua senha" size="36" name="senha" id="senha"><br>
            <label id="esqueceu" for="">Esqueceu sua senha?</label><br><br>
            <input type="submit" value="Enviar" name="loginLanchonete" />

        </form>
    </fieldset>

</body>

</html>