
<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $FName = $_POST["FName"];
    $LName = $_POST["LName"];
    $EventID = $_POST["EventID"];
    $CompID = $_POST["CompID"];
    $Gender = $_POST["Gender"];
    $Email = $_POST["Email"];
    $PhoneNO = $_POST["PhoneNO"];
    $USN = $_POST["USN"];

    // Perform database operations here (e.g., insert the data into a database table)
    // Replace the database credentials with your actual database connection information
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

    // Prepare and execute an SQL query to insert the data into a table (replace with your table name)
    $sql ="INSERT INTO User (FName, LName, EventID, CompID, Gender, Email, PhoneNO, USN)
            VALUES ('$FName', '$LName', '$EventID', '$CompID', '$Gender', '$Email', '$PhoneNO', '$USN')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
