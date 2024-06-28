<?php

    function listarProductos() : mysqli_result
    {
        $link = conectar();
        $sql  = "SELECT * FROM
                    productos
                      ORDER BY idProducto";
        return mysqli_query($link, $sql);
    }