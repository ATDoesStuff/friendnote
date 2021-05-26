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
				<h2>Registro</h2>
			</div>		
			<!-- <form class="formRegister" name="login" action="?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
				
				<input class="inputRes" type="text" name="username" placeholder="Usuario"><br><br>
				<input class="inputRes" type="password" name="password" placeholder="Contraseña"><br><br>
				<input class="inputRes" type="password" name="confirm_password" placeholder="Repite la contraseña"><br><br>
				
				<button class="submitBtn" onclick="login.submit()" value=":)))))">Registrarse</button>
			
			</form> -->

			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                <input type="text" name="username" class="inputRes"  placeholder="Nombre de Usuario" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span><br><br>

                <input type="password" name="password" class="inputRes"  placeholder="Contraseña" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span><br><br>

                <input type="password" name="confirm_password" class="inputRes" placeholder="Repite tu contraseña" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span><br><br>

                <input type="submit" class="submitBtn" value="Submit"><br><br>
                <input type="reset" class="submitBtn" value="Reset"><br><br>
        </form>
			<div>
				<p class="dont">
					¿ Ya tienes cuenta ?
					<a href="login.php">Iniciar Sesión</a>
				</p>
			</div> 
        </main>
    </body>
</html>