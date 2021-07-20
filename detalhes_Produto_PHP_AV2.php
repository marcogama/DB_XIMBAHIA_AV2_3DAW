<!DOCTYPE html>
<html>
     <head>
          <!--DETALHE PRODUTO PHP AV2 3DAW
              ALUNO MARCO ANTONIO RIBEIRO GAMA --- MAT.1810478300006-->
     </head>
     <body>

          <?php
               
               $val = ($_GET['val']).toString;
         
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
               $sql="SELECT * FROM PRODUTO WHERE NOME = '".$val."'";
               $resultado=$conn->query($sql);
               if($resultado->num_rows>0){
                       while($row=$resultado->fetch_assoc()){
                               echo "ID:". $row["ID"]."<br>Codigo:".$row["CODBAR"]."<br>Nome:".$row["NOME"].                 
                                    "<br>Categoria:".$row["CATEG"]."<br>Preco de Venda:".$row["PRECO_VENDA"].                
                                    "<br>Estoque".$row["QUANT_EST"]."<br>PESO:".$row["PESO"]."<br>DESCR:".$row["DESCR"].     
                                    "<br>Data de Inclusao:".$row["D_INCL"]."<br>ATIVO:".$row["ATIVO"]."<br><br><img src =                                           '".$row["CODBAR"].".jpg' alt = '".row["NOME"]."'><br><br>";
                       }
               }else{
                        echo "Nenhum resultado";
               }
               $conn->close();
           ?>
      </body>
</html>