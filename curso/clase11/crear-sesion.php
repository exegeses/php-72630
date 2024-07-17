<?php
    // directiva de sesión
    session_start();

    // registramos variables de sesión
    $_SESSION['nombre'] = 'marcos';
    $_SESSION['numero'] = 666;
    $_SESSION['frutas'] = ['manzana', 'naranja', 'pera'];

/*
 * nombre|s:6:"fabian";numero|i:666;
 * frutas|a:3:{i:0;s:7:"manzana";i:1;s:7:"naranja";i:2;s:4:"pera";}
 * */