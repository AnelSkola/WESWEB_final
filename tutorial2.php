<?php

session_start();

if(isset($_SESSION["user_id"])){

    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
} else { header("Location: http://localhost/WEUWEB/loginfail.php");
  exit(); }

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="tutorial2.css"> 
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet"> 
 
  <br><br>
  <title>Tutorial Website </title>
  <h1> Genomgång 2: Hur startar igång ditt projekt i After Effects</h1>
</head>
<a href="index.php" class="hem">Hem</a>
<?php 
      $sql = "SELECT profile_picture FROM user WHERE id = {$_SESSION["user_id"]}";
      $result = $mysqli->query($sql);
  
      if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          $profile_picture = $row['profile_picture'];
          echo '<img src="' . $profile_picture . '" alt="Profile Picture" class="pfp"> ';
      } else {
          echo "Profile picture not found.";
      }
         ?>

<br>
<header> 
<div class="header" id="header">
  <h1>Tutorial Progress</h1>
</div>



</header>

<body>
  <script src="https://unpkg.com/scrollreveal"></script>

 
  
  <div class="container">

    
  <section id="step1" class="step">
      <h2>Steg 1: Välja videofil</h2>
      <p> När du har valt kompisitionsinställningar och klickat ok klickar du på "New composition from footage". Där väljer du vilken fil det är som du vill redigera <br></p>
     <input type="checkbox" id="step1">
    <label for="step1">Steg 1</label>
    </section> 
   

    <img class="image" src="compval.png" alt="Your Image">
    </div>

    
   
  </div>

<br>

    
<div class="container-2">

<section id="step2" class="step">
      <h2>Steg 2: Lära sig layouten</h2>
      <p>När du väl har valt videofilen och klickat okej kommer du se After Effects arbetsyta. Bli inte överväldigad, många av dessa funktioner kan du som nybörjare ignorera. I den över halvan ser du videon du har valt, här kommer du kunna se en förhandsvisning på de ändringar när du spelar upp din video. För att spela upp videon klickar du på mellanslag.</p>
     <input type="checkbox" id="step2">
    <label for="step2">Steg 2</label>
    </section>
   
      <img class="image" src="projektet.png" alt="Your Image">
    </div>

    <br>

    

    <div class="container-3">

<section id="step3" class="step">
      <h2>Steg 3: Redigera klippet</h2>
      <p>Denna ruten som befinner sig längst ner till höger på After Effects redigerar du videon. Längs ner kan du flytta slidern till vänster för att zooma in på videospåret. Den blåa merkören representerar vilket ställe på klippet du redigerar vid det tillfället. Om du zoomar in med slidern kommer du zooma videospåret in just mot denna blåa markören.  </p>
       <input type="checkbox" id="step3">
      <label for="step3">Steg 3</label>
    </section>
     
      <img class="image" src="footage.png" alt="Your Image">
    </div>

    

    <br>

    <div class="container-3">
      
<section id="step4" class="step">
      <h2>Steg 4: Förkorta videon</h2>
      <p> Att förkorta videoklippet är väldigt simpelt. Välj punkten där du vill att punkten skall sluta och placera den blåa markören på detta ställe. Det gör du genom att klicka och hålla inne musen på den tjocka delen av markören och sedan dra vänster eller höger. Därefter drar du slutet av ditt videoklipptill denna markören medans du håller knappen shift. Att hålla inne shift gör så att klippet automatiskt knäpper fast sig till den blåa markören när du är tillräckligt nära. När du har gjort det bör ditt klipp se ut som bilden till höger. Du kan också kontrollera om du har gjort genom att spela videon, videon bör bli svart efter att den passerat punkten där din blåa markör var.</p>
      <input type="checkbox" id="step4">
    <label for="step4">Steg 4</label> 
    </section>
   

      <img class="image" src="editfootage.png" alt="Your Image">
    </div>

    <p> Grattis, du har nu redigerat ditt första videoklipp. Vill du exportera klippet följ genomgång 3.</p>
    <br>
    <button id="button" onclick="window.location.href = 'tutorial3.php';">Känner du dig redo för Genomgång 3? Klicka iså fall på denna knappen.</button>
      
    </div>
  
    <br><br><br>
    <!-- Add more sections for additional steps -->
  
    <script src="tutorial.js"></script>

</body>
</html>
