<?php
    //require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
    $check = altaDeUsuario();
    include 'layouts/header.php';
    include 'layouts/nav.php';
?>

    <main class="container py-4">
        <h1>Alta de un usuario</h1>

<?php
    $css = 'danger';
    $mensaje = 'No se pudo registrar el usuario';
    if( $check ){
        $css = 'success';
        $mensaje = 'Usuario registrado correctamente';
    }
?>
        <div class="alert alert-<?= $css ?> p-4 col-8 mx-auto shadow">
            <?= $mensaje ?>
            <a href="adminUsuarios.php" class="btn btn-dark sep">
                volver al panel
            </a>
        </div>


    </main>

<?php  include 'layouts/footer.php';  ?>