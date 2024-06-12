<?php
include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Arrays en PHP</h1>
<?php
    $marcas = [
                'Zara', 'Tommy', 'Gola',
                'Abercrombie', 'London Hackett', 'Nike'
              ];
    echo $marcas[4];
?>
<pre class="alert shadow">
    <?php
        print_r($marcas);
    ?>
</pre>
<hr>
<?php
    $pilotos = [
                1 => 'Max Verstappen',
                11 => 'Segio Pérez',
                4 => 'Lando Norris',
                63 => 'George Russell',
                44 => 'Lewis Hammilton',
                16 => 'Charles Leclerc'
               ];
?>
<pre class="alert shadow">
    <?php
    print_r($pilotos);
    ?>
</pre>
<?= $pilotos[4]; ?>
<hr>
<?php
    $capitales = [
                    'Argentina'=>'Buenos Aires',
                    'Brasil'=>'Brasilia',
                    'Chile'=>'Santiago',
                    'Venezuela'=>'Caracas',
                    'Uruguay'=>'Montevideo',
                    'Paraguay'=>'Asunción'
                ];
?>
<pre class="alert shadow">
<?php
    print_r($capitales);
?>
</pre>
    <?= $capitales['Paraguay'] ?>

    </main>
<?php
include '../layouts/footer.php';
