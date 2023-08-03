<!--
1. Write a PHP program to,
a. assign two integer values and a string (your name)
b. check whether First value is a power of 3.
c. check if Second value is greater than the First value.
d. reverse the string received as the third value.
-->

<?php
$v1=25;
$v2=50;
$name="Amrutha MS";
function is_Power($v1, $b)
{
$v1 = 25;
$b = 3;
while ($v1 % $b == 0) {
$v1 = $v1 / $b;
}
if($v1 == 1)
{
return "$v1 is power of $b";
}
else
{
return "$v1 is not power of $b";
}
}
print_r(is_Power($v1,3)."\n");
echo"<br>";
if($v2>$v1)
echo "$v2 is greater than $v1" ;
else {
echo "$v2 is less than $v1 ";
}
echo"<br>";
$rev=strrev($name);
echo("Reverse of the string is ".$rev);
?>


<!--
Assume that you are appointed as Data Analytics Engineer for a 
hospital. Ages for 8 patients are given below.
 
Write a PHP program to 
(i) sort the data in descending order according to the patient’s age and 
display the same
(ii) check whether a particular P-Id is presented in the list.
 -->

 <html>
<head>
<title>Amrutha MS</title>
</head>
<body>
<?php
$a=array(array(1,"Alen",39),array(2,"Deena",47),array(3,"Diana",21),array(4,"Jack",54),arr
ay(5,"Jain",23),array(6,"Kelvin",61),array(7,"Louis",69),array(8,"Rex",49));
$n=8;
for($i = 0; $i < $n; $i++)
{
for ($j = 0; $j < $n - $i - 1; $j++)
{
if ($a[$j][2] < $a[$j+1][2])
{
$t=$a[$j];
$a[$j]=$a[$j+1];
$a[$j+1]=$t;
}
}
}
echo "Sorted order of patients using age:<br>";
for($i = 0; $i < $n; $i++)
{
echo $a[$i][0]," ",$a[$i][1]," ",$a[$i][2],"<br>";
}
$k=5;
echo "<br>Checking P-Id <br>";
for($i = 0; $i < $n; $i++)
{
if($a[$i][0]==$k)
echo $a[$i][0]," ",$a[$i][1]," ",$a[$i][2],"<br>";
}
?>
</body>
</html>
