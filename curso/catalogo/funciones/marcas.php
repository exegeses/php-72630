<?php

    function listarMarcas() : mysqli_result | bool
    {
        $link = conectar();
        $sql = "SELECT * FROM 
                    marcas ORDER BY idMarca";
        return mysqli_query($link, $sql);
    }

    function verMarcaPorID() : array
    {
        $idMarca = $_GET['idMarca'];
        $link = conectar();
        $sql = "SELECT * FROM 
                    marcas 
                    WHERE idMarca = ".$idMarca;
        $resultado = mysqli_query($link, $sql);
        return mysqli_fetch_assoc($resultado);
    }

    function agregarMarca() : bool
    {
        $mkNombre = $_POST['mkNombre'];
        $link = conectar();
        $sql = "INSERT INTO marcas
                        (mkNombre)
                    VALUES 
                        ('".$mkNombre."')";
        try {
            return mysqli_query($link, $sql);
        }catch ( Exception $e ){
            echo $e->getMessage();
            return false;
        }
    }


/*
 * modificarMarca()
 * eliminarMarca()
 * */