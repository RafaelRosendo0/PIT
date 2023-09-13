<?php
session_start();
require 'db.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="paginaprincipal.css" />
  <link rel="stylesheet" href="cabecalho2.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
  <script src="./js/jquery.min.js"></script>
  <title>EatEasy</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary w-100">
    <div class="container">
      <a class="navbar-brand" href="paginaprincipal.php" id="logo">EatEasy</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse w-100" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="suporte.html">Suporte</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sobrenos.html">Sobre Nós</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <img class="mb-5 w-100 h-25" src="img/burgao.jpg" alt="" />
  <div class="px-4" style="
          display: flex;
          justify-content: space-between;
          align-items: center;
          gap: 20px
        ">

    <div class="card mb-3 w-100">
      <div class="row g-0">
        <div class="col-md-6 overflow-hidden">
          <img src="img/sanduba.jpg" alt="" />
        </div>
        <div class="col-md-4">
          <div class="card-body">
            <h5 class="card-title">Lanches</h5>
            <p class="card-text">Todos os lanches vendidos pela nossa lanchonete!</p>
            <a href="lanches.php">
              <button class='btn btn-primary'>Ver produtos</button>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3 w-100">
      <div class="row g-0">
        <div class="col-md-6 overflow-hidden">
          <img src="img/bebida.jpg" alt="" />
        </div>
        <div class="col-md-4">
          <div class="card-body">
            <h5 class="card-title">Bebidas</h5>
            <p class="card-text">Todas as bebidas vendidas pela nossa lanchonete!</p>
            <a href="bebidas.php">
              <button class='btn btn-primary'>Ver produtos</button>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3 w-100">
      <div class="row g-0">
        <div class="col-md-6 overflow-hidden">
          <img src="img/doce.jpg" alt="" />
        </div>
        <div class="col-md-4">
          <div class="card-body">
            <h5 class="card-title">Doces</h5>
            <p class="card-text">Todos os doces vendidos pela nossa lanchonete!</p>
            <a href="doces.php">
              <button class='btn btn-primary'>Ver produtos</button>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- <div id="produto">
      <img id="img" src="img/sanduba.jpg" alt="" /><a id="a" href="lanches.php">Lanches</a><img id="seta1" src="img/seta.png" alt="" />
    </div>
    <div id="produto">
      <img id="img" src="img/bebida.jpg" alt="" /><a id="a" href="bebidas.php">Bebidas</a><img id="seta2" src="img/seta.png" alt="" />
    </div>
    <div id="produto">
      <img id="img" src="img/doce.jpg" alt="" /><a id="a" href="doces.php">Doces</a><img id="seta3" src="img/seta.png" alt="" />
    </div> -->
  </div>
  <p id="marca1">EatEasy</p>
  <p id="marca2">Corporation</p>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


</body>

</html>