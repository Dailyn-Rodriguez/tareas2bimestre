<?php
    require_once "index.php";
    if ($nombre = $_POST['nombre'])
    {
    echo "<b>Hola, $nombre!";
    echo "<b>Hola, como estas,espero que bien, $nombre!";
    }
?>