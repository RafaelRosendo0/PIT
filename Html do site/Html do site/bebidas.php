<?php
session_start();
require 'db.php';

$bebidas = [];
$carrinho = [];

$sql = "SELECT id, descricao, preco FROM bebidas";
$result = $PDO->query($sql);

if ($result->rowCount() > 0) {
    while ($row = $result->fetch()) {
        array_push($bebidas, [$row["preco"], $row["descricao"], $row["id"]]);
    }
} else {
    echo "0 results";
}

if (isset($_POST["formPesquisa"])) {
    $pesquisa = $_POST["search"];

    $bebidas = Pesquisar($pesquisa, $PDO);
}

if (isset($_POST["addCarrinho"])) {
    $id = $_POST["id"];

    $sqlCarrinho = "SELECT descricao, preco FROM doces WHERE id = $id";
    $resultCarrinho = $PDO->query($sqlCarrinho);

    if ($resultCarrinho->rowCount() > 0) {
        while ($row = $resultCarrinho->fetch()) {
            array_push($carrinho, [$row["preco"], $row["descricao"]]);
        }
    } else {
        echo "0 results";
    }
}

function Pesquisar($pesquisa, $PDO)
{
    $sql = "SELECT id, descricao, preco FROM bebidas where descricao like '$pesquisa%'";

    $array_retorno = [];

    $result = $PDO->query($sql);

    if ($result->rowCount() > 0) {
        while ($row = $result->fetch()) {
            array_push($array_retorno, [$row["preco"], $row["descricao"], $row["id"]]);
        }
    } else {
        echo "0 results";
    }

    return $array_retorno;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bebidas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link rel="stylesheet" href="cabecalho2.css">
    <script src="./js/jquery.min.js"></script>

    <title>EatEasy</title>
</head>

<body>
    <!-- <header>
        <div id="cabecalho">
            <a href="paginaprincipal.html" id="logo">EatEasy</a>
            <form method="POST">
                <input id="search" type="text" name="search">
                <input type="submit" value="Pesquisar" name="formPesquisa">
            </form>
            <ul id="ulheader">
                <li id="liheader"><a href="suporte.html" id="sn">Suporte</a></li>
                <li id="liheader"><a href="sobrenos.html" id="sn">Sobre Nós</a></li>

            </ul>
            <img id="imgheader" src="img/carrinho-removebg-preview.png" height="25px" width="32px" alt="">
        </div>
        <p id="lanches">Doces</p>
    </header> -->

    <nav class="navbar navbar-expand-lg bg-body-tertiary w-100 mb-4">
        <div class="container">
            <a class="navbar-brand" href="paginaprincipal.php" id="logo">EatEasy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse w-100" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-3 d-flex">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="suporte.html">Suporte</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sobrenos.html">Sobre Nós</a>
                    </li>
                    <form class="d-flex" role="search" method="POST">
                        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search" id="search" name="search">
                        <input class="btn btn-outline-success" name="formPesquisa" type="submit" value="Pesquisar">
                    </form>
                </ul>
                <div class="btn-group dropstart">
                    <button type="button" class="btn d-flex align-items-center gap-3 btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-basket-fill" viewBox="0 0 16 16">
                            <path d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3z" />
                        </svg>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-xl-end" style="min-width: 320px;" id="carrinho">
                        <p class='text-body-secondary fs-6'>Nenhum produto adicionado ao carrinho</p>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="produtos d-flex flex-wrap gap-4 p-5">
        <?php
        foreach ($bebidas as $bebida) {
            /* echo "<div id='produto'><img id='img' src='img/doce.jpg' alt=''><p>$doce[1]</p><h1>" . number_format($doce[0], 2, '.', '') . "</h1><img id='seta' src='img/mais.png' alt=''></div>"; */
            echo "<div class='card' style='width: 18rem;'>
            <img src='img/bebida.jpg' class='card-img-top' alt='...'>
            <form class='card-body d-flex flex-column align-items-start' method='POST'>
              <input type='hidden' name='id' value='$bebida[2]' />
              <h5 class='card-title'>$bebida[1]</h5>
              <p class='card-text'>R$ " . number_format($bebida[0], 2, '.', '') . "</p>
              <input class='btn btn-primary addbutton' id='liveToastBtn' type='button' value='Adicionar ao carrinho' name='addCarrinho' onclick='add($bebida[2])'>
            </form>
          </div>";
        }
        ?>
    </div>

    <p id="marca1">EatEasy</p>
    <p id="marca2">Corporation</p>

    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" data-bs-autohide="false" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header d-flex gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                </svg>
                <strong class="me-auto">Aviso</strong>
                <small>Now</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Produto adicionado no carrinho!
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script>
        let carrinho = [];

        $(".btn-close").click(() => {
            $("#liveToast").removeClass("d-block")
        })

        var add = (id) => {
            $("#liveToast").addClass("d-block")

            $.ajax({
                url: 'services/adicionaCarrinho.php',
                type: 'POST',
                data: {
                    id,
                    tabela: "bebidas"
                },
                success: (response) => {
                    carrinho.push(response)
                    let html = "";


                    carrinho.forEach(item => {
                        let obj = JSON.parse(item);

                        html += `<li><a class='dropdown-item' href='#'>${obj.descricao}</a></li>`
                    })

                    $("#carrinho").html(html)
                },
                error: (erro) => {
                    console.error(erro)
                }
            })
        }
    </script>
</body>

</html>