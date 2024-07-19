<?php
    require 'config/config.php';
    require 'funciones/autenticacion.php';
    logout();
    include 'layouts/header.php';
    include 'layouts/nav.php';
?>

    <main class="container py-4">
        <h1>Salir de la aplicación</h1>

        <div class="alert alert-info p-4 col-8 mx-auto shadow">
            Gracias por su visita
        </div>
    </main>

<?php
    include 'layouts/footer.php';
?>