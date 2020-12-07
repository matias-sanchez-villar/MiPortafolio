<?php
    $conexion= mysqli_connect("localhost", "root", "", "registro");
    if(isset($_POST['enviar'])){
        if(strlen($_POST['nombre'])>=1 && strlen($_POST['apellido'])>=1 && strlen($_POST['correo'])>=1 && strlen($_POST['asunto'])>=1 && strlen($_POST['texto'])>=1){
            $nombre= trim($_POST['nombre']);
            $apellido= trim($_POST['apellido']);
            $correo= trim($_POST['correo']);
            $asunto= trim($_POST['asunto']);
            $texto= trim($_POST['texto']);
            $consulta="INSERT INTO contacto (id, nombre, apellido, correo, asunto, mensaje) VALUES ('auto','$nombre','$apellido','$correo','$asunto','$texto')";
            $resultado= mysqli_query ($conexion,$consulta);

            mysqli_close ($conexion);///cerramos la coneccion

            if($resultado){
                header("Location: index.php?enviado=contacto");
            }else {
                header("Location: index.php?error=contacto");
            }
        }
    }
?>