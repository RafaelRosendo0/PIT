<?php
require "../db.php";


$id = $_POST["id"];
$tabela = $_POST["tabela"];

$sqlCarrinho = "SELECT descricao, preco FROM $tabela WHERE id = $id";
$resultCarrinho = $PDO->query($sqlCarrinho);

if ($resultCarrinho->rowCount() > 0) {
  while ($row = $resultCarrinho->fetch()) {
    $carrinho = ["preco" => $row["preco"], "descricao" => $row["descricao"]];
  }
  echo json_encode($carrinho);
} else {
  echo "0 results";
}
