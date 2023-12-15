<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Section Example</title>
</head>
<body>

<div class="navigation">
    <a href="#" onclick="loadSection('Customer_Nav')">Customer</a>
    <a href="#" onclick="loadSection('supplier')">Supplier</a>
    <a href="#" onclick="loadSection('item')">Item</a>
    <a href="#" onclick="loadSection('report')">Report</a>
    <a href="#" onclick="loadSection('special')">Special</a>
    <a href="#" onclick="loadSection('admin')">Admin</a>
</div>

<div id="content"></div>

<script src="Navigator.js"></script>
</body>
</html>
