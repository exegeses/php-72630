<?php
    require 'config/config.php';
    require 'funciones/autenticacion.php';
        autenticar();
    include 'layouts/header.php';
    include 'layouts/nav.php';
?>

    <main class="container py-4">
        <h1>¡Advertencia!</h1>

        <div class="alert alert-warning p-4 col-8 mx-auto shadow">
            <i class="bi bi-exclamation-triangle fs-3"></i>
            &nbsp;
            Debe ser administrador para realizar esta tarea
        </div>
    </main>

<?php
    include 'layouts/footer.php';
?>