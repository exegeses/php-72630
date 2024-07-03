<?php
include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Autoform</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get" class="alert col-6 mx-auto shadow">
            <input type="text" name="dato"
                   class="form-control"
                   placeholder="ingrese un dato">
            <button class="btn btn-info mt-3">enviar</button>
        </form>

<?php
        if( isset( $_GET['dato'] ) ){
            $dato = $_GET['dato'];
?>        
        <article class="alert col-6 mx-auto shadow">
            dato enviado: 
            <?php
                echo $dato;
            ?>
        </article>
<?php
        }
?>

    </main>
<?php
include '../layouts/footer.php';
