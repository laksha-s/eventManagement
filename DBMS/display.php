<?php
// Database connection details
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

// Check if the "Display" button is clicked
if (isset($_POST["displayButton"])) {
    // SQL query to retrieve data from the "User" table
    $sql = "SELECT FName, LName, EventID, CompID, Gender, Email, PhoneNO, USN FROM User";
    $result = $conn->query($sql);

    // Check if there are results
    if ($result->num_rows > 0) {
        echo "<table border='1'>
        <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Event ID</th>
        <th>Comp ID</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>USN</th>
        </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["FName"] . "</td>";
            echo "<td>" . $row["LName"] . "</td>";
            echo "<td>" . $row["EventID"] . "</td>";
            echo "<td>" . $row["CompID"] . "</td>";
            echo "<td>" . $row["Gender"] . "</td>";
            echo "<td>" . $row["Email"] . "</td>";
            echo "<td>" . $row["PhoneNO"] . "</td>";
            echo "<td>" . $row["USN"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No results found";
    }
}

// Close the database connection
$conn->close();
?>