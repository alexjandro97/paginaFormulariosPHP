<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registrate</title>
        <link rel="shortcut icon" href="img/icon.png">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	<link rel="stylesheet" href="css/fuentes.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="contenedor">
		<header><div class="cabecera"><h2>Registrate - Videojuegos Cloud</h2></div><hr></header>
		<div class="form-container">
			<form action="usuario.php" method="post" name="formulario" id="formulario" class="formulario">
				<div class="form-group" id="logo">
					<span class="icon-pacman"></span>
				</div>
				<div class="form-group">
					<input type="text" id="nombre" class="nombre" name="nombre" placeholder="Nombre: ">
				</div>
				<div class="form-group">
					<input type="text" id="apellido" class="apellido" name="apellido" placeholder="Apellido: ">
				</div>
				<div class="form-group">
					<input type="text" id="usuario" class="usuario" name="usuario" placeholder="Usuario: ">
				</div>
				<div class="form-group">
					<input type="password" id="password" class="password" name="password" placeholder="Contraseña: ">
				</div>
				<div class="form-group">
					<select name="ciudad" id="ciudad">
						<option value="null">Elija Ciudad</option>
						<option value="Madrid">Madrid</option>
						<option value="Sevilla">Sevilla</option>
						<option value="Malaga">Malaga</option>
						<option value="Valladolid">Valladolid</option>
						<option value="Lugo">Lugo</option>
					</select>
				</div>
				<div class="form-group" id="radio-group">
					<input type="radio" id="hombre" name="sexo" value="Hombre"><label for="hombre"> Hombre</label>
					<input type="radio" id="mujer" name="sexo" value="Mujer"><label for="mujer"> Mujer</label>
				</div>
				<div class="form-group">
					<input type="submit" id="enviar" class="enviar" name="enviar" value="Dejame Entrar">
				</div>
			</form>
                    <?php 
//                        
//                        $name = $_POST["nombre"];
//                        $subname = $_POST["apellido"];
//                        $user = $_POST["usuario"];
//                        $pass = $_POST["password"];
//                        $city = $_POST["ciudad"];
//                        $sex = $_POST["sexo"];
//                        
//                        if (empty($name) || empty($subname) || empty($user) || empty($pass) || empty($city) || empty($sex))
//                        {
//                            echo "<h1> Hay que rellenar todos los campos para continuar </h1>";
//                        }
//                    
//                    ?>
		</div>
	</div>
</body>
</html>