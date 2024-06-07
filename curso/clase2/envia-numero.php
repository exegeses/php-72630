<?php
    include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Envía de un número</h1>

        <form action="procesa-numero.php" method="post">

            <input type="number" name="numero">
            <br>
            <button class="btn btn-danger mt-2">enviar</button>

        </form>

    </main>
<?php
    include '../layouts/footer.php';
