<?php

//Confirma altera produto AV2 3DAW
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

$CODBAR = intval($_GET['c_b']);
$NOME = $_REQUEST["n"];
$NOME_FABR = $_REQUEST["n_f"];
$CATEG = intval($_GET['c']);
$TIPO = intval($_GET['t']);
$PRECO_VENDA = intval($_GET['p_v']);
$QUANT_EST = intval($_GET['q_e']);
$PESO = intval($_GET['p']);
$IMG = $_REQUEST["i"];
$D_INCL = $_REQUEST["d"];
$DESCR = $_REQUEST["d_c"];
$AT1 = $_REQUEST["at1"];
$AT2 = $_REQUEST["at2"];
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
															if(empty($D_INCL)){
																echo "Erro, v9";
															}else{
																if(!preg_match_all("([0-9\/\.\-])",$D_INCL)){
																	echo "Erro, v9.1";
																}else{
                                                                    if(empty($DESCR)){
                                                                        echo "Erro, v10";
                                                                    }else{
                                                                        if(empty($AT1) && empty($AT2){
                                                                            echo "Erro, v11";
                                                                        }else{ 
                                                                            if(isset($AT1)){
                                                                                $ATIVO = 1;
                                                                            }else{
																			    if(isset($AT2){
																				    $ATIVO = 0;
														                        }else{
                                                                                    if((substr($IMG,-4) == $_JPG){
	                                                                                     $STR_TMP = substr($IMG,-$IMG_LARG,-4);
	                                                                                     $IMG = substr_replace
                                                                                                ($STR_TMP,$CODBAR,$IMG);
                                                                                    }else{
                                                                                        if(substr($IMG, -4) != $_JPG){
                                                                                            echo "Erro, v8.1";
                                                                                        }else{
$sql = "UPDATE XIMBAHIA SET NOME =".$NOME.",NOME_FABR = ".$NOME_FABR.",CATEG = ".$CATEG.",TIPO = ".$TIPO.",        
        PRECO_VENDA =".$PRECO_VENDA.",QUANT_EST = ".$QUANT_EST.",PESO =".$PESO.",IMG =".$IMG.",DT_INC =".$D_INCL.",
        DESCR =".$DESCR."ATIVO =".$ATIVO."WHERE CODBAR =".$CODBAR."";
																					    if($conn->query($sql)===TRUE){
                                                                                                echo "Registro alterado com
                                                                                                      sucesso";
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