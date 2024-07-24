<?php

    function altaDeUsuario() : bool
    {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        //$clave = $_POST['clave']; //sin encriptar
        $clave = password_hash( $_POST['clave'], PASSWORD_DEFAULT );

        $link = conectar();
        $sql = "INSERT INTO usuarios
                    VALUES 
                        (
                         default,
                         '".$nombre."',
                         '".$apellido."',
                         '".$email."',
                         '".$clave."',
                         3,
                         1
                        )";
        try {
            return mysqli_query($link, $sql);
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }

    function listarUsuarios() : mysqli_result
    {
        $link = conectar();
        $sql = "SELECT idUsuario, 
                        nombre, apellido, email, 
                        u.idRol, r.rol, activo
                    FROM usuarios AS u
                    JOIN roles AS r 
                      ON u.idRol = r.idRol
                    ORDER BY idUsuario";
        return mysqli_query($link, $sql);
    }

    function modificarClave() : bool
    {
        //capturamos clave actual * sin encriptar
        $clave = $_POST['clave'];
        $newClave = $_POST['newClave'];
        $newClave2 = $_POST['newClave2'];

        /* comparamos que coincidan clave nueva y repite clave  */
        if( $newClave != $newClave2){
            header('location: formModificarClave.php?error=2');
            return false;
        }
        /* En este punto sabemos que la nueva clave y repite clave son iguales */

        /* Obtenemos la clave encritada */
        $claveHash = getPassEncriptada($_SESSION['usuario']['idUsuario']);
        #### Verificamos que no coincidan
        if( !password_verify( $clave, $claveHash ) ){
            //si no coinciden ---> redirección al formulario de modificación
            header('location: formModificarClave.php?error=1');
            return false;
        }
        /* #######
         * En este punto sabemos que la contraseña actual es correcta
         * Y que la clave nueva y la clave repetida coinciden
         * ##### */

        //encriptamos clave nueva
        $claveHash = password_hash( $newClave, PASSWORD_DEFAULT );
        #### modificamos la contraseña
        $link = conectar();
        $sql = "UPDATE usuarios 
                  SET clave = '".$claveHash."'
                  WHERE idUsuario = ".$_SESSION['usuario']['idUsuario'];
        try {
            return mysqli_query($link,$sql);
        }
        catch ( Exception $e ){
            echo $e->getMessage();
            return false;
        }

    }

/**
 * @param int $idUsuario (de la sesión)
 * @return string (clave endriptada)
 */
    function getPassEncriptada( int $idUsuario ) : string
    {
        $link = conectar();
        $sql = "SELECT clave 
                  FROM usuarios 
                  WHERE idUsuario = ".$idUsuario;
        $resultado = mysqli_query($link, $sql);
        $datos = mysqli_fetch_assoc($resultado);
        return $datos['clave'];
    }