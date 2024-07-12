<?php

    const SERVER    = 'localhost';
    const USUARIO   = 'root';
    const CLAVE     = 'root';
    const BASE      = 'catalogo72630';

    function conectar() : mysqli | false
    {
        try {
            return mysqli_connect(
                    SERVER,
                    USUARIO,
                    CLAVE,
                    BASE
                );
        }catch ( Exception $e ){
            //redirección a página con mensaje de error
            return false;
        }

    }
