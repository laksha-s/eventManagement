<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EventManagementSystem";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables for username and password
$username = "";
$password = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // SQL query to check the user credentials
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);
    
    if ($result->num_rows == 1) {
        // Valid login, redirect to appropriate page
        if ($username === 'admin') {
            header("Location: front.html");
        } else {
            header("Location: front1.html");
        }
        exit();
    } else {
        // Invalid login, display an error message
        $login_error = "Invalid login credentials. Please try again.";
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="">
        <label for="username">Username (Student Name):</label><br>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password (Student USN):</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
    
    <?php
    // Display login error message if any
    if (isset($login_error)) {
        echo "<p>$login_error</p>";
    }
    ?>
</body>
</html>
