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
<html>
    <head>
      <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="index.css"> 
        <title>index</title>
      

        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
      </head>
    <body>

      <header>
        <a href="#" class="logo">Tutorials for</a>

        <ul class="navlist"> 
          <li><a href="index.php">Hem</a></li>
          <li><a href="upphov.php">Upphovsrätt</a></li>
          <li><a href="index1.php">Chatt</a></li>
          <li><a href="logout.php">Logga ut</a></li>
        </ul>
      
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


        <div class="nav-icons">
          <a href="#"><i class='bx bx-search' ></i></a>
          <a href="profile.php"><i class='bx bxs-user' ></i></a>
          <div class="bx bx-menu" id="menu-icon"></div>
          </div>
      </header>

      
      <!---  <section class="home" id="home">
      <div class="home-text">
      <h1></h1> <a href="" class="btn"> </a>
      <a href="#" class="btn2"></a>
      </div> -->
      <div class="home-img">
        <img src="aFTER.png" id="sport_white">
      </div>
      </section>
      
      
      
      <section class="container"> 
      <div class="container-box"> 
        
      <a href="tutorial.php"><h3 id="länk">Klicka här för den första genomgången</h3> </a>
        <a href="tutorial.php"><p id="länk">Titel: Hur du skapar ett projekt i After Effects</p></a>
      </div>

      <div class="container-box"> 
        
      <a href="tutorial2.html"><h3 id="länk">Klicka här för den andra genomgången</h3> </a>
      <a href="tutorial2.html"><p id="länk">Titel: Hur startar igång ditt projekt i After Effects</p></a>
      </div>

      <div class="container-box"> 
        
      <a href="tutorial3.html"><h3 id="länk">Klicka här för den tredje genomgången</h3> </a>
      <a href="tutorial3.html"><p id="länk">Titel: Hur du exporterar ett projekt i After Effects</p></a>
      </div>

      <div class="container-box"> 
        
      <a href="tutorial4.html"><h3 id="länk">Klicka här för den fjärde genomgången</h3> </a>
      <a href="tutorial4.html"><p id="länk">Titel: Lätta och smidiga funktioner</p></a>
      </div>

      <div class="container-box"> 
        
      <a href="tutorial5.html"><h3 id="länk">Klicka här för den femte genomgången</h3> </a>
      <a href="tutorial5.html"><p id="länk">Titel: Tips för avancerad redigering</p></a>
      </div>

      <div class="container-box"> 
        
      <a href="tutorial6.html"><h3 id="länk">Klicka här för den sjätte genomgången</h3> </a>
      <a href="tutorial6.html"><p id="länk">Titel: Keyframes och hur du använder de</p></a>
      </div>

     </section>

     <section class="about" id="about">
       <div class="about-img">
      
     </div> 

     <div class="about-text">
      <h2>Vill du lära dig hur man använder After Effects?
      </h2>
    </div>

    <section class="shop" id="shop">
    <div class="middle-text">
    <h4></h4>
    <h2>Då är denna sidan för dig</h2>
    </div>
    
 
    
   </section>
   
   <section class="review" id="review">
   <div class="middle-text">
   <h4>Nöjda användare</h4>
   <h2>Recensioner</h2>
   </div> 
   
   <div class="review-content">
<div class="box">
<p></p>
<div class="in-box">
<div class="bx-img">

</div>
<div class="bxx-text">
<h4>BOB MARLEY</h4>
<h5></h5> <div class="ratings">
  <a href="#"><i class="bx bxs-star"></i></a>
  <a href="#"><i class="bx bxs-star"></i></a>
  <a href="#"><i class="bx bxs-star"></i></a>
  <a href="#"><i class="bx bxs-star"></i></a>
  <a href="#"><i class="bx bxs-star"></i></a>
   </div>
  </div>
 </div>
</div>

<div class="box">
  <p> </p>
  <div class="in-box">
  <div class="bx-img">
  
  </div>
  <div class="bxx-text">
  <h4>Albert Einstein</h4>
  <h5></h5> <div class="ratings">
    <a href="#"><i class="bx bxs-star"></i></a>
    <a href="#"><i class="bx bxs-star"></i></a>
    <a href="#"><i class="bx bxs-star"></i></a>
    <a href="#"><i class="bx bxs-star"></i></a>
    <a href="#"><i class="bx bxs-star"></i></a>
  </div>
  </div>
  </div>
  </div>

  <div class="box">
    <p></p>
    <div class="in-box">
    <div class="bx-img">
 
    </div>
    <div class="bxx-text">
    <h4>Björn Borg</h4>
    <h5></h5> <div class="ratings">
      <a href="#"><i class="bx bxs-star"></i></a>
      <a href="#"><i class="bx bxs-star"></i></a>
      <a href="#"><i class="bx bxs-star"></i></a>
      <a href="#"><i class="bx bxs-star"></i></a>
      <a href="#"><i class="bx bxs-star"></i></a>
    </div>
    </div>
    </div>
    </div>
</div>
  </section>

  
  
  </div>
    <div class="contact-text">
    <h2 id="kontakt">Länkar som du kan vara intresserad av</h2>
  
  <div class="social">
    <a href="https://www.discord.com"> <i class='bx bxl-discord-alt' ></i></a>
    <a href="https://www.adobe.com"> <i class='bx bxl-adobe' ></i></a>
  </div>
  </div>
  <div class="details">
    <div class="main-d">
      <a href=""><p> Via discord kan du ta del av flera olika After Effects/Adobe servrar där du kan diskutera med folk som delar ditt intresse. På Adobes officiella webbsida kan du skapa ett konto och ta reda på mer om deras applikationer, även där finns ett forum. </p><i class='om oss'></i></a>
    </div>
  
  </div>
  </div>
  </section>

<a href="#" class="scroll">
<i class='bx bx-up-arrow-alt' ></i> 
</a>

<script src="https://unpkg.com/scrollreveal"></script>

      <script src="index.js"></script>

 

<?php if (isset($user)): ?>

    
    
    <p><a href="logout.php">Log out</a></p>

<?php else: ?>

    <p><a href="login.php">Log in</a> or <a href="signup.html">signup</a></p>

<?php endif; ?>

</body>
</html>