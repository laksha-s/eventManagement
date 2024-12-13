<!DOCTYPE html>
<html>
<head>
    <title>User Data</title>
    <style>
        /* Table styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        th {
            background-color: #85e67e; /* Green background for headers */
            color: #fff; /* White text color */
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Event ID</th>
                <th>Comp ID</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>USN</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // PHP code to fetch and display data from the database goes here
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "EventManagementSystem";

            // Create a database connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check the connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // SQL query to fetch data from the User table
            $sql = "SELECT * FROM User";

            // Execute the query
            $result = $conn->query($sql);

            // Check if there are rows of data
            if ($result->num_rows > 0) {
                // Loop through the data and display it in the table
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
            } else {
                echo "<tr><td colspan='8'>No data available</td></tr>";
            }

            // Close the database connection
            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>
