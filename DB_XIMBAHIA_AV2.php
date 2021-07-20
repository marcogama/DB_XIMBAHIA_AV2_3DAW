<?php

//DB_AV2_3DAW
//ALUNO MARCO ANTONIO RIBEIRO GAMA --- MAT.1810478300006


$servername = "localhost";
$username = "3daw";
$password = "12341234";

// Estabelecendo conexao

$conn = new mysqli($servername, $username, $password);

// Verificando conexao

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Criando banco de dados

$sql = "CREATE DATABASE XIMBAHIA";
if ($conn->query($sql) === TRUE) {
  echo "Banco de dados criado com sucesso";
} else {
  echo "Erro ao criar Banco de dados: " . $conn->error;
}

$conn->close();
?>