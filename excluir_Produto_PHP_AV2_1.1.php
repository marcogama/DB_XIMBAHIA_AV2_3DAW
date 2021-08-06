<?php
    //MARCO ANTONIO RIBEIRO GAMA
	//MAT 1810478300006
	//EXCLUI PRODUTO AV2 3DAW AV2
	
	$p = intval($_GET['p']);
         
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
               $sql="SELECT NOME, NOME_FABR, CATEG, TIPO, PRECO_VENDA, QUANT_EST, PESO, DESCR, IMG, D_INCL, ATIVO  FROM PRODUTO 
                     WHERE CODBAR = '".$p."'";
               $resultado=$conn->query($sql);
               if($resultado->num_rows>0){
                        while($dados = $resultado->fetch_assoc()){    
                                echo "NOME DO PRODUTO:<input type = 'text' name = 'nome' id = 'nome' value = '".$dados["NOME"]."
                                     '><br>NOME DO FABRICANTE:<input type = 'text' name = 'nome_Fabr' id = 'n_Fabr' value = 
                                     '".$dados["NOME_FABR"]."'><br>CATEGORIA:<input type = 'text' name = 'categ' id = 
                                     'cat' value = '".$dados["CATEG"]."'><br>TIPO:<input type = 'text' name = 'tipo' id = 
                                     'tipo' value = '".$dados["TIPO"]."'><br>PREÇO DE VENDA:<input type = 'text' name =
                                     'preco_Venda' id = 'prec_V' value = '".$dados["PRECO_VENDA"]."'><br>QUANTIDADE ESTOQUE:
                                     <input type = 'text' name = 'quant_Est' id = 'quant_Est' value = 
                                     '".$dados["QUANT_EST"]."'><br>PESO:<input type = 'text' name = 'peso' id = 'peso' value = 
                                     '".$dados["PESO"]."'><br>FOTO:<input type = 'file' name = 'img' id = 'img' value = 
                                     '".$dados["IMG"]."'><br>DATA DA INCLUSAO:<input type = 'text' name = 'd_Incl' id = 
                                     'd_Incl' value = '".$dados["D_INCL"]."'><br>DESCRICAO:<input type = 'text' name = 
                                     'descr' id = 'descr' value = '".$dados["DESCR"]"'><br>";
                        }
					    if('ATIVO' === true){
							    $verif = "checked";
			                    $not_verif = "";
					    }else{
							    $verif = "";
							    $not_verif = "checked";
						}
	    				echo "ATIVO:<input type = 'radio' name = 'at' id = 'at1'".$verif.">";
						echo "NAO-ATIVO:<input type = 'radio' name = 'at' id = 'at2'".$not_verif."><br><br>";
                        echo "<input type = 'submit' value = 'excluir'>";
						echo "<p id = 'mensagem'></p>";
               }else{
                        echo "Nenhum resultado";
               }
               $conn->close();
?>