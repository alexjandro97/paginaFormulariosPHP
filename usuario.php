<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Datos</title>
        <link rel="shortcut icon" href="img/icon.png">
        <link href="https://fonts.googleapis.com/css?family=Contrail+One" rel="stylesheet">
        <link rel="stylesheet" href="css/estilosUsuario.css">
        
    </head>
    <body>
    	<header><div class="titulo"><h1>Bienvenido <?php echo $_POST["nombre"]; ?></h1></div></header>

		<div class="texto">
			
			<p>Hola <span class="nombre"><?php echo  $_POST["nombre"];?></span> te damos la bienvenida a Videojuegos Cloud, una plataforma en la que podras subir tus bocetos, tus betas y tus propios juegos. Antes de que te registremos del todo en nuestro sistema y puedas disfrutar de nuestra gran variedad de servicios, queremos que contrastes la información que acabas de introducir en nuestro formulario, una vez hecho esto, dale siguiente. Te enviaremos un e-mail para verificar que eres tú quien ha creado la cuenta. <br><br>Muchas Gracias por confiar en nosotros.</p>

		</div>

    	<div class="datos" name="datos" id="datos">
            <table class="tabla">
	        	<tr>
	        		<td>Nombre: </td>
	        		<td></td>
	        		<td> <?php echo $_POST["nombre"]; ?> </td>
	        	</tr>
	        	<tr>
	        		<td>Apellido: </td>
	        		<td></td>
	        		<td> <?php echo $_POST["apellido"]; ?> </td>
	        	</tr>
	        	<tr>
	        		<td>Usuario: </td>
	        		<td></td>
	        		<td><?php echo $_POST["usuario"]; ?></td>
	        	</tr>
	        	<tr>
	        		<td>Contraseña: </td>
	        		<td></td>
                                <td><input type="password" id="pass" name="pass" class="pass" placeholder="<?php echo $_POST["password"]; ?>"></td>
	        	</tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><input type="checkbox" id="showPass" name="showPass"> Mostrar Contraseña.</td>
                        </tr>
	        	<tr>
	        		<td>Ciudad: </td>
	        		<td></td>
	        		<td><?php echo $_POST["ciudad"]; ?></td>
	        	</tr>
	        	<tr>
	        		<td>Sexo: </td>
	        		<td></td>
	        		<td> <?php echo $_POST["sexo"]; ?> </td>
	        	</tr>
	        </table>
            
            
            
        </div>

        <button><a href="index.php">Volver</a></button>
<!--        <script>
            $("#showPass").val('<?php echo $_POST["password"]; ?>');
        </script>-->
    </body>
</html>
