<?php

$link = mysqli_connect(
        'localhost',
        'root',
        'root',
        'catalogo72630'
                );
$sql = "SELECT * FROM 
                    marcas ORDER BY idMarca";
$result = mysqli_query($link, $sql);

echo '<pre>';
print_r($result);
echo '</pre>';

/*$arr = mysqli_fetch_assoc($result);
echo '<pre>';
print_r($arr);
echo '</pre>';
*/
//$x = mysqli_fetch_array($result);
//$x = mysqli_fetch_row($result);
//$x = mysqli_fetch_object($result);
$x = mysqli_fetch_all($result);
echo '<pre>';
    print_r($x);
echo '</pre>';
//echo $x->mkNombre;