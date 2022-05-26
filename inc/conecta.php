<?php
$servidor = "localhost"; 
$usuario = "root";	
$senha = ""; 
$banco = "progweb_microblog_laise"; 

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

mysqli_set_charset($conexao, "utf8");

    