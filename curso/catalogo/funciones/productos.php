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


    /**
    * función para subir archivos
    * @return string
    */
    function subirImagen() : string
    {
        //si NO enviaron archivo
        $prdImagen = 'noDisponible.svg';

        //ENVIARON archivo
        if( $_FILES['prdImagen']['error'] == 0 ){
            $dir = 'productos/';
            $archivo = $_FILES['prdImagen']['name'];
            $tmp = $_FILES['prdImagen']['tmp_name'];
            ## renombrado: timestamp + extensión
            $ext = pathinfo($archivo, PATHINFO_EXTENSION );
            $prdImagen = time().'.'.$ext;
            ###### movemos el archivo
            move_uploaded_file( $tmp, $dir.$prdImagen );
        }
        return $prdImagen;
    }

    function agregarProducto() : bool
    {
        $prdNombre = $_POST['prdNombre'];
        $prdPrecio = $_POST['prdPrecio'];
        $idMarca = $_POST['idMarca'];
        $idCategoria = $_POST['idCategoria'];
        $prdDescripcion = $_POST['prdDescripcion'];
        $link = conectar();
        $prdImagen = subirImagen();

        $sql = "INSERT INTO productos
                    (
                        prdNombre,
                        prdPrecio,
                        idMarca,
                        idCategoria,
                        prdDescripcion,
                        prdImagen,
                        prdActivo
                    )
                VALUES
                    (
                        '".$prdNombre."',
                        ".$prdPrecio.",
                        ".$idMarca.",
                        ".$idCategoria.",
                        '".$prdDescripcion."',
                        '".$prdImagen."',
                        default 
                    )";
        try {
            return mysqli_query($link, $sql);
        }
        catch ( Exception $e ){
            echo $e->getMessage();
            return false;
        }
    }