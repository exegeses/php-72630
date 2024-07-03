<?php
    //require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    require 'funciones/categorias.php';
    require 'funciones/productos.php';
    $marcas = listarMarcas();
    $categorias = listarCategorias();
    //$productos = listarProductos();
    $productos = buscarProductos();
    $search = capturaDesdeForm();
    include 'layouts/header.php';
    include 'layouts/nav.php';
?>

    <main class="container py-4">

        <h1>Catálogo de productos</h1>

        <!-- buscador de productos -->
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <div class="row g-3">
            <div class="col-sm-7">
                <input type="text" name="search" 
                       value="<?= $search['search'] ?>"
                       class="form-control" placeholder="Nombre de producto">
            </div>
            <div class="col-sm">
                <select name="idMarca" class="form-select">
                    <option value="">Todas las Marcas</option>
    <?php
            while( $marca = mysqli_fetch_assoc( $marcas ) ){
                $selected = ( $marca['idMarca'] == $search['idMarca'] ) ? 'selected':'';
    ?>                    
                    <option <?= $selected ?> value="<?= $marca['idMarca'] ?>"><?= $marca['mkNombre'] ?></option>
    <?php
            }
    ?>                    
                </select>
            </div>
            <div class="col-sm">
                <select name="idCategoria" class="form-select">
                    <option value="">Todas las Categoría</option>
        <?php
                while( $categoria = mysqli_fetch_assoc( $categorias ) ){
                    $selected = ( $categoria['idCategoria'] == $search['idCategoria'] ) ? 'selected':'';
        ?>
                    <option <?= $selected ?> value="<?= $categoria['idCategoria'] ?>"><?= $categoria['catNombre'] ?></option>
        <?php
                }
        ?>
                </select>
            </div>
        </div>
        <div class="row g-3 mt-1">
            <button class="btn btn-dark">buscar</button>
        </div>
        </form>
        
<?php
        if( $search != '' ){
?>        
        <div class="row g-3 mt-3">
            búsqueda realizada: <?= $search['search'] ?>
        </div>
<?php
        }
?>

        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4 py-5">
<?php
        while( $producto = mysqli_fetch_assoc( $productos ) ){
?>
            <div class="col card mx-2 pt-2">
                <img src="productos/<?= $producto['prdImagen'] ?>" class="card-img-top">
                <div class="card-body">
                    <spam class="fs-4"><?= $producto['prdNombre'] ?></spam>
                    <span class="d-block sep m-3"><?= $producto['mkNombre'] ?>
                                                -
                                                  <?= $producto['catNombre'] ?>
                    </span>
                    <span class="d-block sep precio3">$<?= $producto['prdPrecio'] ?></span>
                    <a href="#!" class="btn btn-outline-secondary sep mt-4">
                        ver detalle
                    </a>
                </div>
            </div>
<?php
        }
?>
        </div>
    </main>

<?php
    include 'layouts/footer.php';
?>