<!DOCTYPE html>
<head>
<title>TIME TABLE</title>
<style>
table
{
border: 1px solid black; 
}
td,th
{
border:5px solid grey; padding:10px; spacing:10px; 
}

td:nth-child(1)
{
background-color:tomato;
}
th
{
background-color:tomato;
}

</style>

</head>
<body>
<h1 style="color:blue";><center>TRAIN SCHEDULE</center></h1>
<form name="tt" method="POST" ref="Train-Schedular.php">

<table >

<tr>
<th>TRAIN DETAILS-:</th>
<th>MONDAY</th>
<th>TUESDAY</th>
<th>WEDNESDAY</th>
<th>THURSDAY</th>
<th>FRIDAY</th>
<th>SATURDAY</th>
<th>SUNDAY</th>
</tr>

<tr>
<td>TRAIN NO-:<br><input type = "number" name="train1"><br>TRAIN NAME-:<br> <input type = "text" name="trainname1"><br>FROM-:<br> <input type = "text" name="trainfrom1"><br>TO-:<br><input type = "text" name="trainto1"><br></td>
<td> 
Enter ARRIVAL TIME <input type="time" name="atm1"><br>
Enter DEPARTURE TIME  <input type="time" name="dtm1"><br>
CHOOSE PLATFORM<br>
  <input type="radio" name="pm1" value="PLATFORM-1">PLATFORM-1<br>
  <input type="radio" name="pm1" value="PLATFORM-2">PLATFORM-2<br>
</td>
<td> 
Enter ARRIVAL TIME <input type="time" name="att1"><br>
Enter DEPARTURE TIME  <input type="time" name="dtt1"><br>
CHOOSE PLATFORM<br>
  <input type="radio" name="pt1" value="PLATFORM-1">PLATFORM-1<br>
  <input type="radio" name="pt1" value="PLATFORM-2">PLATFORM-2<br>
</td>
<td> 
Enter ARRIVAL TIME <input type="time" name="atw1"><br>
Enter DEPARTURE TIME  <input type="time" name="dtw1"><br>
CHOOSE PLATFORM<br>
  <input type="radio" name="pw1" value="PLATFORM-1">PLATFORM-1<br>
  <input type="radio" name="pw1" value="PLATFORM-2">PLATFORM-2<br>
</td>
<td> 
Enter ARRIVAL TIME <input type="time" name="atth1"><br>
Enter DEPARTURE TIME  <input type="time" name="dtth1"><br>
CHOOSE PLATFORM<br>
  <input type="radio" name="pth1" value="PLATFORM-1">PLATFORM-1<br>
  <input type="radio" name="pth1" value="PLATFORM-2">PLATFORM-2<br>
</td>
<td> 
Enter ARRIVAL TIME <input type="time" name="atf1"><br>
Enter DEPARTURE TIME  <input type="time" name="dtf1"><br>
CHOOSE PLATFORM<br>
  <input type="radio" name="pf1" value="PLATFORM-1">PLATFORM-1<br>
  <input type="radio" name="pf1" value="PLATFORM-2">PLATFORM-2<br>
</td>
<td> 
Enter ARRIVAL TIME <input type="time" name="ats1"><br>
Enter DEPARTURE TIME  <input type="time" name="dts1"><br>
CHOOSE PLATFORM<br>
  <input type="radio" name="ps1" value="PLATFORM-1">PLATFORM-1<br>
  <input type="radio" name="ps1" value="PLATFORM-2">PLATFORM-2<br>
</td>
<td> 
Enter ARRIVAL TIME <input type="time" name="atsu1"><br>
Enter DEPARTURE TIME  <input type="time" name="dtsu1"><br>
CHOOSE PLATFORM<br>
  <input type="radio" name="psu1" value="PLATFORM-1">PLATFORM-1<br>
  <input type="radio" name="psu1" value="PLATFORM-2">PLATFORM-2<br>
</td>
</tr>


<tr>
<td>TRAIN NO-:<br><input type = "number" name="train2"><br> TRAIN NAME-:<br><input type = "text" name="trainname2"><br>FROM-:<br> <input type = "text" name="trainfrom2"><br>TO-:<br><input type = "text" name="trainto2"><br></td>
<td> 
Enter ARRIVAL TIME <input type="time" name="atm2"><br>
Enter DEPARTURE TIME  <input type="time" name="dtm2"><br>
CHOOSE PLATFORM<br>
  <input type="radio" name="pm2" value="PLATFORM-1">PLATFORM-1<br>
  <input type="radio" name="pm2" value="PLATFORM-2">PLATFORM-2<br>
</td>
<td> 
Enter ARRIVAL TIME <input type="time" name="att2"><br>
Enter DEPARTURE TIME  <input type="time" name="dtt2"><br>
CHOOSE PLATFORM<br>
  <input type="radio" name="pt2" value="PLATFORM-1">PLATFORM-1<br>
  <input type="radio" name="pt2" value="PLATFORM-2">PLATFORM-2<br>
</td>
<td> 
Enter ARRIVAL TIME <input type="time" name="atw2"><br>
Enter DEPARTURE TIME  <input type="time" name="dtw2"><br>
CHOOSE PLATFORM<br>
  <input type="radio" name="pw2" value="PLATFORM-1">PLATFORM-1<br>
  <input type="radio" name="pw2" value="PLATFORM-2">PLATFORM-2<br>
</td>
<td> 
Enter ARRIVAL TIME <input type="time" name="atth2"><br>
Enter DEPARTURE TIME  <input type="time" name="dtth2"><br>
CHOOSE PLATFORM<br>
  <input type="radio" name="pth2" value="PLATFORM-1">PLATFORM-1<br>
  <input type="radio" name="pth2" value="PLATFORM-2">PLATFORM-2<br>
</td>
<td> 
Enter ARRIVAL TIME <input type="time" name="atf2"><br>
Enter DEPARTURE TIME  <input type="time" name="dtf2"><br>
CHOOSE PLATFORM<br>
  <input type="radio" name="pf2" value="PLATFORM-1">PLATFORM-1<br>
  <input type="radio" name="pf2" value="PLATFORM-2">PLATFORM-2<br>
</td>
<td> 
Enter ARRIVAL TIME <input type="time" name="ats2"><br>
Enter DEPARTURE TIME  <input type="time" name="dts2"><br>
CHOOSE PLATFORM<br>
  <input type="radio" name="ps2" value="PLATFORM-1">PLATFORM-1<br>
  <input type="radio" name="ps2" value="PLATFORM-2">PLATFORM-2<br>
</td>
<td> 
Enter ARRIVAL TIME <input type="time" name="atsu2"><br>
Enter DEPARTURE TIME  <input type="time" name="dtsu2"><br>
CHOOSE PLATFORM<br>
  <input type="radio" name="psu2" value="PLATFORM-1">PLATFORM-1<br>
  <input type="radio" name="psu2" value="PLATFORM-2">PLATFORM-2<br>
</td>
</tr>


<tr>
<td>TRAIN NO-:<br><input type = "number" name="train3"><br> TRAIN NAME-:<br><input type = "text" name="trainname3"><br>FROM-:<br> <input type = "text" name="trainfrom3"><br>TO-:<br><input type = "text" name="trainto3"><br></td>
<td> 
Enter ARRIVAL TIME <input type="time" name="atm3"><br>
Enter DEPARTURE TIME  <input type="time" name="dtm3"><br>
CHOOSE PLATFORM<br>
  <input type="radio" name="pm3" value="PLATFORM-1">PLATFORM-1<br>
  <input type="radio" name="pm3" value="PLATFORM-2">PLATFORM-2<br>
</td>
<td> 
Enter ARRIVAL TIME <input type="time" name="att3"><br>
Enter DEPARTURE TIME  <input type="time" name="dtt3"><br>
CHOOSE PLATFORM<br>
  <input type="radio" name="pt3" value="PLATFORM-1">PLATFORM-1<br>
  <input type="radio" name="pt3" value="PLATFORM-2">PLATFORM-2<br>
</td>
<td> 
Enter ARRIVAL TIME <input type="time" name="atw3"><br>
Enter DEPARTURE TIME  <input type="time" name="dtw3"><br>
CHOOSE PLATFORM<br>
  <input type="radio" name="pw3" value="PLATFORM-1">PLATFORM-1<br>
  <input type="radio" name="pw3" value="PLATFORM-2">PLATFORM-2<br>
</td>
<td> 
Enter ARRIVAL TIME <input type="time" name="atth3"><br>
Enter DEPARTURE TIME  <input type="time" name="dtth3"><br>
CHOOSE PLATFORM<br>
  <input type="radio" name="pth3" value="PLATFORM-1">PLATFORM-1<br>
  <input type="radio" name="pth3" value="PLATFORM-2">PLATFORM-2<br>
</td>
<td> 
Enter ARRIVAL TIME <input type="time" name="atf3"><br>
Enter DEPARTURE TIME  <input type="time" name="dtf3"><br>
CHOOSE PLATFORM<br>
  <input type="radio" name="pf3" value="PLATFORM-1">PLATFORM-1<br>
  <input type="radio" name="pf3" value="PLATFORM-2">PLATFORM-2<br>
</td>
<td> 
Enter ARRIVAL TIME <input type="time" name="ats3"><br>
Enter DEPARTURE TIME  <input type="time" name="dts3"><br>
CHOOSE PLATFORM<br>
  <input type="radio" name="ps3" value="PLATFORM-1">PLATFORM-1<br>
  <input type="radio" name="ps3" value="PLATFORM-2">PLATFORM-2<br>
</td>
<td> 
Enter ARRIVAL TIME <input type="time" name="atsu3"><br>
Enter DEPARTURE TIME  <input type="time" name="dtsu3"><br>
CHOOSE PLATFORM<br>
  <input type="radio" name="psu3" value="PLATFORM-1">PLATFORM-1<br>
  <input type="radio" name="psu3" value="PLATFORM-2">PLATFORM-2<br>
</td>
</tr>
</table>

 <center> <input type=submit value="TRAIN SCHEDULE"> <input type=reset value="RESET"> </center>
</form>

</body>

<?php
if($_POST)
{
                               /*    TRAIN 1 MONDAY TO SUNDAY VARIABLES   */
$atm1=$_POST['atm1'];
$dtm1=$_POST['dtm1'];
$pm1=$_POST['pm1'];

$att1=$_POST['att1'];
$dtt1=$_POST['dtt1'];
$pt1=$_POST['pt1'];

$atw1=$_POST['atw1'];
$dtw1=$_POST['dtw1'];
$pw1=$_POST['pw1'];

$atth1=$_POST['atth1'];
$dtth1=$_POST['dtth1'];
$pth1=$_POST['pth1'];

$atf1=$_POST['atf1'];
$dtf1=$_POST['dtf1'];
$pf1=$_POST['pf1'];

$ats1=$_POST['ats1'];
$dts1=$_POST['dts1'];
$ps1=$_POST['ps1'];

$atsu1=$_POST['atsu1'];
$dtsu1=$_POST['dtsu1'];
$psu1=$_POST['psu1'];

                            /*    TRAIN 2 MONDAY TO SUNDAY VARIABLES   */

$atm2=$_POST['atm2'];
$dtm2=$_POST['dtm2'];
$pm2=$_POST['pm2'];

$att2=$_POST['att2'];
$dtt2=$_POST['dtt2'];
$pt2=$_POST['pt2'];

$atw2=$_POST['atw2'];
$dtw2=$_POST['dtw2'];
$pw2=$_POST['pw2'];

$atth2=$_POST['atth2'];
$dtth2=$_POST['dtth2'];
$pth2=$_POST['pth2'];

$atf2=$_POST['atf2'];
$dtf2=$_POST['dtf2'];
$pf2=$_POST['pf2'];

$ats2=$_POST['ats2'];
$dts2=$_POST['dts2'];
$ps2=$_POST['ps2'];

$atsu2=$_POST['atsu2'];
$dtsu2=$_POST['dtsu2'];
$psu2=$_POST['psu2'];



                         /*    TRAIN 3 MONDAY TO SUNDAY VARIABLES   */

$atm3=$_POST['atm3'];
$dtm3=$_POST['dtm3'];
$pm3=$_POST['pm3'];

$att3=$_POST['att3'];
$dtt3=$_POST['dtt3'];
$pt3=$_POST['pt3'];

$atw3=$_POST['atw3'];
$dtw3=$_POST['dtw3'];
$pw3=$_POST['pw3'];

$atth3=$_POST['atth3'];
$dtth3=$_POST['dtth3'];
$pth3=$_POST['pth3'];

$atf3=$_POST['atf3'];
$dtf3=$_POST['dtf3'];
$pf3=$_POST['pf3'];

$ats3=$_POST['ats3'];
$dts3=$_POST['dts3'];
$ps3=$_POST['ps3'];

$atsu3=$_POST['atsu3'];
$dtsu3=$_POST['dtsu3'];
$psu3=$_POST['psu3'];

         /*  TRAIN DETAILS VARIABLE  */

$train1=$_POST['train1'];
$train2=$_POST['train2'];
$train3=$_POST['train3'];

$trainname1=$_POST['trainname1'];
$trainname2=$_POST['trainname2'];
$trainname3=$_POST['trainname3'];

$trainfrom1=$_POST['trainfrom1'];
$trainto1=$_POST['trainto1'];
$trainfrom2=$_POST['trainfrom2'];
$trainto2=$_POST['trainto2'];
$trainfrom3=$_POST['trainfrom3'];
$trainto3=$_POST['trainto3'];

             /* PRINTING THE WHOLE CHART WITH DETIAILS ENTERED BY USER  */

echo"<table >";

echo" <tr> <th>TRAIN DETAILS-:</th> <th>MONDAY</th> <th>TUESDAY</th> <th>WEDNESDAY</th> <th>THURSDAY</th><th>FRIDAY</th> <th>SATURDAY</th> <th>SUNDAY</th></tr>";

echo"<tr> <td><b>TRAIN NO-:$train2<br><hr>TRAIN NAME-:<br>$trainname1<br><hr>TRAIN FROM-:<br>$trainfrom1<br><hr>TRAIN TO-:<br>$trainto1</b></td> <td>TIMING $atm1 - $dtm1<br>$pm1</td> <td>TIMING $att1 - $dtt1<br>$pt1</td><td>TIMING $atw1 - $dtw1<br>$pw1</td><td>TIMING $atth1 - $dtth1<br>$pth1</td><td>TIMING $atf1 - $dtf1<br>$pf1</td><td>TIMING $ats1 - $dts1<br>$ps1</td> <td>TIMING $atsu1 - $dtsu1<br>$psu1</td></tr>";

echo"<tr> <td><b>TRAIN NO-:$train2<br><hr>TRAIN NAME-:<br>$trainname2<br><hr>TRAIN FROM-:<br>$trainfrom2<br><hr>TRAIN TO-:<br>$trainto2</b></td> <td>TIMING $atm2 - $dtm2<br>$pm2</td> <td>TIMING $att2 - $dtt2<br>$pt2</td><td>TIMING $atw2 - $dtw2<br>$pw2</td><td>TIMING $atth2 - $dtth2<br>$pth2</td><td>TIMING $atf2 - $dtf2<br>$pf2</td><td>TIMING $ats2 - $dts2<br>$ps2</td> <td>TIMING $atsu2 - $dtsu2<br>$psu2</td></tr>";

echo"<tr> <td><b>TRAIN NO-:$train3<br><hr>TRAIN NAME-:<br>$trainname3<br><hr>TRAIN FROM-:<br>$trainfrom3<br><hr>TRAIN TO-:<br>$trainto3</b></td> <td>TIMING $atm3 - $dtm3<br>$pm3</td> <td>TIMING $att3 - $dtt3<br>$pt3</td><td>TIMING $atw3 - $dtw3<br>$pw3</td><td>TIMING $atth3 - $dtth3<br>$pth3</td><td>TIMING $atf3 - $dtf3<br>$pf3</td><td>TIMING $ats3 - $dts3<br>$ps3</td> <td>TIMING $atsu3 - $dtsu3<br>$psu3</td></tr>";



echo"</table>";

}
?>
</html>
