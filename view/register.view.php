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
			<form class="formRegister" name="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
				
				<input class="inputRes" type="text" name="usuario" placeholder="Usuario"><br><br>
				<input class="inputRes" type="password" name="password" placeholder="Contraseña"><br><br>
				<input class="inputRes" type="password" name="password2" placeholder="Repite la contraseña"><br><br>
				
				<button class="submitBtn" onclick="login.submit()" value=":)))))">Registrarse</button>
			
			</form>
			<!-- ===== ERROR CHECK ===== -->
			<?php if(!empty($errores)): ?>
			<div class="error">
			<ul>
				<?php echo $errores; ?>
			</ul>
			</div>
			<?php endif; ?>
			</form>
			<!-- ===== END ERROR CHECK ===== -->

			<div>
				<p class="dont">
					¿ Ya tienes cuenta ?
					<a href="login.php">Iniciar Sesión</a>
				</p>
			</div> 
        </main>
    </body>
</html>