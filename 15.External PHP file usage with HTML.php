<!--
Design an order form as below and implement a PhP program to pass 
the entries to another page and display the receipt.
-->

<!--HTML part of the Code-->
<html>
<head>
<title>20BCE1665 - Amrutha MS</title>
<style>
div {
display: flex;
align-items: center;
margin: 20px auto;
}
input {
border-radius: 50px;
}
</style>
</head>
<body style="background-color:rgb(150, 191,150)">
<form action="prog3.php" method="get">
<h1>Grocery Order Form</h1>
<p>Customer Name</p>
<input type="text" name="firstName" id="" placeholder="First Name" />
<input type="text" name="lastName" id="" placeholder="Last Name" />
<p>Phone Number</p>
<input type="text" name="phoneNumber" id="" />
<p>Email</p>
<input type="text" name="email" id="" />
<hr />
<div>
<img src="apple.jpg" alt="" height="40px" width="40px" />
<input type="checkbox" name="apple" id="" />Apple
<span style="padding: 0 5px">$10 </span>
<input type="number" name="apple-qty" id="" />
</div>
<div>
<img src="banana.jpg" alt="" height="40px" width="40px" />
<input type="checkbox" name="banana" id="" />Banana
<span style="padding: 0 5px">$5 </span>
<input type="number" name="banana-qty" id="" />
</div>
<div>
<img src="avocado.jpg" alt="" height="40px" width="40px" />
<input type="checkbox" name="avocado" id="" />Avocado
<span style="padding: 0 5px">$7 </span>
<input type="number" name="avocado-qty" id="" />
</div>
<input type="submit" value="Submit" />
</form>
</body>
</html>

<!-- PHP part of code-->

<html>
<head>
<title>20BCE1665 - Amrutha MS</title>
</head>
<body>
<?php
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$p1 = $_POST['p1'];
$p2 = $_POST['p2'];
$e = $_POST['e'];
$a = $_POST['a'];
$b = $_POST['b'];
$av = $_POST['av'];
echo "<h1> Recipt for Grocery</h1><br>";
echo "Name : ", $n1, " ", $n2;
echo "<br>Phone Number : ", $p1, "-", $p2;
echo "<br>Email : ", $e;
echo
"<br><table><tr><th>Sno.</th><th>Item</th><th>Quantity</th><th>Price</th></tr>";
if (isset($_POST['afr']))
echo "<tr><td>1.</td><td>apple</td><td>", $a, "</td><td>", ($a * 10), 
"</td></tr>";
if (isset($_POST['bfr']))
echo "<tr><td>2.</td><td>banana</td><td>", $b, "</td><td>", ($b * 10), 
"</td></tr>";
if (isset($_POST['avfr']))
echo
"<tr><td>3.</td><td>avocado</td><td>", $av, "</td><td>", ($av * 10), "</td></tr>";
echo "</table>";
?>
</body>
</html>
