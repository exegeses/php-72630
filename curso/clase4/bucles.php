<?php
    include '../layouts/header.php';
    $marcas = [
        'Zara', 'Tommy', 'Gola',
        'Abercrombie', 'London Hackett', 'Nike',
        'Uniqlo', 'Under Armour', 'Hermés'
    ];
    $cantidad = sizeof($marcas);
?>
    <main class="container py-3">
        <h1>Mostrar datos desde un array</h1>

    <ul class="list-group col-6 mx-auto">
<?php
    for( $n=0; $n < $cantidad; $n++ ){
?>
        <li class="list-group-item
                   list-group-item-action"><?= $marcas[$n] ?></li>
<?php
    }
?>
    </ul>

    </main>
<?php
include '../layouts/footer.php';
