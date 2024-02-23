<?php
    require("conexion.php");
    $nombre = $_POST['nombre'];
    $apellido_pa = $_POST['apellido_pa'];
    $apellido_ma = $_POST['apellido_ma'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $pass_cifrado=password_hash($contrasena, PASSWORD_DEFAULT, array("cost"=>15));

    $sql = "INSERT INTO usuarios (Nombre, Apellido_paterno, Apellido_materno, Correo, Contraseña) VALUES(:nom, :ape_pa, :ape_ma, :correo, :contra)";
    $resultado = $base->prepare($sql);
    $resultado->execute(array(":nom" => $nombre, ":ape_pa" => $apellido_pa, ":ape_ma" => $apellido_ma, ":correo" => $correo, ":contra" => $pass_cifrado));

    header("Location:crud.php");
?>