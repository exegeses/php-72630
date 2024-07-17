<?php
    session_start();

    // eliminamos una variable de sesión
    unset($_SESSION['numero']);

    // eliminamos TODAS las variables de sesión
    session_unset();

    // Eliminamos la sesión
    session_destroy();