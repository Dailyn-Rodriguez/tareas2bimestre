<?php 
require_once "index.php"; 
$a = $_POST['dato1'];
$b = $_POST['dato2'];
$d = 0; 
$f = 0; 
$dato1 = is_numeric($a);
$dato2 = is_numeric($b);
if($dato1 == true and $dato2 == true){
    for($i = 0; $i < $b; $i++){
        $d = $d + $a;
        $f= $f + 1;  
        echo "<br>$a x $d =  $d";
    }
}
else{
    echo "Hay algun dato mal ingresado"; 
}
?>