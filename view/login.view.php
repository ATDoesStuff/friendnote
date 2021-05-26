<!-- ===== Informacion Autor ===== ---
        Christopher Vega Mendez
                4AVPr 
             24/05/2021
                DAES
--- =====   Fin de Bloque   ===== -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="author" content="Chris Vega 🐊">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/registerStyle.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=KoHo&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=KoHo&family=Nunito&display=swap" rel="stylesheet">  
    
    <link rel="icon" href="favicon.ico">
    
    <script src="scripts/dropdownNav.js"></script>
    <script src="scripts/confirmLogout.js"></script>

    <title>FriendNote</title>
</head>
<body>
	<main class="bloque center">
		<div class="title">
			<h1>FriendNote</h1>
			<h2>Login</h2>
		</div>
				
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

			<input type="text" name="username" class="inputRes" value="<?php echo $username; ?>" placeholder="Usuario"><br><br>
			<input type="password" name="password" class="inputRes" placeholder="Contraseña"><br><br>

			<input type="submit" class="submitBtn" value="Login :)">

        </form>

			<!-- Comprobamos si la variable errores esta seteada, si es asi mostramos los errores -->
			<?php if(!empty($errores)): ?>
				<div class="error">
					<ul>
						<p class="invalid-feedback"><?php echo $username_err; ?></p>
						<p class="invalid-feedback"><?php echo $password_err; ?></p>
					</ul>
				</div>
			<?php endif; ?>
		</form>

		<p class="dont">
			¿Aun sin cuenta?
			<a href="register.php">Regístrate</a>
		</p>

		<?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

        
	</div>
</body>
</html>