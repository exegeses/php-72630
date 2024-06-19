<?php

#####################
### CRUD de marcas

    function listarMarcas() : mysqli_result
    {
        $link = conectar();
        $sql = "SELECT * FROM marcas 
                    ORDER BY idMarca";
        return mysqli_query( $link, $sql );
    }