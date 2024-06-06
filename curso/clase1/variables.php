<?php
    //declaración de variables $
    $numero = 42;
    $curso = 'Desarrollo web PHP y MySQL';
    //Declaración de constantes
    const NOMBRE = 'marcos';
    const USUARIO_DB = 'root';
?>
    <h1>Variables y constantes en PHP</h1>
<?php
    echo $curso;
?>
<hr>
<?php
    echo $numero;
    $numero = 73;
    echo '<br>';
    echo $numero;
?>
<hr>
<?php
    echo NOMBRE;
    //NOMBRE = 'no se puede';


