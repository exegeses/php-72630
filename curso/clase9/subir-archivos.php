<?php
include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Publicación de archivos</h1>

        <div class="alert p-3 shadow col-8 mx-auto">
<?php
    $prdImagen = $_FILES['prdImagen'];
    echo '<pre class="fs-5">';
        print_r($prdImagen);
    echo '</pre>';
?>

    <hr>
    Nombre original: <?= $prdImagen['name'] ?> <br>
    Código error: <?= $prdImagen['error'] ?> <br>
    <hr>      
<?php
    $dir = 'productos/';
    $archivo = $_FILES['prdImagen']['name'];
    $tmp = $_FILES['prdImagen']['tmp_name'];
    ## renombrado: timestamp + extensión
    $ext = pathinfo($archivo, PATHINFO_EXTENSION );
    $prdImagen = time().'.'.$ext;
    ###### movemos el archivo
    move_uploaded_file( $tmp, $dir.$prdImagen );
    echo $prdImagen;
?>            
            
        </div>

    </main>
<?php
include '../layouts/footer.php';
