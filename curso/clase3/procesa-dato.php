<?php
include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Proceso de dato enviado</h1>

        <div class="alert shadow">
<?php
        if( isset($_GET['dato']) ){
            $dato = $_GET['dato'];
            echo $dato;
        }
        else{
            echo 'debe enviar el formulario';
        }
?>
        </div>

        <div class="alert shadow">
<?php
        $dato = $_GET['dato'] ?? 'debe enviar el formulario';
        echo $dato;
?>
        </div>

    </main>
<?php
include '../layouts/footer.php';
