<?php
    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $marcas = listarMarcas();
    include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Listado de marcas</h1>
<?php
        while( $m = mysqli_fetch_assoc($marcas) ){
            echo $m['idMarca'], ' ', $m['mkNombre'], '<br>';
        }
?>
    </main>
<?php
include '../layouts/footer.php';
