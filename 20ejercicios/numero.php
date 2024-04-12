<?php 
require_once "index.php"; 
$a = $_POST['dato1'];
$b = $_POST['dato2'];
$c = $_POST['dato3'];
$d = $_POST['dato4'];
$e = $_POST['dato5'];
$dato1 = is_numeric($a);
$dato2 = is_numeric($b);
$dato3 = is_numeric($c);
$dato4 = is_numeric($d);
$dato5 = is_numeric($e);
if($dato1 == true and $dato2 == true and $dato3 == true and $dato4 == true and $dato5 == true){
    echo "El dato mayor es " . max($a, $b, $c, $d, $e); 
} else {
    echo "Hay algún dato mal guaardado"; 
}

?>