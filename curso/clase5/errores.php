<?php
include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>gestión de errores</h1>

<?php
    $n = 32;

    try {
        // intenemos hacer esto:
        $resultado = $n / 0;
    } catch ( Error $error ){
        //si fallara el bloque try, hacemos esto otro
        echo 'sucedió un error<br>';
        echo 'mensaje: ', $error->getMessage(), '<br>';
        echo 'archivo: ', $error->getFile(), '<br>';
        echo 'línea: ', $error->getLine(), '<br>';
        //Después de lo redirección o mensaje personalizado
    }



?>        
        
    </main>
<?php
include '../layouts/footer.php';
