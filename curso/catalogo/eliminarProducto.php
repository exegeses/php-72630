<?php
    //require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $check = eliminarProducto();
    include 'layouts/header.php';
    include 'layouts/nav.php';
?>

    <main class="container py-4">
        <h1>Baja de un producto</h1>

<?php
    $css = 'danger';
    $mensaje = 'No se pudo eliminar el producto';
    if( $check ){
        $css = 'success';
        $mensaje = 'Producto eliminado correctamente';
    }
?>
        <div class="alert alert-<?= $css ?> p-4 col-8 mx-auto shadow">
            <?= $mensaje ?>
            <a href="adminProductos.php" class="btn btn-dark sep">
                volver al panel
            </a>
        </div>


    </main>

<?php  include 'layouts/footer.php';  ?>