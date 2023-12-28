<?php
include('connection.php');
include('CheckUser_Login.php');
echo $userID;
function getUserRole($userID, $connection) {
    $sql = "SELECT Role_ID FROM user WHERE User_ID = '$userID'";
    $result = $connection->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
       return $row['Role_ID'];
    }

    return null;
}

// Function to check if the user has "Add" permission
function hasAddPermission($userID, $connection) {
    // Get the user's role
    $userRole = getUserRole($userID, $connection);

    if ($userRole) {
        // Check if the user's role has the "Add" permission (P02)
        $permissionID = 'P02';
      echo  $sql = "SELECT * FROM role_access WHERE Role_ID = '$userRole' AND Permission_ID = '$permissionID'";
        $result = $connection->query($sql);

        return ($result && $result->num_rows > 0);
    }

    return false;
}

 ?>
