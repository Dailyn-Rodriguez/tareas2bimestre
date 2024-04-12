<?php
require_once "index.php";
$s = $_POST['sorteo']; 
$so = rand(2, 580);
if($so == 39){
    echo "¡¡FELICITACIONES $s !!, HAS GANADO EL SORTEO AMIG@";
}
else {
    echo "Lo lamento no has ganado el sorteo $s"; 
}
?>