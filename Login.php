<?php
session_start();
include('Connection.php');
// Assuming you have a function to hash and verify passwords
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if both store name and password are provided

    if (!empty($_POST["txtwarehousename"]) && !empty($_POST["txtpassword"])) {
        // For simplicity, you can check the credentials directly.
        // In a real-world scenario, you should use a database to store and verify user credentials.
       $warehouseName = $_POST['txtwarehousename'];
            $warehousePassword = $_POST['txtpassword'];
            $userName = $_POST['txtusername'];

    // $sql = "SELECT User.UserID
    //     FROM User
    //     JOIN UserStoreAssociation ON User.UserID = UserStoreAssociation.UserID
    //     WHERE User.UserName = '$username'
    //     AND User.PasswordHash = '$warehousePassword'
    //     AND UserStoreAssociation.StoreID = $storeID";
           echo $sql = "SELECT User.User_ID, Warehouse.Warehouse_Name, Warehouse.Warehouse_Pass, User.User_Name,Organization.Organization_Name, Organization.Organization_ID
        FROM User, Warehouse, Organization
        WHERE User.User_Name = 'Moe' AND Warehouse.Warehouse_Name = 'Central - YGN' AND Warehouse.Warehouse_Pass = 'cgn1234' AND Organization.Organization_ID = Warehouse.Organization_ID;
           
        ";
// echo $sql ="SELECT User_ID
//         FROM User
//         WHERE User_Name = '$userName' 
//         AND EXISTS (
//             SELECT 1 
//             FROM Warehouse 
//             WHERE Warehouse_Name = '$warehouseName' AND Warehouse_Pass = '$warehousePassword' 
//         )";
      
$result = $connection->query($sql);

if ($result && $result->num_rows > 0) {
    // User with the given username and warehouse combination exists
    echo "Login successful!";
     $row = $result->fetch_assoc();
    $_SESSION['userID'] = $row['User_ID'];
    $_SESSION['username']=  $row['User_Name'];
   $_SESSION['Warehouse_Name'] = $row['Warehouse_Name'];
    $_SESSION['Organization_Name'] = $row['Organization_Name'];

print_r($row);

     header("Location: Navigator.php");

} else {
    // User does not exist or the combination is incorrect
    echo "Invalid credentials!";
}
}
}

$connection->close();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <style type="text/css">
       body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
           
            height: 100vh;
        }

        .login-container {
            width:300px;
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login-container p {
            margin: 10px 0;
        }

        .login-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        .login-container input[type="submit"] {
          background:grey;
            color: black;
            cursor: pointer;
        }

        .login-container input[type="submit"]:hover {
        
        }
    </style>
    <script type="text/javascript">
    </script>
     <form method="post" action="Login.php">
       <div class="login-container">
        <?php
        // Display error message if set
        if (isset($error_message)) {
            echo '<p style="color: red;">' . $error_message . '</p>';
        }
        ?>
     
        <p>Store Name</p> <input type="text" name="txtwarehousename" value="">
        <p>Store Password</p> <input type="password" name="txtpassword" value="">
        <p>Your Name</p> <input type="text" name="txtusername">
        <br>
        <input type="submit" name="btnlogin" value="Login">

    </div>
    </form>
  </body>
</html>
