<?php

    function login() : void
    {
        $email = $_POST['email'];
        $clave = $_POST['clave']; // * sin encriptar

        $link = conectar();
        $sql = "SELECT idUsuario, nombre, apellido, email, clave, idRol
                    FROM usuarios
                    WHERE email = '".$email."'
                      AND activo = 1";
        $resultado = mysqli_query($link,$sql);
        $cantidad = mysqli_num_rows($resultado);
        /*
         * ## si contidad == 0  ---> error
         * ## si cantidad == 1  ---> ok
         * */
        if( $cantidad == 0 ){
            // redireccion a formLogin.php +  error
            header('location: formLogin.php?error=1');
            return;
        }
        /*
        En este punto sabemos que el e-mail
            ingresado es correcto
        y además que el usuario está activo
         */
        ###¢¢¢ verificamos la contraseña
        $usuario = mysqli_fetch_assoc($resultado);
        if( !password_verify($clave, $usuario['clave']) ){
            // redireccion a formLogin.php +  error
            header('location: formLogin.php?error=1');
            return;
        }
        /*
        Si llegamos a este punto sabemos que el usuario
        se logueo correctamente.
        Por lo tanto podemos comenzar la rutina de autenticación
        */
        ####### RUTINA DE AUTENTICACIÓN
        $_SESSION['login'] = 1;
        $usuario['clave'] = '';
        $_SESSION['usuario'] = $usuario;
        //redirección
        header('location: admin.php');
    }

    function logout() : void
    {
        //Eliminamos variables de sesión (opcional)
        session_unset();
        //Eliminamos la sesión
        session_destroy();
        // redirección con delay
        header('refresh:3;url=index.php');
    }

    function autenticar() : void
    {
        if( !isset($_SESSION['login']) ){
            header('location: formLogin.php?error=2');
        }
    }

    function checkAdmin() : void
    {
        // Si el usuario NO es administrador
        if( $_SESSION['usuario']['idRol'] != 1 ){
            header('location: noAdmin.php');
        }
    }