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
    <link rel="stylesheet" href="styles/mainStyle.css">
    <link rel="stylesheet" href="styles/dropdownNav.css">

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
    <!-- ===== 🐊INCIO DE NAVEGACION🐊 ===== -->
    <header>
        <div style="float:left">
            <a href="main.php"> 
                <img src="favicon.ico" alt="icon" class="mainIcon">
            </a>
        </div>
        <nav>
            <img src="imgTest.jpg" alt="pfp" class="navBtn pfp">
            <p class="username">Username Test</p>
            
            <div class="dropdown">
                <button class="accountSettings dropbtn navBtn" onclick="dDownNav()">
                    ▼
                </button>
                <div id="dropDownContent" class="dropdown-content">
                    <a href="accountSettings.html">Account Settings</a>
                    <a href="logout.php" onclick="return confirmLogout()">Log Out</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- ===== FIN DE NAVEGACION ===== -->

    <!-- ===== 🐊INICIO PAGINA PRINCIPAL🐊 ===== -->
    <div class="contenedor">
		<form class="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
			
			<label for="foto">Seleciona tu foto</label><br>
			<input type="file" name="foto" id="foto"><br>

			<label for="titulo">Titulo de la foto</label><br>
			<input type="text" name="titulo" id="titulo"><br>

			<label for="texto">Descripcion:</label><br>
			<textarea name="texto" name="foto" id="texto" placeholder="Ingresa una descripcion de la imagen"></textarea><br>
			
			<?php // 
			 if (isset($error)): ?>
				<p class="error"><?php echo $error; ?></p>
			<?php endif; ?>

		<table>
			<input class="submit" type="submit" value="Subir Foto">
		</form>
		<form class="formulario" action="index.php">
			<input class="submit" type="submit" value="Ir a Inicio">
		</form>
		</table>
	</div>

	<footer>
		<p class="copyright">Galeria creada por autor</p>
	</footer>
    <!-- ===== FIN DE PAGINA ===== -->
</body>
</html>