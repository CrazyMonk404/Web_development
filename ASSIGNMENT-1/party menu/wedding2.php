<!DOCTYPE html>
<html>
<head>
<style type="text/css">
h1
{
  font-family: 'Comfortaa', cursive;
}
               body
                {
                      background-image:url("3232.jpeg");
                      background-size:cover;
                      background-repeat:no-repeat;   
                }
                #t1
		{
			border-top: 2px solid grey;
			border-bottom: 2px solid grey;
			border-left:2px solid grey;
			border-right:2px solid grey;
			margin-left: 250px;
			margin-right: 250px;
			margin-top: 5px;
			border-top-left-radius: 9px;
                        border-top-right-radius: 9px;
			border-bottom-right-radius: 9px;
                        border-bottom-left-radius: 9px;
			
		}
		h2
		{
			font-family: 'Acme', sans-serif;
		}
		
	</style>
</head>
</body>
</html>
<?php
if($_POST)
{
$name=$_POST['name'];
$date=$_POST['date'];
$time1=$_POST['time1'];
$time2=$_POST['time2'];
$guest=$_POST['guest'];

echo "<div id=t1>";
echo "<center>";
echo "<h1>$name,<br>You had a reservation on Date: $date From: $time1-$time2 </h1>";
echo "<h3>Number of Guest=$guest</h3>";
echo "<h2>DESSERT:</h2>";
foreach($_POST['dessert'] as $selected)
{
   echo "<h3>".$selected."<br></h3>";
}
echo "<h2>SNACKS:</h2>";
foreach($_POST['starters'] as $selected)
{
   echo "<h3>".$selected."<br></h3>";
}
echo "<h2>DINNER PLATE INCLUDE:</h2>";
foreach($_POST['c'] as $selected)
{
   echo "<h3>".$selected."<br></h3>";
}
echo "</center>";
echo "</div>";

}
?>

