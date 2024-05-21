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
  <link rel="stylesheet" type="text/css" href="tutorial3.css"> 
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet"> 
 
  <br><br>
  <title>Tutorial Website </title>
  <h1> Genomgång 3: Hur du exporterar ett projekt i After Effects</h1>
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
      <h2>Steg 1:</h2>
      <p> Klicka på "File" längst upp i det vänstra hörnet, då bör en meny expanderas. Klicka därefter på export. Klicka sedan på "Add to Adobe Media Encoder Queue"<br></p>
     <input type="checkbox" id="step1">
    <label for="step1">Steg 1</label>
    </section> 
   

    <img class="image" src="fileclick.png" alt="Your Image">
    </div>

    
   
  </div>

<br>

    
<div class="container-2">

<section id="step2" class="step">
      <h2>Steg 2: Adobe Media Encoder Queue</h2>
      <p>När du följt föregående steg bör Adobe Media Encoder Queue öppnas upp på din dator, annars för du ladda ned det via Creative Cloud. På högersidan av Encode Queue borde det se ut som på bilden och ditt projekt och dess namn bör synas där. Därefter är det bara att klicka på den gröna knappen längs upp till höger. Ditt projekt kommer att renderas och sparas i filsökvägen som står längst ner till höger medan projektet renderas. </p>
     <input type="checkbox" id="step2">
    <label for="step2">Steg 2</label>
    </section>
   
      <img class="image" src="RenderQueue.png" alt="Your Image">
    </div>

    <br>

    

    <p>Grattis, du har nu exporterat ditt första videoklipp</p>
    <br>
    <button id="button" onclick="window.location.href = 'tutorial4.php';">Känner du dig redo för Genomgång 4? Klicka iså fall på denna knappen.</button>
      
    </div>
  
    <br><br><br>
    <!-- Add more sections for additional steps -->
  
    <script src="tutorial.js"></script>

</body>
</html>
