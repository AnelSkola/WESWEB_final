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
  <link rel="stylesheet" type="text/css" href="tutorial4.css"> 
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet"> 
 
  <br><br>
  <title>Tutorial Website </title>
  <h1> Genomgång 4: Lätta och smidiga funktioner </h1>
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
      <h2>Steg 1: Ändra volym</h2>
      <p> Klicka på videospåret du vill ändra volym på och klicka sedan L-tangenten. Till vänster om videospåret bör det se ut som bilden. Därefter kan du ändra decibelen antingen med musen eller gneom att skriva in ett värde.(0 är basvärdet) <br></p>
     <input type="checkbox" id="step1">
    <label for="step1">Steg 1</label>
    </section> 
   

    <img class="image" src="volume.png" alt="Your Image">
    </div>

    
   
  </div>

<br>

    
    <div class="container-2">

<section id="step2" class="step">
      <h2>Steg 2: Zoom/scale</h2>
      <p>Klicka på videospåret du vill ändra volym på och klicka sedan S-tangenten. Till vänster om videospåret bör det se ut som bilden. Därefter kan du ändra zoomen antingen med musen eller gneom att skriva in ett värde.(100% är basvärdet)</p>
     <input type="checkbox" id="step2">
    <label for="step2">Steg 2</label>
    </section>
   
      <img class="image" src="zoom.png" alt="Your Image">
    </div>


    <br>

    

    <div class="container-3">

<section id="step3" class="step">
      <h2>Steg 3: Rotation</h2>
      <p>Klicka på videospåret du vill ändra volym på och klicka sedan R-tangenten. Till vänster om videospåret bör det se ut som bilden. Därefter kan du ändra rotationsvärdet antingen med musen eller gneom att skriva in ett värde.(0 är basvärdet)</p>
       <input type="checkbox" id="step3">
      <label for="step3">Steg 3</label>
    </section>
     
      <img class="image" src="Rotation.png" alt="Your Image">
    </div>
    

    <br>

    <div class="container-3">
      
<section id="step4" class="step">
      <h2>Steg 4: Opacity/Transparens</h2>
      <p>Klicka på videospåret du vill ändra opacity på och klicka sedan T-tangenten. Till vänster om videospåret bör det se ut som bilden. Därefter kan du ändra transparens procenten antingen med musen eller gneom att skriva in ett värde.(100% är basvärdet)</p>
      <input type="checkbox" id="step4">
    <label for="step4">Steg 4</label> 
    </section>
   

      <img class="image" src="opa.png" alt="Your Image">
    </div>

    <p> Grattis, nu har du lärt dig flera olika funktioner i After Effects</p>
    <br>
    <button id="button" onclick="window.location.href = 'tutorial5.php';">Känner du dig redo för Genomgång 5? Klicka iså fall på denna knappen.</button>
      
    </div>
  
    <br><br><br>
    <!-- Add more sections for additional steps -->
  
    <script src="tutorial.js"></script>

</body>
</html>
