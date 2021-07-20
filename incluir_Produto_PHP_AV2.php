<?php

//Incluir produto AV2 3DAW
//ALUNO MARCO ANTONIO RIBEIRO GAMA --- MAT.1810478300006

$servername="localhost";
$username="3daw";
$password="12341234";
$dbname="XIMBAHIA";

//Estabelecendo conexão

$conn= new mysqli($servername,$username,$password,$dbname);

//Verificando conexão

if($conn->connect_error){
    die("Falha na conexao:".$conn->connect_error);
}
if($conn->query(sql)===TRUE){
                          echo "Registro inserido com sucesso";
}else{
    echo "Erro de registro";
}
$conn->close();
?>
