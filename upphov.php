<?php
session_start();

if(isset($_SESSION["user_id"])){

    // Include the file for database connection
    $mysqli = require __DIR__ . "/database.php";
    
    // Fetch user details
    $sql = "SELECT * FROM user WHERE id = {$_SESSION["user_id"]}";
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
} else { 
    header("Location: http://localhost/WEUWEB/loginfail.php");
    exit(); 
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="tutorial.css"> 
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet"> 
    <title>Upphovsrätt</title>
</head>

<body>

<h1>Upphovsrättslagar</h1>

<a href="index.php" class="hem">Hem</a>

<div class="container">
    <section id="step1" class="step">
      <h2> Allt innehåll på denna sida, inklusive men inte begränsat till bilder och text, är skyddat av upphovsrättslagar. Alla bilder som används är mina egna verk och får inte användas utan mitt uttryckliga tillstånd. Videon som används på denna sida är licensierad som fri att använda. </h2> 
    </section> 
    </div>

    
   
  </div>

<br>

    
<div class="container-2">
    <section id="step2" class="step">
      <h2> Externa länkar tillhandahålls för att användarna ska kunna lära sig mer och få ytterligare information. Kontroll över det innehållet på dessa externa sidor och ansvarar ej av denna sidans adminstration för deras material eller riktighet.</h2>
    </section>
    </div>
    <br>

    

<div class="container-3">
    <section id="step3" class="step">
      <h2>Om du anser att ditt upphovsrättsskyddade material används på ett sätt som bryter mot upphovsrättslagarna, vänligen kontakta mig på 05anecos@skola.boras.se.</h2>
    </section>
 </div>






    <?php
 
    
    ?>
</body>
</html>
