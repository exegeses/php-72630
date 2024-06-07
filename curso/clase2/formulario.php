<?php
include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Formulario de envío</h1>

        <form action="procesa-datos.php" method="post">
            <input type="text" name="nombre">
            <br>
            <button class="btn btn-danger mt-2">enviar</button>

        </form>


    </main>
<?php
include '../layouts/footer.php';
