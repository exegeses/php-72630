<?php
    include '../layouts/header.php';
    function isPar( int $numero ) : bool|string
    {
        if( $numero %2 == 0 ){
            //return true;
            return 'es par';
        }
        //return false;
        return 'No es par';
    }
?>
    <main class="container py-3">
        <h1>Funciones en PHP</h1>
<?= isPar( 9 ) ?>

    </main>
<?php
include '../layouts/footer.php';
