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

$NOME = $_REQUEST["n"];
$NOME_FABR = $_REQUEST["n_f"];
$CATEG = intval($_GET['c']);
$TIPO = intval($_GET['t']);
$PRECO_VENDA = intval($_GET['p_v']);
$QUANT_EST = intval($_GET['q_e']);
$PESO = intval($_GET['p']);
$IMG = $_REQUEST["i"];
$DT_INC = $_REQUEST[""];
$AT1 = $_REQUEST[""];
$AT2 = $_REQUEST[""];
$IMG = strtolower($IMG);
$IMG_LARG = strlen($IMG);
$_JPG = ".jpg";

if(empty($NOME)){
	echo "Erro, v1";
}else{
	if (!preg_match_all("/[A-Z,.]/i",$NOME)){
			echo "Erro, v1.2";
	}else{
		if(empty($NOME_FABR)){
			echo "Erro, v2";
		}else{
			if(!preg_match_all("/[A-Z,.]/i",$NOME_FABR)){
				echo "Erro, v2.1";
			}else{
				if(empty($CATEG)){
					echo "Erro, v3";
				}else{
					if(!preg_match_all("([0-9])",$CATEG)){
						echo "Erro, v3.1";
					}else{
						if(empty($TIPO)){
							echo "Erro, v4";
						}else{
							if(!preg_match_all("([0-9])",$TIPO)){
								echo "Erro, v4.1";
							}else{
								if(empty($PRECO_VENDA)){
									echo "Erro, v5";
								}else{
									if(!preg_match_all("([0-9])",$PRECO_VENDA)){
										echo "Erro, v5.1";
									}else{
										if(empty($QUANT_EST)){
											echo "Erro, v6";
										}else{
											if(!preg_match_all("([0-9])",$QUANT_EST)){
												echo "Erro, v6.1";
											}else{
												if(empty($PESO){
													echo "Erro, v7";
												}else{
													if(!preg_match_all("([0-9])",$PESO)){
														echo "Erro, v7.1";
													}else{
														if(empty($IMG)){
															echo "Erro, v8";
														}else{
															if(empty($DT_INC)){
																echo "Erro, v9";
															}else{
																if(!preg_match_all("([0-9\/\.\-])",$DT_INC)){
																	echo "Erro, v9.1";
																}else{
																	if(empty($AT1) && empty($AT2){
																		echo "Erro, v9";
																	}else{
																		if(isset($AT1)){
	                                                                        $ATIVO = 1;
                                                                        }else{
																			if(isset($AT2){
																				$ATIVO = 0;
																			}else{
																				$sql = "INSERT INTO PRODUTO(NOME, NOME_FABR, CATEG, TIPO, PRECO_VENDA,
																				        QUANT_EST, PESO, IMG, DT_INC, ATIVO)VALUES("$NOME.",".$NOME_FABR.","
																						.$CATEG.",".$TIPO.",".$PRECO_VENDA.",".$QUANT_EST.",".$PESO.","
																						.$IMG.",".$DT_INC.",".$ATIVO.")";
                                                                                $sql .= "SELECT CODBAR FROM XIMBAHIA WHERE NAME = ".$NAME."";
                                                                                $CODBAR = $conn->query($sql);
																				if((substr($IMG,-4) == $_JPG){
	                                                                                    $STR_TMP = substr($IMG,-$IMG_LARG,-4);
	                                                                                    $IMG = substr_replace($STR_TMP,$_SERVER_REQUEST[$CODBAR],$IMG);
																						$sql .= "UPDATE XIMBAHIA SET CODBAR = ".$IMG." WHERE NAME = ".$NAME"";
                                                                                }else{
																					if(substr($IMG, -4) != $_JPG){
																						echo "Erro, v8.1";
																					}else{
																					    if($conn->mult-query($sql)===TRUE){
                                                                                                echo "Registro inserido com sucesso";
                                                                                        }else{
																						    echo "Erro, registro";
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
$conn->close();
?>
