
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	
		#t1
		{
			border-top: 2px solid grey;
			border-bottom: 2px solid grey;
			border-left:2px solid grey;
			border-right:2px solid grey;
			margin-left: 350px;
			margin-right: 350px;
			margin-top: 50px;
			border-top-left-radius: 9px;
                        border-top-right-radius: 9px;
			border-bottom-right-radius: 9px;
                        border-bottom-left-radius: 9px;
		}
		h2,h1
		{
			Tahoma, Geneva, sans-serif;
		}
		#t2
		{
			border
		}
	</style>
</head>
<body>
<body style="background-image:url('back.jpg'); width="100%" height="100%"">	
<form method="POST" action="loanaction.php" >
<br>

<div id=t1>
<center><h1>LOAN  CALCULATOR</h1></center>
<center>
<table>
<tr>
<th align="left">
Full Name: 
</th>
<th>
<input type=text  name="name">
</th>
</tr>
<tr></tr><tr></tr>
<tr>
<th align="left">
Email-Address:
</th>
<th>
<input type=text  name="email">
</th>
</tr>
<tr></tr><tr></tr>
<tr>
<th align="left">
Loan Amount::
</th>
<th>
<input type="number" name="loan_amt">
</th>
</tr
<tr>
<th align="left">
Interest: 
</th>
<th>
<input type="text" name="interest">
</th>
</tr>
<tr></tr><tr></tr>
<tr>
<th align="left">
Time-Period: 
</th>
<th>
<input type="number" name="time" placeholder="IN Months">
</th>
</tr>
<tr></tr><tr></tr>
<tr>
<th align="left">
Loan Type: 
</th>
<th>
<select name="type">
<option>
<option value="Car Loan">Car Loan(min=12%)
<option value="Home Loan">Home Loan(min=11%)
<option value="Education Loan">Education Loan(min=13%)
<option value="Other Loan">Other(min=15%)
</select>
</th>
</tr>
<tr></tr><tr></tr>
</table>
<input type=submit name="Calculate">
<br><br>
</center>
</div>
</form>
</body>
</html>