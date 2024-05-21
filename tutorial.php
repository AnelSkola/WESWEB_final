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
  <link rel="stylesheet" type="text/css" href="tutorial.css"> 
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet"> 
 
  <br><br>
  <title>Tutorial Website </title>
  <h1> Genomgång 1: Hur du skapar ett projekt i After Effects</h1>
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
      <h2>Steg 1: Öppna upp After Effects</h2>
      <p> Detta kan du göra via Adobe Creative Cloud. Se till att ha den senaste versionen av creative cloud och After Effects för att ha en så bra upplevelse som möjligt. <br></p>
     <input type="checkbox" id="step1">
    <label for="step1">Steg 1</label>
    </section> 
   

    <img class="image" src="Creative_cloud.png" alt="Your Image">
    </div>

    
   
  </div>

<br>

    
    <div class="container-2">

<section id="step2" class="step">
      <h2>Steg 2:Att skapa projektet</h2>
      <p>När du väl har startat After Effects blir hamnar du på välkomstskärmen. Här ska du klicka på den blåa "New project" knappen som befinner sig i det vänstra hörnet längst upp för att skapa projektet.</p>
     <input type="checkbox" id="step2">
    <label for="step2">Steg 2</label>
    </section>
   
      <img class="image" src="AEhome.png" alt="Your Image">
    </div>


    <br>

    

    <div class="container-3">

<section id="step3" class="step">
      <h2>Steg 3: Skapa en "Composition"</h2>
      <p>I mitten av skärmen kommemer det att stå New composition. När du klickar på denna bör du få upp ett fönster som ber dig att välja olika inställningar, vänta med detta tills nästa instruktion.</p>
       <input type="checkbox" id="step3">
      <label for="step3">Steg 3</label>
    </section>
     
      <img class="image" src="Comp.png" alt="Your Image">
    </div>
    

    <br>

    <div class="container-3">
      
<section id="step4" class="step">
      <h2>Steg 4: Välja korrekt inställningar till din Composition</h2>
      <p> I denna meny ska du alltså välja specifikationerna för hur ditt projekt ska se ut. Det första du gör är att välja vad din komposition ska heta i rutan Composition name. Därefter väljer du vilken upplösning på videon du skapar ska ha. För HD väljer du 1920 x 1080 vilket är standardupplösningen för de flesta skärmar idag. Frame rate eller bildfrekvens förklarar hur många bilder per sekund din video ska projicera. Denna inställningen ändras beroende på bildfrekvensen på det klippet du skall redigera. Om videon du har valt att redigera har bildfrekvensen 60 så tar du alltså 60 i detta fält. Om du vill ställa in längden på videon kan du göra det med hjälp av Start timecode och duration rutorna. När du är klar med detta klickar du på "OK"</p>
      <input type="checkbox" id="step4">
    <label for="step4">Steg 4</label> 
    </section>
   

      <img class="image" src="Compset.png" alt="Your Image">
    </div>

    <p> När klickat OK försvinner kompositionsfönstret. Grattis, du har nu skapat ditt projekt</p>
    <br>
    <button id="button" onclick="window.location.href = 'tutorial2.php';">Känner du dig redo för Genomgång 2? Klicka iså fall på denna knappen.</button>
      
    </div>
  
    <br><br><br>
    <!-- Add more sections for additional steps -->
  
    <script src="tutorial.js"></script>

</body>
</html>
