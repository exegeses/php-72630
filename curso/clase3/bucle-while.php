<?php
include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Bucle while()</h1>
<?php
    $n = 1;
    while( $n < 15 ){
        echo $n,'<br>';
        $n++; // $n = $n + 1;
    }
?>
<hr>
        <select name="diaMes">
<?php
        $d = 1;
        while( $d <= 31 ){
//            echo '<option value="',$d,'">',$d,'</option>';
?>
            <option value="<?= $d ?>"><?= $d ?></option>
<?php                
            $d++;
        }
?>

        </select>  


    </main>
<?php
include '../layouts/footer.php';
