<?php
    include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Proceso de un número</h1>

<?php
    $numero = $_POST['numero'];
    if( $numero < 100 ){
        //Bloque de código a ejecutar si la condición es true
?>
        <img src="imgs/ok.png">
<?php
    }else{
?>
        <img src="imgs/error.png">
<?php
    }
?>
    <hr>
<?php
    if( $numero < 100 ){
        echo '<img src="imgs/ok.png">';
    }else{
        echo '<img src="imgs/error.png">';
    }
?>
    <hr>
<?php
    $img = 'error';
    if( $numero < 100 ){
        $img = 'ok';
    }
?>
        <img src="imgs/<?= $img ?>.png">

    <hr>     
<?php
    $img = ( $numero < 100 ) ? 'ok' : 'error';
?>
        <img src="imgs/<?= $img ?>.png">
        
    </main>
<?php
    include '../layouts/footer.php';
