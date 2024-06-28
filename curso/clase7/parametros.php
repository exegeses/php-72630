<?php
    include '../layouts/header.php';
    function foo( int $x, int $y = 0 ) : int
    {
        return $x+$y;
    }
    /* multiples parámetros */
    function foobar( ...$x )
    {
        print_r($x). '<br>';
        return 'listo';
    }
?>
    <main class="container py-3">
        <h1>pasar parámetros a funciones</h1>
<?php
    /*  ArgumentCountError: Too few arguments to function foo(),
        0 passed and exactly 1 expected  */
    // echo foo();
    echo foo(10, 5);
    echo foobar('manzana');
    echo foobar('hola', 'chau', 10);
?>
    </main>
<?php
include '../layouts/footer.php';
