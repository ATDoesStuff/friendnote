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
    <script src="scripts/confirms.js"></script>

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
            <p class="username"><?php echo htmlspecialchars($_SESSION["username"]); ?></p>
            
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
            <h3 style="text-align: left;">Your Posts:</h3>
        </section>
        <?php

        require "config.php";
        $username = $_SESSION["username"];
        $sql = "SELECT * FROM globalfeed ORDER BY id DESC";
        $result = $link->query($sql);
        if ($result -> num_rows > 0){

            $counter = 0;

            while($row = $result -> fetch_assoc()){
                if ($row["by_user"] == $_SESSION["username"]){
                    echo "<section>";
                    if ($row["edited"] == 1){
                        echo "<p style='float:right'>" . $row["posted_at"] . "(Edited*)</p>";
                    } else if ($row["edited"] == 0){
                        echo "<p style='float:right'>" . $row["posted_at"] . "</p>";
                    };
                    echo "<img src= 'imgTest.jpg' alt='pfpTestPost' class='pfpPost'>";
                    echo "<p style='text-align: left;'>" . $row["by_user"] .  " said:</p>";
        
                    echo "<div class='divUserPost'></div>";
        
                    echo "<p>" . $row["message"] . "</p>";

                    echo "<a class='editBtn' href='edit.php?id=" . $row['id'] . "'>Edit</a>";
                    echo "<a onclick='return confirmDelete()' class='deleteBtn' href='delete.php?id=" . $row['id'] . "'>Delete</a>";
                    
                    echo "</section>";
                    $counter = $counter + 1;
                }
            }   
        }if ($counter == 0) {
            $row = "";
            echo "<section>";
            echo "<img src= 'imgTest.jpg' alt='pfpTestPost' class='pfpPost'>";
            echo "<p style='text-align: left;'> Chris Vega said:</p>";
            echo "<div class='divUserPost'></div>";
            echo "<p> Heyaaa, looks like there ain't any posts here yet... Why don't ya' post something nice?</p>";
            echo "</section>";
        };
        ?>
    </main>
    <!-- ===== FIN DE PAGINA PRINCIPAL ===== -->

    <!-- ===== PIE DE PAGINA ===== -->
    <footer>
        <p>made entirely by @ATDoesStuff, not a single soul helped him :)</p>
    </footer>
    <!-- ===== FIN DE PIE DE PAGINA ===== -->
</body>
</html>