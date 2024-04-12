<?php
require_once "index.php";
$cadena1 = $_POST['cadena']; 
$cadenaMin = strtolower($cadena); 
$cadenaMay = strtoupper($cadena); 
$tamaCad = 0;
for($i = 0; $i < strlen($cadena); $i++){
    $tamaCad = $tamaCad + 1; 
}
echo "<br>La dimension de la cadena es de ". $tamaCad; 
echo "<br>la cadena en minusculas luce así ". $cadenaMin; 
echo "<br>la cadena en mayúsculas luce así ". $cadenaMay; 
?>