<?php include 'db.php'; 


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





<?php if (isset($user)): ?>

<p>Hello <?= htmlspecialchars($user["name"]) ?></p>

<a href="index.php" class="hem">Hem</a>

<p><a href="logout.php">Log out</a></p>

<?php else: ?>

<p><a href="login.php">Log in</a> or <a href="signup.html">signup</a></p>

<?php endif; ?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index1.css">
    <title>Chat</title>
</head>
<body>
    <div id="chat">
        <div id="chat-box">
            <?php include 'process.php'; ?>
        </div>
        <form action="process.php" method="post" id="formid">
            <input type="text" name="message" placeholder="Type your message..." required>
            <input type="submit" value="Send">
        </form>
    </div>
</body>
</html>
