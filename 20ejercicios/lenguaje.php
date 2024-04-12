<?php 
require_once "index.php";
$lenguaje = $_POST['lenguaje'];
$texto = str_replace(["Buenos dias","Como estas","Mucho gusto","Es un placer","Gracias"], '****', $lenguaje);
echo "Escribiste: $texto";
?>
