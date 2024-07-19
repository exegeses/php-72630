<?php
    ####### archivo de configuración
    session_start();

    date_default_timezone_set('America/Argentina/Buenos_Aires');

    /* enail */
    const HOST = 'smtp.gmail.com';

    /* imagen activo | desactivado */
    function checkBooleano( bool $activo ) : string
    {
        $img = '<i class="bi bi-ban text-danger"></i>';
        if( $activo ){
            $img = '<i class="bi bi-check-circle text-success"></i>';
        }
        return $img;
    }