<!doctype html>
<html>
<head>
<title>Simple calculator</title>
</head>
<body>
<form action="simplecalculator.php" method="post">
<table width="500" align="center" bgcolor="skyblue">
<tr align="center">
<td colspan="2">
<h2>Simple Calculator!!</h2>
</td>
</tr>
<tr>
<td align="right">
<h2>Input value 1:<h2>
</td>
<td>
<input type="text" name="value1" placeholder="enter a text"/>
</td>
</tr>
<tr>
<td align="right">
<h2>Input value 2:<h2>
</td>
<td>
<input type="text" name="value2" placeholder="enter a text"/>
</td>
</tr>
<tr>
<td align="right">
<b><h2>Select Operator:</h2></b>
</td>
<td>
<select name="opt">
<option>Select Operator</option>
<option>+</option>
<option>-</option>
<option>/</option>
<option>*</option>
</select>
</td>
</tr>
<tr align="center">
<td colspan="3">
<input type="submit" name="calculate" value="Calculate Now"/>
</td>
</tr>
<?php
if(isset($_POST['calculate']))
{
	$value1 = $_POST['value1'];
	$value2 = $_POST['value2'];
	$opt = $_POST['opt'];

    if($opt =='+')
	{
		echo "<center><b style='background:pink; padding:10px';> Your Answer is :";
		
		echo $value1 + $value2;
		
		echo "</b></center>";
	}		
	if($opt =='-')
	{
		echo "<center><b style='background:pink; padding:10px';> Your Answer is :";
		
		echo $value1 - $value2;
		
		echo "</b></center>";
	}		
	if($opt =='/')
	{
		echo "<center><b style='background:pink; padding:10px';> Your Answer is :";
		
		echo $value1 / $value2;
		
		echo "</b></center>";
	}		
	if($opt =='*')
	{
		echo "<center><b style='background:pink; padding:10px';> Your Answer is :";
		
		echo $value1 * $value2;
		
		echo "</b></center>";
	}		
}
?>
</body>
</html>