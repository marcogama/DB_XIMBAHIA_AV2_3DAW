<!DOCTYPE html>
<html>
     <head>
          <!--INCLUIR_AV2_3DAW
              ALUNO MARCO ANTONIO RIBEIRO GAMA MAT.1810478300006-->
          <meta charset = "UTF-8">
		  <title>INCLUIR PRODUTOS JS</title>
          <script>
                 function incluir_Produtos(){
                          
                      let NOME, NOME_FABR, CATEG, TIPO, PRECO_VENDA, QUANT_EST, PESO, IMG, D_INCL, DESCR, AT1, AT2;
                      let ALPHA = /([A-Z]|.)/gi, DIGIT =/([0-9]|,)/g, DATE = /([0-9]|\/|.|-)/g;
                       
                      NOME = document.getElementById("nome");
                      NOME_FABR = document.getElementById("n_Fabr");
                      CATEG = document.getElementById("cat");
                      TIPO = document.getElementById("tipo");
                      PRECO_VENDA = document.getElementById("prec_V");
                      QUANT_EST = document.getElementById("quant_Est");
                      PESO = document.getElementById("peso");
                      IMG = document.getElementById("img");
                      D_INCL = document.getElementById("d_Incl");
                      DESCR = document.getElementById("descr");
                      AT1 = document.getElementById("at1"); 
                      AT2 = document.getElementById("at2");
                       
                      if((NOME == "") || (NOME != NOME.match(ALPHA))){
                           document.getElementById("mensagem").innerHTML = "PREENCHA O NOME, APENAS COM LETRAS";
                      }else{
                            if((NOME_FABR == "") || (NOME_FABR != NOME_FABR.match(ALPHA))){
                                 document.getElementById("mensagem").innerHTML = "PREENCHA O NOME DO FABRICANTE, COM LETRAS";
                            }else{
                                  if((CATEG == "") || (CATEG != CATEG.match(DIGIT))){
                                       document.getElementById("mensagem").innerHTML = "SELECIONE UMA CATEGORIA";
                                  }else{
                                        if((TIPO == "") || (TIPO != TIPO.match(DIGIT))){
                                             document.getElementById("mensagem").innerHTML = "SELECIONE UM TIPO";
                                        }else{
                                              if((PRECO_VENDA == "") || (PRECO_VENDA != PRECO_VENDA.match(DIGIT))){
                                                   document.getElementById("mensagem").innerHTML = "DIGITE O PRE??O, 00,00";
                                              }else{
                                                    if((QUANT_EST == "") || (QUANT_EST != QUANT_EST.match(DIGIT))){
                                                         document.getElementById("mensagem").innerHTML = 
                                                         "DIGITE A QUANTIDADE EM ESTOQUE";
                                                    }else{
                                                          if((PESO == "") || (PESO != PESO.match(DIGIT))){
                                                               document.getElementById("mensagem").innerHTML = 
                                                               "DIGITE O PESO, 00,00";
                                                          }else{
                                                                if(IMG == ""){
                                                                     document.getElementById("mensagem").innerHTML = 
                                                                     "DIGITE O NOME DO ARQUIVO JPG";
                                                                }else{
                                                                      if((D_INCL == "") || (D_INCL != D_INCL.match(DATE))){
                                                                         document.getElementById("mensagem").innerHTML =
                                                                         "SELECIONE A DATA";
                                                                      }else{
                                                                            if((DESCR == "")){
                                                                                 document.getElementById("mensagem").
                                                                                 innerHTML ="DESCREVA O PRODUTO";
                                                                            }else{
                                                                                  if((AT1 == null) && (AT2 == null)){
                                                                                       document.getElementById("mensagem").
                                                                                       innerHTML =
                                                                                       "SELECIONEATIVO OU NAO-ATIVO";
                                                                                  }else{
                                                                                        const xmlhttp = new XMLHttpRequest();
                                                                                        xmlhttp.onreadystatechange =
                                                                                        function(){
                                                                                             if (this.readyState == 4 &&
                                                                                                 this.status == 200){
                                                                                                  document.getElementById
                                                                                                  ("aqui").innerHTML = this.
                                                                                                  responseText;
                                                                                             }
                                                                                        }
xmlhttp.open("GET","listar_Produto_PHP_AV2.php?p="+NOME"n_f="+NOME_FABR"c="+CATEG"t="+TIPO"p_v="+PRECO_VENDA"q_e="+QUANT_EST
             "p="+PESO"i="+IMG"d="+D_INCL"d_c="+DESCR"at1="+AT1"at2="+AT2, true);
xmlhttp.send();
                                                                                  }
                                                                            }
                                                                      }
                                                                }
                                                          }
                                                    }
                                              }
                                        }
                                  }
                            }
                      }
                 }
              
                function mostra_Op(str){
                    if(str.length > 0){
                        const xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function(){
                            if(this.readyState == 4 && this.status == 200){
                                if(document.getElementById("categoria").value == str){
                                    document.getElementById("categoria").innerHTML = this.reponseText;
                                }else{
                                    document.getElementById("tipo_Tipo").innerHTML = this.responseText;
                                }
                            }
                        }
                        xmlhttp.open("GET","tag_Op_PHP_AV2.php", true);
                        xmlhttp.send();
                    }
                }
         </script>
     </head>
     <body>
          <form action = "" onsubmit = "incluir_Produtos()">
              <fieldset>
                       <legend>INCLUIR PRODUTOS</legend>
                              NOME DO PRODUTO:<input type = "text" name = "nome" id = "nome">
                              NOME DO FABRICANTE:<input type = "text" name = "nome_Fabr" id = "n_Fabr">
                              <label for = "CATEG">SELECIONE UMA CATEGORIA:</label><br>
                              <select name = "CATEG" id = "cat">
                                     <option value="categoria" onclick = "mostra_Op(this.value)"></option>
                                     <p id = "categoria"></p>
                              </select>
                              <label for = "tipo">SELECIONE O TIPO DO PRODUTO</label>
                              <select name = "tipo" id = "tipo">
                                     <option value="tipo" onclick = "mostra_Op(this.value)"></option>
                                     <p id = "tipo_Tipo"></p>
                              </select>
                              PRE??O DE VENDA:<input type = "text" name = "preco_Venda" id = "prec_V">
                              QUANTIDADE ESTOQUE:<input type = "text" name = "quant_Est" id = "quant_Est">
                              PESO:<input type = "text" name = "peso" id = "peso">
                              FOTO:<input type = "file" name = "img" id = "img">
                              DESCRICAO:<input type = "text" name = "descr" id = "descr">
                              DATA DA INCLUSAO:<input type = "text" name = "dt_Incl" id = "dt_Incl">
                              <input type = "radio" name = "at" id = "at1" value = "true">
                              <label for = "AT1">ATIVO</label>
                              <input type = "radio" name = "at" id = "at2" value = "false">
                              <label for = "AT2">NA0-ATIVO</label>
              </fieldset>
              <br><br>
              <input type = "submit" value = "enviar">
         </form> 
         <p id = "mensagem"></p>
     </body>
</html>