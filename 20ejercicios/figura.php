<?php
require_once "index.php";
$tipo = $_POST['tipo'];
$tipos = strtoupper($tipo); 
if($tipos == 'CA'){
    echo "<form action='radio.php' method='post'> ";
    echo "Ingrese el radio <input type='text' name='r'>";
    echo "<input type = 'submit'>";
    
}
elseif($tipos == 'CI'){
    echo "<form action='cuadrado.php' method='post'> ";
    echo "Ingrese un lado <input type='text' name='l'>";
    echo "<input type = 'submit'>";
    
}
elseif($tipos == 'RU'){
    echo "<form action='rectangulo.php' method='post'> ";
    echo "Ingrese el largo <input type='text' name='l'>";
    echo "Ingrese el ancho <input type='text' name='a'>";
    echo "<input type = 'submit'>";
    
}
?>