<?php
require "../inc/funcoes-posts.php";
require "../inc/funcoes-sessao.php";
verificaAcesso();

$idUsuarioLogado = $_SESSION['id'];
$tipoUsuarioLogado = $_SESSION['tipo'];
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
excluirPost($conexao, $id, $idUsuarioLogado, $tipoUsuarioLogado);
header("location:posts.php");