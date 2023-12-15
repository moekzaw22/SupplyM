<?php   
session_start();



if (isset($_SESSION['userID'])) {
    // Access session data
    $userID = $_SESSION['userID'];
   
  echo $username = $_SESSION['username'];
   echo $warehouseName = $_SESSION['Warehouse_Name'];
   echo $organizationName = $_SESSION['Organization_Name'];
   echo "<script>localStorage.setItem('mySessionData', '" . $_SESSION['userID'] . "');</script>";
   echo "<script>console.log('Session[UserID]:', '" . $_SESSION['userID'] . "');</script>";
   echo "<script>console.log('Session[Warehouse] :', '" . $_SESSION['Warehouse_Name'] . "');</script>";
  
    echo "<script>console.log('Session in store')</script>";
    }
    else{
      echo "<script>console.log('No Session')</script>";
         header("Location: login.php");
    exit();
}
 ?>