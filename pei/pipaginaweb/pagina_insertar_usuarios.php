<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Hola Mundo</title>
</head>

<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usu"];
    $contrasenia = $_POST["contra"];
	$pass_cifrado=password_hash($contrasenia, PASSWORD_DEFAULT, array("cost"=>12));

    try {
        $base = new PDO('mysql:host=localhost; dbname=blog', 'root', '');
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET utf8");

        $sql = "INSERT INTO administradores (USUARIO, PASSWORD) VALUES (:usu, :contra)";
        $resultado = $base->prepare($sql);

        $resultado->execute(array(":usu" => $usuario, ":contra" => $pass_cifrado));

        echo "Registro insertado";
        $resultado->closeCursor();
    } catch (PDOException $e) {
        echo "Error al insertar el registro: " . $e->getMessage();
    } catch (Exception $e) {
        echo "Error general: " . $e->getMessage();
    } finally {
        $base = null;
    }
}
?>
</body>

</html>
