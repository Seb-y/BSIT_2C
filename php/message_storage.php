<?php
$servername = "server_side";
$username = "username";
$password = "password";
$dbname = "sample_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message_name = $_POST['message_name'];
$message_email = $_POST['message_email'];
$message_body = $_POST['message_body'];

$sql = "INSERT INTO messages (name, email, body) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $message_name, $message_email, $message_body);

if ($stmt->execute()) {
    echo "Message stored successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$stmt->close();
$conn->close();
?>