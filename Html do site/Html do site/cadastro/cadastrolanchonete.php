<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastroaluno.css">
    <title>Cadastro</title>
</head>

<body>
    <fieldset id="tipodecadastro">
        <legend>Faça seu cadastro</legend>
        <h2>Cadastro da Lanchonete</h2>
        <form method="post" action="code.php">
            <p><label>Nome da Lanchonete</label><label>⠀⠀⠀⠀RG do responsável</label></p>
            <input required type="text" placeholder="Digite seu nome" name="nome" id="nome">
            <input required type="text" placeholder="Digite seu RG" name="rg" id="RG">

            <p><label>Comprovante Residêncial</labe><label>⠀IPTU</label></p>
            <input required placeholder="Digite seu comprovante" type="text" name="comprovante" id="comprovante">
            <input required placeholder="Digite seu IPTU" type="text" name="iptu" id="IPTU">

            <p><label>Nome Fantasia</label><label>⠀⠀⠀⠀⠀⠀⠀⠀Endereço Comercial</label></p>
            <input required placeholder="Digite seu Nome Fantasia" type="text" name="fantasia" id="Fantasia">
            <input type="text" placeholder="Digite seu endereço comercial" required name="comercial" id="comercial"><br>

            <p><label>Senha</labe><label>⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀Confirmar senha</label></p>
            <input required placeholder="Digite sua senha" type="password" name="password" id="password">
            <input required placeholder="Confirme sua senha" type="password" name="confirmpassword" id="confirmpassword">





            <br><br><br>

            <input type="submit" name="cadastrarLanchonete" value="Enviar" />
        </form>
    </fieldset>
</body>

</html>