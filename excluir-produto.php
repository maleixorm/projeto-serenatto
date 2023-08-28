<?php

var_dump($_POST);
exit();

require "src/conexao.php";
require "src/Model/Produto.php";
require "src/Model/Repository/ProdutoRepositorio.php";

$produtoRepositorio = new ProdutoRepositorio($pdo);
$produtoRepositorio->deletar($_POST['id']);

header("Location: admin.php");