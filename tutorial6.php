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
  <h1> Genomgång 6: Keyframes och hur du använder de </h1>
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
      <h2>Steg 1: Vad är en keyframe</h2>
      <p>I After Effects finns det någonting som kallas för key frames eller på svenska kallat nyckelbildrutor. De används i situationer där du vill att någonting ändring skall ske under loppet av någon tid. Exempel på detta kan vara att volmen mellan sekund 5 och 10 i klippet skall öka med 10 decibel. Eller att en bild under loppet av 5 sekunder skall gå fron transparensen 0% ska gå över till 100% och ge effekten av att tona in.<br></p>
     <input type="checkbox" id="step1">
    <label for="step1">Steg 1</label>
    </section> 
   

    <img class="image" src="keyframes1.png" alt="Your Image">
    </div>

    
   
  </div>

<br>

    
    <div class="container-2">

<section id="step2" class="step">
      <h2>Steg 2: Hur man gör det</h2>
      <p>Denna genomgången kommer visa hur man göra så att en text förflyttas över skärmen under en viss tid. Börja med att gå till början av ditt klipp med den blåa markören. Sedan markerar du textspåret och klickar på P för att få upp position funktionen på vänstersidan. Klicka därefter på klockan till vänster om "position" så att den blir blå. Det du har gjort nu är att skapat en keyframe på början av ditt klipp, denna keyframe är usprungsvärdet.</p>
     <input type="checkbox" id="step2">
    <label for="step2">Steg 2</label>
    </section>
   
      <img class="image" src="text1.png" alt="Your Image">
    </div>


    <br>

    

    <div class="container-3">

<section id="step3" class="step">
      <h2>Steg 3: Nästa keyframe</h2>
      <p>Nu är det dags för nästa keyframe. Välj vart i videon din nästa keyframe ska vara med hjälp av att dra den blå markören. På bilden ser men en blå sned kvadrat längst till vänster, den är grå för dig, klicka därför på den så att den blir blå. Du har nu skapat ännu en ny keyframe längre fram i ditt klipp. Därefter ändrar du positionsvärdet vid denna keyframe till slutpositionen som texten skall befinns sig på. </p>
       <input type="checkbox" id="step3">
      <label for="step3">Steg 3</label>
    </section>
     
      <img class="image" src="keyframe2.png" alt="Your Image">
    </div>
    

    <br>

    <div class="container-3">
      
<section id="step4" class="step">
      <h2>Steg 4: Förstå vad som har hänt</h2>
      <p>Det är viktigt att du förstår vad du precis har gjort eftersom keyframes är någonting som kan användas väldigt brett. Sammanfattningsvis: Du har skapat en keyframe i början av ditt klipp på en text som du har skrivit. Denna positionen texten befinner sig på är basvärdet. Nästa keyframe du sätter är vid den tidpunkten texten skall vara framme till den positionen du vill ha den där på. Vill du att texten ska vara uppe i det högre hörnet vid sekund 3 i videon, så sätter du den andra keyframen på sekund tre och positionens värde uppe i det högra hörnet. Om du sätter den andra keyframen lägre än 3 kommer alltså textenten behöva förflytta sig samma distans på kortare tid, vilket då gör så att den rör sig snabbare.  </p>
      <input type="checkbox" id="step4">
    <label for="step4">Steg 4</label> 
    </section>
   

      <img class="image" src="apakeyframe.png" alt="Your Image">
    </div>

    <br>

   


    <p> Grattis, du har nu lärt dig hur man använder sig av keyframes</p>
    <br>
    <button id="button" onclick="window.location.href = 'index1.php';">Du är nu klar med den sista genomgången, vill du lämna en kommentar eller ställa en fråga? Klicka iså fall på denna knappen så tas du till våran chat.</button>
      
    </div>
  
    <br><br><br>
    <!-- Add more sections for additional steps -->
  
    <script src="tutorial.js"></script>

</body>
</html>
