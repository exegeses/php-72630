<?php
    // directiva de sesión
    session_start();

    echo $_SESSION['nombre'];
    $frutas = $_SESSION['frutas'];
    $cant = count($frutas);
    for( $x=0; $x<$cant; $x++ ){
        echo $frutas[$x], '<br>';
    }