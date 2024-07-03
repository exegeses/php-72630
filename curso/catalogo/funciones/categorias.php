<?php

    function listarCategorias() : mysqli_result
    {
        $link = conectar();
        $sql = "SELECT * FROM categorias
                    ORDER BY idCategoria";
        return mysqli_query($link, $sql);
    }