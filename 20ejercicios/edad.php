<?php 
require_once "index.php"; 
$edad = $_POST['edad']; 
$dato = is_numeric($edad); 
if($dato == true){
    if($edad >= 15){
        echo "Usted es mayor de edad";
    }
    else {
        echo "usted no es mayor de edad"; 
    }
}
?>