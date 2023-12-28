<?php
include('connection.php');
include('CheckUser_Login.php');
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
  </head>
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
                      '&Warehouse=' + encodeURIComponent(storeValue);

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
<div style="display:none;">
  <p>
        <label for="user">User:</label>
        <input type="text" id="user" value="<?php echo $_SESSION['username']; ?>">
    </p>

    <p>
        <label for="store">Store:</label>
        <input type="text" id="store" value="<?php echo $_SESSION['Warehouse_Name']; ?>">
    </p>
</div>

  <body onload="showSection('')">
    <div class="navigation">
      <button onclick="showSection('customer')">Customer</button>
      <button onclick="showSection('supplier')">Supplier</button>
      <button onclick="showSection('item')">Item</button>
      <button onclick="showSection('report')">Report</button>
      <button onclick="showSection('special')">Special</button>
      <button onclick="showSection('admin')">Admin</button>
  </div>

      <!--   End of header -->
<div class="navigator-content">
      <div style="display:block;" id="customer">
        <button type="button" name="button">List</button> Customer Invoices <button type="button" name="button" onclick="redirectToPage('Customer_Invoices_Entry.php')">add</button>
        <button type="button" name="button">List</button> Customer <button type="button" name="button">add</button>
        <button type="button" name="button">Transaction Categories</button>
        <br><button type="button" name="button">Requisitions</button>
        <button type="button" name="button">New Credit</button>
        <button type="button" name="button">Cash receipts</button>
        <button type="button" name="button">Categories</button>
      </div>

      <div class="hidden" id="item">
        <button type="button" name="button">List</button> Items <button type="button" name="button">add</button>
        <button type="button" name="button">List</button> Repacks <button type="button" name="button">add</button>
        <button type="button" name="button">List</button> Builds <button type="button" name="button">add</button>
        <br><button type="button" name="button">List</button> <button type="button" name="button">Inventory adjustments </button> <button type="button" name="button">add</button>
      </div>

      <div class="hidden" id="supplier">
        <button type="button" name="button">Tenders</button>
      </div>
      <div class="hidden" id="report"></div>
      <div class="hidden" id="special"></div>
      <div class="hidden" id="admin"></div>
</div>
  </body>
</html>
