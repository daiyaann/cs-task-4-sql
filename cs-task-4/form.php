<?php
// Database credentials
$host = 'localhost';
$db = 'feedback_db';
$user = 'root';
$pass = '';

// Establish connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("<div class='error-message'>Connection failed: " . $conn->connect_error . "</div>");
}

// Collect form data
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$feedback = $conn->real_escape_string($_POST['feedback']);

// Insert data into the database
$sql = "INSERT INTO feedback (name, email, feedback) VALUES ('$name', '$email', '$feedback')";

if ($conn->query($sql) === TRUE) {
    echo "<div class='success-message'>Feedback submitted successfully!</div>";
} else {
    echo "<div class='error-message'>Error: " . $sql . "<br>" . $conn->error . "</div>";
}

// Close connection
$conn->close();
?>

<style>
    /* General styling for messages */
.success-message {
    color: green;
    font-family: Arial, sans-serif;
    background-color: #e6ffe6;
    padding: 10px;
    border: 1px solid green;
    border-radius: 5px;
    margin: 20px auto;
    text-align: center;
    max-width: 400px;
}

.error-message {
    color: red;
    font-family: Arial, sans-serif;
    background-color: #ffe6e6;
    padding: 10px;
    border: 1px solid red;
    border-radius: 5px;
    margin: 20px auto;
    text-align: center;
    max-width: 400px;
}

</style>