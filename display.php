<?php
// Database connection
$servername = "localhost";
$username = "root"; // default XAMPP username
$password = ""; // default XAMPP password
$dbname = "user_auth"; // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch all event registrations
$sql = "SELECT * FROM events"; // your table name
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Registrations</title>
    <link rel="stylesheet" href="assets/css/style.css"> <!-- You can style it however you like -->
</head>
<body>
    <div class="container">
        <h2>Event Registration List</h2>
        
        <!-- Button to print the page -->
        <button onclick="window.print()">Print Page</button>

        <!-- Table to display event registration data -->
        <table border="1">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Event Date</th>
                    <th>Location</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row['username'] . "</td>
                                <td>" . $row['email'] . "</td>
                                <td>" . $row['phone'] . "</td>
                                <td>" . $row['event_date'] . "</td>
                                <td>" . $row['location'] . "</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No registrations found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php
$conn->close(); // Close the database connection
?>
