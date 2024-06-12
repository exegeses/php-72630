<?php
include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Formulario de envío</h1>

        <form action="procesa-dato.php" method="get">
            <input type="text" name="dato" class="form-control">
            <button class="btn btn-success mt-3">enviar</button>
        </form>


    </main>
<?php
include '../layouts/footer.php';
