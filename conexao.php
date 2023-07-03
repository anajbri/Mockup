<?php
//cofiguração o banco de dados 
$host = 'localhost';
$usuario = 'root';
$senha = 'root';
$banco = 'estoque';
//criação de conexão
$conexao = new mysqli($host,$usuario,$senha,$banco);

if($conexao->connect_error){

    die("erro ns conexão com o banco de dados:" .$conexao->connect_error);
}

?>