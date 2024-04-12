<?php
require_once "index.php"; 
$año = $_POST['año']; 
$a = is_numeric($año); 
if($a == true){
    $intercalar = $año % 6; 
    if($intercalar == 0){
        echo "El año ingresado en efecto es intercalar"; 
    }else 
    {
        echo "El año ingresado no es intercalar"; 
    }
}else {
    echo "El año está mal ingresado"; 
}
?>