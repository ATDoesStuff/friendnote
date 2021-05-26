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
                    <a href="account.php">Account Settings</a>
                    <a href="logout.php" onclick="return confirmLogout()">Log Out</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- ===== FIN DE NAVEGACION ===== -->

    <!-- ===== 🐊INICIO PAGINA PRINCIPAL🐊 ===== -->
    <main>
        <section>
            <img src="imgTest.jpg" alt="pfpTestPost" class="pfpPost">
            <p style="text-align: left;">Chris Vega Mendez 🐊 said:</p>
            <div class="divUserPost"></div>
            <p>Text test #1, not php, just seeing the design</p>
        </section>
        <section>
            <img src="imgTest.jpg" alt="phpTestPost2" class="pfpPost">
            <p style="text-align: left;">Chris Vega Mendez 🐊 said:</p>
            <div class="divUserPost"></div>
            <p>
            still just testing, not real
            </p>
        </section>
    </main>
    <!-- ===== FIN DE PAGINA PRINCIPAL ===== -->

    <!-- ===== PIE DE PAGINA ===== -->
    <footer>
        <p>made entirely by @ATDoesStuff, not a single soul helped him :)</p>
    </footer>
    <!-- ===== FIN DE PIE DE PAGINA ===== -->
</body>
</html>