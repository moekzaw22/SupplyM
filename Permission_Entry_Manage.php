<?php
// Database connection details
include('connection.php');
include('CheckUser_Login.php');
include('User_Permission_Access.php');
// Create connection

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$hasAddPermission = hasAddPermission($userID, $connection);
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $permissionID = $_POST["permissionID"];
    $access = $_POST["access"];

    // SQL to insert data into permission table
    $sql = "INSERT INTO `permission` (`Permission_ID`, `Access`) VALUES ('$permissionID', '$access')";

    // Execute SQL query
    if ($connection->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$connection->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Permission</title>
</head>
<body>

<h2>Add Permission</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Permission ID: <input type="text" name="permissionID" required><br>
    Access: <input type="text" name="access" required><br>
    <?php
    // Display the submit button only if the user has "Add" permission
    if ($hasAddPermission) {
        echo '<input type="submit" value="Submit">';
    } else {
        echo '<button type="button" disabled>Submit</button>';
        echo '<p>You do not have permission to add.</p>';
    }
    ?>
</form>

</body>
</html>
