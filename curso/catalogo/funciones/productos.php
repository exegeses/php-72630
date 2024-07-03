<?php

    function listarProductos() : mysqli_result
    {
        $link = conectar();
        $sql  = "SELECT p.*, m.mkNombre, c.catNombre 
                    FROM productos AS p,
                         marcas AS m,
                         categorias AS c
                    WHERE p.idMarca = m.idMarca 
                      AND p.idCategoria = c.idCategoria
                    ORDER By p.idProducto";
        return mysqli_query($link, $sql);
    }

    function capturaDesdeForm() : array
    {
        $search['search'] = $_GET['search'] ?? '';
        $search['idMarca'] = $_GET['idMarca'] ?? '';
        $search['idCategoria'] = $_GET['idCategoria'] ?? '';
        return $search;
    }

    function buscarProductos() : mysqli_result
    {
        $search = capturaDesdeForm();
        $link = conectar();
        $sql = "SELECT p.*, m.mkNombre, c.catNombre 
                    FROM productos AS p
                    JOIN marcas AS m
                      ON p.idMarca = m.idMarca
                    JOIN categorias AS c
                      ON p.idCategoria = c.idCategoria
                    WHERE prdNombre LIKE '%".$search['search']."%'";
        // sólo concatenamos $idMarca si NO es vació
        if( $search['idMarca'] != '' ){
            $sql .= " AND p.idMarca = ".$search['idMarca'];
        }
        // sólo concatenamos $idCategoria si NO es vació
        if( $search['idCategoria'] != '' ){
            $sql .= " AND p.idCategoria = ".$search['idCategoria'];
        }
        $sql .= " ORDER BY p.idProducto";

        return mysqli_query($link, $sql);
    }