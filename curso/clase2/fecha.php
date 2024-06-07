<?php
include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Fecha usando PHP</h1>

<?php
    /* mostrar fecha actual
        formato:  06/06/2024
    */
    echo date('d-m-Y', $timestamp = time());
?>


    </main>
<?php
include '../layouts/footer.php';
