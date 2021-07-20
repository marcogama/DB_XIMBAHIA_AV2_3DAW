<?php

//TABELA_AV2_3DAW
//ALUNO MARCO ANTONIO RIBEIRO GAMA --- MAT.1810478300006

$servername="localhost";
$username="3daw";
$password="12341234";
$dbname="XIMBAHIA";

//Estabelecendo conexão

$conn= new mysqli($servername,$username,$password,$dbname);

//Verificando conexão

if(conn->connect_error){
    die("Falha na conexao:".$conn->connect_error);
}

//Criando tabela

$sql="CREATE TABLE PRODUTO (
ID             INT(6) AUTO_INCREMENT PRIMARY KEY,
CODBAR         INT(10) AUTO_INCREMENT,
NOME           VARCHAR(20) NOTNULL,
FABR           VARCHAR(30) NOTNULL,
CATEG          VARCHAR(30) NOTNULL,
TIPO           VARCHAR(20) NOTNULL,
PRECO_VENDA    FLOAT(11) UNSIGNED,
QUANT_EST      INTERGER(11) UNSIGNED,
PESO           FLOAT(11) UNSIGNED,
DESCR          VARCHAR(30),
IMG            VARCHAR(30),
D_INCL         DATE NOTNULL,
ATIVO          BOOLEAN,
)";

if(conn->query($sql)===TRUE){
    echo "Tabela criada com sucesso";
}else{
    echo "Erro ao criar tabela:".$conn->error;
}
$conn->close();
?>