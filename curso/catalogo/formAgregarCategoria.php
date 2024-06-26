<?php
    //require 'config/config.php';
    include 'layouts/header.php';
    include 'layouts/nav.php';
?>

    <main class="container py-4">
        <h1>Alta de una categoría</h1>

        <div class="alert p-4 col-8 mx-auto shadow">
            <form action="agregarCategoria.php" method="post">
                <div class="form-group">
                    <label for="catNombre">Nombre de la categoría</label>
                    <input type="text" name="catNombre"
                           class="form-control" id="catNombre" required>
                </div>

                <button class="btn btn-dark my-3 px-5">Agregar categoría</button>
                <a href="adminCategorias.php" class="btn btn-outline-secondary sep">
                    Volver a panel de categorías
                </a>
            </form>
        </div>

    </main>

<?php  include 'layouts/footer.php';  ?>