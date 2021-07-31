<?php
    //MARCO ANTONIO RIBEIRO GAMA
	//MAT 1810478300006
	//CONFIRMA EXCLUI PRODUTO AV2 3DAW AV2
	
	$CODBAR = intval($_GET['p']);
         
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
               $CODBAR = intval($_GET['c_b']);
               $sql="UPDATE XIMBAHIA SET $ATIVO = 'false' WHERE CODBAR = '".$CODBAR."'";
               
               if($conn->query($sql) === TRUE){
                   echo "Excluido com sucesso";
               }else{
                        echo "Erro na exclusao";
               }
               $conn->close();
?>