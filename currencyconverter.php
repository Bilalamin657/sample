<!doctype html>
<html>
<head>
<title>Currency Converter</title>
</head>
<body>
<form action="currencyconverter.php" method="post">
<table width="500" align="center" bgcolor="skyblue">
<tr align="center">
<td colspan="2">Currency converter....!!</td>
</tr>

<tr>
<td align="right"><b>Amount:</b></td>
<td>
<input type="text" name="amount" placeholder="Please Enter a Amount">
</td>
</tr>

<tr>
<td align="right"><b>Convert From :</b></td>
<td>
<select name="from">
<option>Select a Currency</option>
<option>PKR</option>
<option>INR</option>
<option>AFGHANI</option>
<option>USD</option>
<option>POUND</option>
<option>EURO</option>
</select>
</td>
</tr>

<tr>
<td align="right"><b>Convert to:</b></td>
<td>
<select name="to">
<option>Select a Currency</option>
<option>USD</option>
<option>INR</option>
<option>AFGHANI</option>
<option>PKR</option>
<option>POUND</option>
<option>EURO</option>
</select>
</td>
</tr>


<tr align="center">
<td colspan="4">
<input type="submit" name="convert" value="Convert Now">
</td>
</tr>
</table>
</form>

<?php
if(isset($_POST['convert']))
{
	$amount = $_POST['amount'];
    $from = $_POST['from'];
	$to = $_POST['to'];
	
	if($from=='USD' and $to=='PKR')
	{
		echo "<center><b style='background:pink; padding:10px';> Your Answer is :";
		
		echo $amount*103;
		
		echo "</b></center>";
	}
	elseif($from=='USD' and $to=='POUND')
	{
		echo "<center><b style='background:pink; padding:18px';> Your Answer is :";
		
		echo $amount*.70;
		
		echo "</b></center>";
	}
}
?>
</body>
</html>