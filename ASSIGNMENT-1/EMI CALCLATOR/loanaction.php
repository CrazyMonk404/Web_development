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
		h2
		{
			font-family: 'Acme', sans-serif;
		}
		#t2
		{
			border
		}
	</style>
</head>
<body>
<body style="background-image:url('back.jpg'); width="100%" height="100%"">
</body>
</html>
<?php
if($_POST)
{
$name=$_POST['name'];
$email=$_POST['email'];
$loan_amt=$_POST['loan_amt'];
$interest=$_POST['interest'];
$time=$_POST['time'];
$type=$_POST['type'];

$interest=($interest/1200);
$a=pow(1+$interest,$time);
$emi=($loan_amt*$interest*$a)/($a-1);

echo "<div id=t1>";
echo "<center><h2>".$name.", your detailed chart has been sent to ".$email."</h2><br></center>";
echo "<center><h2>Your EMI is-:".$emi."</h2><br></center>";
echo "<center><h2>Loan Type:".$type."</h2><br></center>";
echo "<table border=1px cellspacing=10 cellpadding=10 align=center><tr><th>MONTH:</th><th>PRINCIPLE:</th><th>INTEREST:</th><th>BALANCE:</th></tr>";
for($i=1;$i<=$time;$i++)
{
     
 $inter=($loan_amt*$interest);
  $principle=$emi-$inter;
 $balance=$loan_amt-$principle;
 if($balance<0)
  {
    $balance=0;
  }
  echo "<tr><td>$i</td><td>$principle</td><td>$inter</td><td>$balance</td></tr>";
  $loan_amt=$balance;
}

echo "</div>";

}
?>

