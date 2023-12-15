<?php 
include('connection.php');
include('CheckUser_Login.php');

function Inserttoitem() {
  

    // Your form data
    $itemCode = $_POST['itemCode'];
    $itemName = $_POST['itemName'];
    $unit = $_POST['unit'];
    $brandName = $_POST['brandName'];
    $program = $_POST['program'];

    // SQL query to insert data into the "item" table
    $sql = "INSERT INTO item (ItemCode, ItemName, Unit, BrandName, Program)
            VALUES ('$itemCode', '$itemName', '$unit', '$brandName', '$program')";

    if ($connection->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    Inserttoitem();
}




echo "";
 ?>
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
  <!--   <div class="form-group">
    <label>Batch</label> <input type="text" name="unit" value="">
  </div>
    <div class="form-group">
    <label>ExpiryDate</label> <input type="text" name="unit" value="">
  </div>
    <div class="form-group">
    <label>Department</label> <input type="text" name="unit" value="">
  </div>
    <div class="form-group">
    <label>DefaultShelfLocation</label> <input type="text" name="unit" value="">
  </div>
   <div class="form-group">
    <label>DefaultPackSize</label> <input type="text" name="unit" value="">
  </div>
   <div class="form-group">
    <label>DefaultWeight</label> <input type="text" name="unit" value="">
  </div>
   <div class="form-group"><label>PriceList</label> <input type="text" name="unit" value="">
  </div>
    
   <div class="form-group">
    <label>isavaccine</label> <input type="text" name="unit" value="">
  </div>
   <div class="form-group">
    <label>Doses</label> <input type="text" name="unit" value="">
  </div> -->
</form>
  
      

<style type="text/css">
	
<style>
  .form-group {
    margin-bottom: 10px;
  }

  label{
  	  display: inline-block;
            width: 120px; /* Adjust the width as needed */
            text-align: right;
            margin-right: 15px;
            margin-bottom:15px;
  }
</style>
</style>
