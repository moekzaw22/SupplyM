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
 <!DOCTYPE html>
 <html>
 <head>
   <title></title>
 </head>
 <body>
 <style>
      .hidden {
        display: none;
      }
      body {
    margin: 0;
    font-family: 'Arial', sans-serif;
  }

  .navigation {
    background-color: #333;
    overflow: hidden;
  }
  .navigator-content{
   position: absolute;
  top:9%;
  }
  .navigation button {
    background-color: inherit;
    color: white;
    padding: 14px 16px;
    border: none;
    cursor: pointer;
  }

  .navigation button:hover {
    background-color: #ddd;
    color: black;
  }

    </style>
<form id="myForm" action="" method="post">
<div class="form-group">
    <label>ItemCode</label> <input type="text" name="itemCode" value="">
  </div>
  <div class="form-group">
    <label>ItemName</label> <input type="text" name="itemName" value="">
  </div>
  <div class="form-group">
    <label>Unit</label> <input type="text" name="unit" value="">
  </div>
    <div class="form-group">
    <label>BrandName</label> <input type="text" name="unit" value="">
  </div>
   <div class="form-group">
    <label>Program</label> <input type="text" name="unit" value="">
  </div>
   <script type="text/javascript">

    function showSection(sectionId) {
      var sections = ["customer", "item", "supplier", "report", "special", "admin"];

      sections.forEach(function (section) {
        document.getElementById(section).style.display = section === sectionId ? "block" : "none";
      });
    }
      function redirectToPage(targetPage) {
            // Get the values you want to pass
            var userValue = document.getElementById('user').value;
            var storeValue = document.getElementById('store').value;

            // Construct the URL with parameters
            var url = targetPage + '?user=' + encodeURIComponent(userValue) +
                      '&store=' + encodeURIComponent(storeValue);

            // Redirect to the target page
            window.location.href = url;
        }
          // Function to set the last visited page in local storage
        function setLastVisitedPage() {
            var currentPage = window.location.href;
            localStorage.setItem('lastVisitedPage', currentPage);
        }
        // Function to get the last visited page from local storage
        function getLastVisitedPage() {
            return localStorage.getItem('lastVisitedPage');
        }

        // Call setLastVisitedPage() when the page loads
        setLastVisitedPage();

        // Example of how to use getLastVisitedPage()
        var lastVisitedPage = getLastVisitedPage();
        if (lastVisitedPage) {
            console.log('Last visited page:', lastVisitedPage);
        } else {
            console.log('No last visited page recorded.');
        }
  </script>
 </body>
 </html>