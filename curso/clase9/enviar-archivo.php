<?php
include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Publicación de archivos</h1>

        <div class="alert p-3 shadow col-8 mx-auto">
            <form action="subir-archivos.php" method="post" enctype="multipart/form-data">
                <input type="file" name="prdImagen" class="form-control">
                <button class="btn btn-info mt-3">Publicar</button>
            </form>
        </div>

    </main>
<?php
include '../layouts/footer.php';
