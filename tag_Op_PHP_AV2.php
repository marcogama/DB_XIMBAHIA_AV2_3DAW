<?php
$p = $_REQUEST["p"];
$a[] = 1;
$a[] = 2;
$a[] = 3;
$a[] = 4;
$a[] = 5;
foreach($a as $val){
        echo "<option value = ".$val.">".$val."</option>"
}
?>