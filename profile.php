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
    <link rel="stylesheet" type="text/css" href="profile.css"> 
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet"> 
    <title>Upload Profile Picture</title>
</head>
<body>

<h1>Din profil</h1>

<a href="index.php" class="hem">Hem</a>

<div class="container">
    <section id="step1" class="step">
      <h2> Ditt namn: <?= htmlspecialchars($user["name"]) ?> </h2> 
      <p> </p>
    </section> 

    </div>

    
   
  </div>

<br>

    
<div class="container-2">
    <section id="step2" class="step">
      <h2>Din mailaddress: <?= htmlspecialchars($user["email"]) ?></h2>
      <p></p>
     
    </section>
    </div>
    <br>

    

<div class="container-3">
    <section id="step3" class="step">
      <h2>Din profilbild:</h2>
      <p>
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
       </p>
    </section>
 </div>







    <h2>Upload Profile Picture</h2>
    <form action="profile.php" method="post" enctype="multipart/form-data">
        <input type="file" name="profile_picture" accept="image/*" required>
        <button type="submit" name="submit">Ladda up</button>
    </form>

    <?php
    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
        // Database connection code here
        // Assuming your database connection is established in "database.php"
        $mysqli = require __DIR__ . "/database.php";

        // Define the directory where the uploaded images will be stored
        $uploadDirectory = "uploads/";

        // Create the directory if it doesn't exist
        if (!file_exists($uploadDirectory)) {
            mkdir($uploadDirectory, 0777, true);
        }

        // Define the path where the image will be saved
        $filePath = $uploadDirectory . basename($_FILES["profile_picture"]["name"]);

        // Move the uploaded image to the specified directory
        if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $filePath)) {
            echo "The file " . basename($_FILES["profile_picture"]["name"]) . " has been uploaded.";

            // Save the file path to the database
            $sql = "UPDATE user SET profile_picture = '$filePath' WHERE id = {$_SESSION["user_id"]}";
            if ($mysqli->query($sql) === TRUE) {
                echo "File Path saved to database.";
            } else {
                echo "Error updating record: " . $mysqli->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // Fetch and display profile picture

    /*$sql = "SELECT profile_picture FROM user WHERE id = {$_SESSION["user_id"]}";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $profile_picture = $row['profile_picture'];
        echo '<img src="' . $profile_picture . '" alt="Profile Picture" class="pfp"> ';
    } else {
        echo "Profile picture not found.";
    }*/
    ?>
</body>
</html>
