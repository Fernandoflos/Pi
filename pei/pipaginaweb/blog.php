<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hola Mundo</title>
</head>
<body>
<?php
try {
    $login = htmlentities(addslashes($_POST["usuario"]));
    $password = htmlentities(addslashes($_POST["contrasena"]));
    $contador = 0;
    
    $base = new PDO("mysql:host=localhost; dbname=pruebas", "root", "");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "SELECT * FROM usuarios WHERE USUARIO = :login";
    $resultado = $base->prepare($sql);    
    $resultado->execute(array(":login" => $login));
    
    while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
        if (password_verify($password, $registro['PASSWORD'])) {
            $contador = 1;
            break; // Rompe el bucle si encuentra una coincidencia
        }
    }
    
    $resultado->closeCursor();
    
    if ($contador > 0) {
        echo "Usuario registrado";
    } else {
        echo "Usuario no registrado";
    }
} catch (Exception $e) {
    die("Error: " . $e->getMessage());    
}
?>
<h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <table width="50%" border="0" align="center">
    <tr>
      <td class="primera_fila">Id</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Apellido</td>
      <td class="primera_fila">Dirección</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr>
    <?php foreach ($registro as $persona): ?>
      <tr>
        <td>
          <?php echo $persona->Id ?>
        </td>
        <td>
          <?php echo $persona->Nombre ?>
        </td>
        <td>
          <?php echo $persona->Apellido ?>
        </td>
        <td>
          <?php echo $persona->Direccion ?>
        </td>
        <td class="bot">
          <a href="borrar.php?Id=<?php echo $persona->Id ?>"><button type="button">Borrar</button></a>
        </td>
        <td class="bot">
          <a
            href="editar.php?Id=<?php echo $persona->Id ?>&nom=<?php echo $persona->Nombre ?>&ape=<?php echo $persona->Apellido ?>&dir=<?php echo $persona->Direccion ?>">
            <button type="button">Actualizar</button>
          </a>
        </td>
      </tr>
    <?php endforeach; ?>
    <tr>
      <td></td>
      <td><input type='text' name='Nom' size='10' class='centrado'></td>
      <td><input type='text' name='Ape' size='10' class='centrado'></td>
      <td><input type='text' name='Dir' size='10' class='centrado'></td>
      <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td>
    </tr>
  </table>
</form>
<?php
    for($i=1; $i<=$total_paginas; $i++){
      echo "<a href='?pagina=". $i. "'>". $i. "</a>  ";
  }
?>

<p>&nbsp;</p>
</body>
</html>