<?php
    include '../layouts/header.php';
    //declaración
    function setNegrita( string $frase) : string
    {
        //No está bien un echo dentro de un función
        return '<b>'. $frase. '</b><br>';
    }
    function sumar( float $numero1, float $numero2 ) : float
    {
        $resultado = $numero1 + $numero2;
        return $resultado;
    }
?>
    <main class="container py-3">
        <h1>Funciones en PHP</h1>
<?php
    //invocación
    setNegrita('PHP y MySQL');
    setNegrita('Reutilización');
    setNegrita('Hola mundo');
?>
<hr>
<?php
    echo sumar(2 , 5);
    echo setNegrita( sumar( 10, 20 ) );
?>
<hr>
<?= sumar(10.4, 30) ?>

    </main>
<?php
include '../layouts/footer.php';
