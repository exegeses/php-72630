<?php
    include '../layouts/header.php';
    ### esto va en una función
    //utilizamos la función mysqli_connect()
    $link = mysqli_connect(
            'localhost',
            'root',
            'root',
            'catalogo72630'
    );

    #### esto va en una función
    $sql = "SELECT * FROM categorias
                ORDER BY idCategoria";
    $categorias = mysqli_query( $link, $sql );
?>
    <main class="container py-3">
        <h1>Listado de categorías</h1>

<?php
    ### Función auxiliar para convertir
    # 1 (un) elemento del objeto en un array asociativo
    while( $categoria = mysqli_fetch_assoc($categorias) ) {
        echo $categoria['idCategoria'], ' ', $categoria['catNombre'], '<br>';
    }

?>

    </main>
<?php
include '../layouts/footer.php';
