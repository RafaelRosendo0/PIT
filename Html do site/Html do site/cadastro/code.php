<?php
session_start();
require 'db.php';

if (isset($_POST['cadastrarAluno'])) {
    $primeiroNome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $matricula = $_POST['matricula'];
    $senha = $_POST['password'];
    $genero = $_POST['genero'];
    $confirmSenha = $_POST['confirmpassword'];

    if ($senha !== $confirmSenha) {
        echo 'Senhas diferentes';
        exit(0);
    }

    $query = "INSERT INTO aluno VALUES ('default', '$primeiroNome','$sobrenome','$email','$matricula', '$senha', '$genero')";

    // $query_run = mysqli_query($con, $query);
    $stmt = $PDO->prepare($query);

    $result = $stmt->execute();

    if ($result) {
        echo 'aluno cadastrado';
        exit(0);
    } else {
        echo 'erro ao criar o aluno';
        exit(0);
    }
}

if (isset($_POST['cadastrarFuncionario'])) {
    $primeiroNome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $rg = $_POST['rg'];
    $endereco = $_POST['endereco'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['password'];
    $genero = $_POST['genero'];
    $confirmSenha = $_POST['confirmpassword'];

    if ($senha !== $confirmSenha) {
        echo 'Senhas diferentes';
        exit(0);
    }

    $query = "INSERT INTO funcionario VALUES ('default', '$primeiroNome','$sobrenome','$email','$rg', '$endereco', '$cpf', '$senha', '$genero')";

    // $query_run = mysqli_query($con, $query);
    $stmt = $PDO->prepare($query);

    $result = $stmt->execute();

    if ($result) {
        echo 'funcionario cadastrado';
        exit(0);
    } else {
        echo 'erro ao criar o funcionario';
        exit(0);
    }
}

if (isset($_POST['cadastrarLanchonete'])) {
    $nome = $_POST['nome'];
    $rg = $_POST['rg'];
    $comprovante = $_POST['comprovante'];
    $iptu = $_POST['iptu'];
    $nome_fantasia = $_POST['fantasia'];
    $endereco = $_POST['comercial'];
    $senha = $_POST['password'];
    $confirmSenha = $_POST['confirmpassword'];

    if ($senha !== $confirmSenha) {
        echo 'Senhas diferentes';
        exit(0);
    }

    $query = "INSERT INTO lanchonete VALUES ('default', '$nome','$rg','$comprovante','$iptu', '$nome_fantasia', '$endereco', '$senha')";

    // $query_run = mysqli_query($con, $query);
    $stmt = $PDO->prepare($query);

    $result = $stmt->execute();

    if ($result) {
        echo 'lanchonete cadastrada';
        exit(0);
    } else {
        echo 'erro ao criar a lanchonete';
        exit(0);
    }
}


if (isset($_POST['loginAluno'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $queryEmail = "SELECT email FROM aluno where email = '$email'";

    $result = $PDO->query($queryEmail);


    if (!$result) {
        echo 'Erro ao buscar email';
    }

    $rows = $result->fetchAll(PDO::FETCH_ASSOC);

    if ($rows > 0) {

        $querySenha = "SELECT senha FROM aluno where email = '$email'";

        $resultSenha = $PDO->query($querySenha);

        $rows = $resultSenha->fetchAll(PDO::FETCH_ASSOC);

        if ($senha == $rows[0]['senha']) {
            echo 'Logado com sucesso!';
        } else {
            echo 'A senha está errada';
        }
    } else {
        echo 'Este email não está cadastrado!';
    }
}

if (isset($_POST['loginFuncionario'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $queryEmail = "SELECT email FROM funcionario where email = '$email'";

    $result = $PDO->query($queryEmail);


    if (!$result) {
        echo 'Erro ao buscar email';
    }

    $rows = $result->fetchAll(PDO::FETCH_ASSOC);

    if ($rows > 0) {

        $querySenha = "SELECT senha FROM funcionario where email = '$email'";

        $resultSenha = $PDO->query($querySenha);

        $rows = $resultSenha->fetchAll(PDO::FETCH_ASSOC);

        if ($senha == $rows[0]['senha']) {
            echo 'Logado com sucesso!';
        } else {
            echo 'A senha está errada';
        }
    } else {
        echo 'Este email não está cadastrado!';
    }
}

if (isset($_POST['loginLanchonete'])) {
    $nome_fantasia = $_POST['fantasia'];
    $senha = $_POST['senha'];

    $queryFantasia = "SELECT nome_fantasia FROM lanchonete where nome_fantasia = '$nome_fantasia'";

    $result = $PDO->query($queryFantasia);


    if (!$result) {
        echo 'Erro ao buscar o nome fantasia';
    }

    $rows = $result->fetchAll(PDO::FETCH_ASSOC);

    if ($rows > 0) {

        $querySenha = "SELECT senha FROM lanchonete where nome_fantasia = '$nome_fantasia'";

        $resultSenha = $PDO->query($querySenha);

        $rows = $resultSenha->fetchAll(PDO::FETCH_ASSOC);

        if ($senha == $rows[0]['senha']) {
            echo 'Logado com sucesso!';
        } else {
            echo 'A senha está errada';
        }
    } else {
        echo 'Este nome fantasia não está cadastrado!';
    }
}
