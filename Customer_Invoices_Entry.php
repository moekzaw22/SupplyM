<?php
include('connection.php');
include('CheckUser_Login.php');
?>
<div style="display:none;">
  <p>
        <label for="user">User:</label>
        <input type="text" id="user" value="<?php $username ?>">
    </p>

    <p>
        <label for="store">Store:</label>
        <input type="text" id="store" value="<?php $warehouseName ?>">
    </p>
</div>
<script type="text/javascript" src="Navigator.js"></script>
<div class="container">

<div> 
<p><label for="">Name</label> <input type="text" name="" value=""></p>

<p><label for="">Their ref</label> <input type="text" name="" value=""></p>
<p><label for="">Comment</label> <input type="text" name="" value=""></p>
<p><label for="">Issue Voucher No</label> <input type="text" name="" value=""></p>
<p><label for="">Purpose</label> <input type="text" name="" value=""></p>
<button onclick="redirectToPage('Customer_Invoices_Entry_NewLine.php')">New Line</button>
</div>
<div>
	<p><LABEL>Confirm date</LABEL><input type="date" name=""></p>
	<p><label>category</label><input type="text" name="txtcategory"></p>
	<p><label>Indent Reference</label><input type="text" name=""></p>
	<p><label>Indent Date</label><input type="date" name=""></p>
</div>
<div>
	<p><label>Invoice</label>:</p>
	<p><label>Entry date</label>:</p>
	<p><label>Goods received ID</label>:</p>
	<p><label>Status</label>:</p>
	<p><label>Entered by</label>:</p>
	<p><label>Store</label>:</p>
</div>
</div>
<p></p>
<table>
	<tr>
		<th>Notes</th>
		<th>Line</th>
		<th>Location</th>
		<th>Item code</th>
		<th>Item name</th>
		<th>Brand</th>
		<th>Program</th>
		<th>Category</th>
		<th>Budget</th>
		<th>Quan</th>
		<th>Pack Size</th>
		<th>Batch</th>
		<th>Exp date</th>
	</tr>
</table>
<style type="text/css">
body{
		margin:0%;
}
table{width: 100%;border-collapse: collapse;margin-bottom: 20px;}
th, td {border: 1px solid #ddd;padding: 8px;text-align: left;}
th {background-color: #f2f2f2;}
tr:nth-child(even) {background-color: #f9f9f9;}
 p{
            margin-bottom: 15px;
        }

        label {
            display: inline-block;
            width: 120px; /* Adjust the width as needed */
            text-align: right;
            margin-right: 15px;
        }

        input {
            width: 200px; /* Adjust the width as needed */
        }
           /* Style to make divs appear side by side */
        .container {
            display: flex;
            justify-content: space-between;
        }

        /* Style to add some spacing and formatting */
        .container > div {
            width: 30%; /* Adjust as needed */
            padding: 10px;
            margin: 5px;
        }
</style>