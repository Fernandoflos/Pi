<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            position: relative;
        }
        .menu_lateral {
            background-color: rgb(49, 58, 70);
            width: 250px;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 50px;
            color: white;
        }

        .menu_lateral nav a {
            display: block;
            padding: 10px;
            color: white;
            text-decoration: none;
        }

        .menu_lateral nav a:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        header {
            background-color: white;
            color: black;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            padding: 10px;
            position: absolute;
            top: 0;
            right: 0;
            width: calc(100% - 300px);
            z-index: 1000;
        }

        .user-info {
            display: flex;
            align-items: center;
        }

        .user-info img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .user-info span {
            font-size: 16px;
        }
    </style>
</head>
<body>
    <header>
        <div class="user-info">
            <img class="usuario" src="https://cdn-3.expansion.mx/dims4/default/7e7dbb6/2147483647/strip/true/crop/1200x800+0+0/resize/1200x800!/format/webp/quality/60/?url=https%3A%2F%2Fcdn-3.expansion.mx%2F48%2F80%2F20ff57fc47baac1654b740200333%2Fcristiano-ronaldo-firma-equipo-al-nassr-arabia-saudita.jpg" alt="El Comandante">
            <span>Usuario: El Bicho</span>
        </div>
    </header>
    <div class="menu_lateral">
        <nav>
            <a href="#">Inicio</a>
            <a href="#">Sobre Nosotros</a>
            <a href="#">Servicios</a>
            <a href="#">Contacto</a>
        </nav>
    </div>
</body>
</html>