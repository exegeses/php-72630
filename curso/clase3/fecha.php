<?php
    // configuramos la localidad de la fecha
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Fecha usando PHP</h1>

<?php
    /* mostrar fecha actual
        formato:  06/06/2024
    */
    echo date('d-m-Y H:i:s');
?>
<hr>
<?php
    //día de la semana  0 para Domingo  |  1 para Lunes | 2 para Martes
    $diaSemana = date('w');
    // echo $diaSemana;
    switch ( $diaSemana ){
        case 0:
            echo 'Domingo';
            break;
        case 1:
            echo 'Lunes';
            break;
        case 2:
            echo 'Martes';
            break;
        case 3:
            echo 'Miércoles';
            break;
        case 4:
            echo 'Jueves';
            break;
        case 5:
            echo 'Viernes';
            break;
        default:
            echo 'Sábado';
            break;
    }
?>
<hr>
<?php
    $nombreDiaSemana = match ( $diaSemana ){
       '0' => 'Domingo',
       '1' => 'Lunes',
       '2' => 'Martes',
       '3' => 'Miércoles',
       '4' => 'Jueves',
       '5' => 'Viernes',
       default => 'Sábado'
    };
    echo $nombreDiaSemana;
?>
<hr>
<?php
    $semana = [
                'Domingo', 'Lunes', 'Martes',
                'Miércoles', 'Jueves', 'Viernes',
                'Sábado'
              ];
    echo $semana[$diaSemana];
?>

    </main>
<?php
include '../layouts/footer.php';
