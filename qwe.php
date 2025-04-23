<?php
// db.php (example only — insecure!)
$conn = new mysqli("localhost", "root", "", "test");

$username = $_GET['username'];
$password = $_GET['password'];

$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Logged in!";
} else {
    echo "Invalid credentials.";
}
?>
