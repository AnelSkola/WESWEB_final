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
  <h1> Genomgång 5: Tips för avancerad redigering </h1>
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
      <h2>Steg 1: Upplägg och disponering av arbetsytan</h2>
      <p> När man redigerar större videor där man användar sig av flera redigeringsspår är det viktigt att strukturera upp det. Detta arbetsspår är dåligt anpassat och vi bryter ner och analysear hur det kan förbättras <br></p>
     <input type="checkbox" id="step1">
    <label for="step1">Steg 1</label>
    </section> 
   

    <img class="image" src="arbete.png" alt="Your Image">
    </div>

    
   
  </div>

<br>

    
    <div class="container-2">

<section id="step2" class="step">
      <h2>Steg 2: Förbättringar</h2>
      <p>Den första förbättringen som kan göras till den föregående bilden är att rada upp spåren i kronologisk ordning så att man lättare kan hålla kolla på videons följd.</p>
     <input type="checkbox" id="step2">
    <label for="step2">Steg 2</label>
    </section>
   
      <img class="image" src="ordning.png" alt="Your Image">
    </div>


    <br>

    

    <div class="container-3">

<section id="step3" class="step">
      <h2>Steg 3: Färgsortering</h2>
      <p>Om du använder dig av olika klipp eller effekter och spåren har sammanhang med varandra kan det vara bra att dela upp de i färger. Det gör man genom att klicka den lilla färgad rutan som befinner sig precis till vänster om sprets nummer.</p>
       <input type="checkbox" id="step3">
      <label for="step3">Steg 3</label>
    </section>
     
      <img class="image" src="Rotation.png" alt="Your Image">
    </div>
    

    <br>

    <div class="container-3">
      
<section id="step4" class="step">
      <h2>Steg 4: Precomposition</h2>
      <p>Om du har flera klipps som du vill slå samman till ett klipp använder du dig av precompositioning. Markera filerna du vill slå samman, i detta fall används de tre övre spåren. </p>
      <input type="checkbox" id="step4">
    <label for="step4">Steg 4</label> 
    </section>
   

      <img class="image" src="precomp.png" alt="Your Image">
    </div>

    <br>

    <div class="container-3">
      
<section id="step4" class="step">
      <h2>Steg 5: Precomposition</h2>
      <p> Högerklicka på någon av de markerade spåren och välj pre-composition. Därefter dyker en ruta upp, välj namnet på din pre-composition och klicka okej. </p>
      <input type="checkbox" id="step4">
    <label for="step4">Steg 5</label> 
    </section>
   

      <img class="image" src="precomp2.png" alt="Your Image">
    </div>

      
    <br>

<div class="container-3">
  
<section id="step4" class="step">
  <h2>Steg 6: Precomposition</h2>
  <p> Klippen du har valt bör nu ha satts ihop och skall se ut på följande vis. Nur har du "pre-composat" dina klipp. Alla ändringar görs nu alltså på hella precompositionen. </p>
  <input type="checkbox" id="step4">
<label for="step4">Steg 6</label> 
</section>


  <img class="image" src="precomp3.png" alt="Your Image">
</div>


    <p> Grattis, du har nu lärt dig hur du strukturerar ditt projekt After Effects</p>
    <br>
    <button id="button" onclick="window.location.href = 'tutorial6.php';">Känner du dig redo för Genomgång 6? Klicka iså fall på denna knappen.</button>
      
    </div>
  
    <br><br><br>
    <!-- Add more sections for additional steps -->
  
    <script src="tutorial.js"></script>

</body>
</html>
