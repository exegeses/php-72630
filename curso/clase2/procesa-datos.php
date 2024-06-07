<?php
    include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Proceso de datos desde un form</h1>
<?php
    //Mostrar el dato enviado por el formulario
    $nombre = $_POST['nombre'];
    echo $nombre;
?>

    </main>
<?php
    include '../layouts/footer.php';
