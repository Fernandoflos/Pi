<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 600px;
        }
        form {
            width: 300px;
        }
    </style>
</head>

<body>
    <h1>Login de admi</h1>
    <form class="p-4" action="blog.php" method="post">
        <div class="mb-3">
            <label for="usuario" class="form-label">Usuario</label>
            <input type="usuario" class="form-control" id="usuario" name="usuario" aria-describedby="usuario">
            <div id="text" class="form-text">Nunca compartiremos su usuario con nadie más</div>
        </div>
        <div class="mb-3">
            <label for="contrasena" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="contrasena" name="contrasena">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="check" id="check">
            <label class="form-check-label" for="check">Mantener sesión iniciada</label>
        </div>
        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
    </form>
</body>

</html>