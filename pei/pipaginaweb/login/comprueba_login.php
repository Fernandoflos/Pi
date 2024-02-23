<?php
    try {
            require("conexion.php");
            $login = htmlentities(addslashes($_POST["usuario"]));
            $password = htmlentities(addslashes($_POST["password"]));
            $contador = 0;

            $base = new PDO("mysql:host=localhost; dbname=pruebas", "root", "");
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT * FROM usuarios WHERE USUARIO = :login";
            $resultado = $base->prepare($sql);    
            $resultado->execute(array(":login" => $login));

            while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
                if (password_verify($password, $registro['PASSWORD'])) {
                    $contador = 1;
                    break;
                }
            }

            $resultado->closeCursor();

            if ($contador > 0) {
                header("Location:../panel/menu/CRUD/index.php");
            } else {
                header("Location:login.php");
            }
        } catch (Exception $e) {
            die("Error: " . $e->getMessage());    
        }  
?>