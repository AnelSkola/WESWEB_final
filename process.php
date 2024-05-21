<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["message"])) {
        $message = $_POST["message"];
        //ny grej test:
        

       // $userId = 1;
       session_start();

       // Check if user is logged in
       if(isset($_SESSION["user_id"])){
           // Retrieve user ID from session
           $userId = $_SESSION["user_id"];

       }




        $sql = "INSERT INTO messages (user_id, message) VALUES ('$userId', '$message')";

        if ($conn->query($sql) === TRUE) {
            // denna grejen visar om meddelandet har skickats
            header("Location: index1.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// denna visar allt som har blivit skickat
$sql = "SELECT messages.*, user.name FROM messages JOIN user ON messages.user_id = user.id ORDER BY timestamp DESC";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<strong>{$row['name']}</strong>: {$row['message']}<br>";      
    }
} else {
    echo "No messages yet.";
}



$conn->close();

?>
