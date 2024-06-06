<?php
    $numero = 73;
    const NOMBRE = 'marcos';
    $minimo = 10000;
    $maximo = 20000;
?>
    <h1>Imprimir en PHP</h1>
<?php
    /* Para imprimir en PHP utilizamos la construcción echo */
    echo 'El número es: ', $numero;
?>
<hr>
<?php
    //echo 'El número máximo es: '.$maximo.' y el número mínimo es: '.$minimo.' pero tu número es: '.$numero;
    echo 'El número máximo es: ',$maximo,' y el número mínimo es: ',$minimo,' pero tu número es: ',$numero;
?>
<hr>
<?php
    $sql = 'SELECT prdNombre, prdPrecio 
              FROM productos 
              WHERE prdPrecio BETWEEN '.$minimo.' AND '.$maximo;
