<!DOCTYPE html>
<html>
     <head>
          <!--LISTAR PHP AV2 3DAW
              ALUNO MARCO ANTONIO RIBEIRO GAMA --- MAT.1810478300006-->
     </head>
     <body>

          <?php

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
               $sql="SELECT ATIVO,CODBAR,NOME,CATEG,PRECO_VENDA,QUANT_EST FROM PRODUTO";
               $resultado=$conn->query($sql);
               if($resultado->num_rows>0){
                       while($row=$resultado->fetch_assoc()){
                               if($row["ATIVO"] == TRUE){
                                       echo "Codigo:".$row["CODBAR"]."-Nome:<input type = 'submit' name =                                                                   'DETALHES_DO_PRODUTO' value = ".$row["NOME"]."formaction =                                                                       'detalhes_Produto_JS_AV2.html?q=value' formtarget = '_blank'>                 
                                            -Categoria:".$row["CATEG"]."-Preco de Venda:".$row["PRECO_VENDA"].             
                                            "-Estoque".$row["QUANT_EST"]."<br><br>";
                               }
                       }
               }else{
                        echo "Nenhum resultado";
               }
               $conn->close();
           ?>
      </body>
</html>