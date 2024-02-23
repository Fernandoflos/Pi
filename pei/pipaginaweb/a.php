<!DOCTYPE html>
<html>
<head>
	<title>Pagina Principal</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<style>
		body {
			font-family: Arial, sans-serif;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
			margin: 0;
            background-image: url("imagenes/fondopp.jpeg");
		}
		form {
			width: 300px;
			margin: 0 auto;
			padding: 20px;
			border: 1px solid #ccc;
			box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
		}
		label {
			display: block;
			margin-top: 20px;
		}
		input[type="text"], input[type="password"] {
			width: 100%;
			padding: 10px;
			margin-top: 5px;
			border: 1px solid #ccc;
			box-sizing: border-box;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			margin-top: 20px;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: #45a049;
		}
	</style>
</head>
<body>
    <h1><center>LOGIN</center></h1>
	<form action="/login" method="post">
		<label for="username">Usuario:</label>
		<input type="text" id="username" name="username">
		<label for="password">Contrase&ntilde;a:</label>
		<input type="password" id="password" name="password">
		<input type="submit" value="Login">
	</form>
</body>
</html>