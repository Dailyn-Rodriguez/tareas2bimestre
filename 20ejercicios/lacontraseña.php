<?php 
require_once "index.php";
function generatePassword($length)
{
    $key ="";
    $pattern = "abcdefghijklmnñopqrstuvwyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ0123456789/.#:-$&";
    $max = strlen($pattern)-1;
    for($i = 0; $i < $length; $i++)
     {
        $key .= substr($pattern,mt_rand(0,$max), 1);
    }
    return $key;
}
$digito = $_POST^['digios'];
$digito = is_numeric($digito);
if($digito == true)
 {
    echo " tu nueva contraseña es " . generatePassword($digito);

}
?>
