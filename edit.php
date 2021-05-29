<?php

session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
};
$db = mysqli_connect("localhost","root","","friendnote");

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($db,"SELECT * from globalfeed where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

$sql = "SELECT * FROM globalfeed ORDER BY id DESC";
$result = $db->query($sql);

if(isset($_POST['update'])) // when click on Update button
{
$message = $_POST['message'];

    $edit = mysqli_query($db,"UPDATE globalfeed set message='$message', edited='1' where id='$id'");

    if($edit)
    {
    mysqli_close($db); // Close connection
    header("location:account.php"); // redirects to all records pmessage
    exit;
}}
?>

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
          <h2>Editando Post</h2>
          <p>Post original:</p>
          <p><?php 
              if ($result -> num_rows > 0){
              while($row = $result -> fetch_assoc()){
              if ($row["id"] == $id){
              echo "<p>" . $row["message"] . "</p>";
              }}}; ?>
          </p>
          <form method="POST">
              <textarea class="msgPost" type="text" name="message" value="<?php echo $data['message'] ?>" placeholder="Enter message" Required></textarea>
              <input type="submit" class="submitBtn" name="update" value="Update">
          </form>
        </section>
    </main>
    <!-- ===== FIN DE PAGINA PRINCIPAL ===== -->

    <!-- ===== PIE DE PAGINA ===== -->
    <footer>
        <p>made entirely by @ATDoesStuff, not a single soul helped him :)</p>
    </footer>
    <!-- ===== FIN DE PIE DE PAGINA ===== -->
</body>