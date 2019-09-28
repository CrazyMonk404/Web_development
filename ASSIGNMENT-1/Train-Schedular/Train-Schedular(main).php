<!DOCTYPE html>
<head>
<title>TRAIN-SCHEDULAR</title>
<style>
table
{
border: 1px solid white; 
}
td,th
{
border:5px solid blue; padding:10px; spacing:10px; 
}

td:nth-child(1)
{
background-color:skyblue;
}
th
{
background-color:skyblue;
}

</style>

</head>
<body>
<h1 style="color:blue";><center>TRAIN SCHEDULE</center></h1>
<form name="tt" method="POST"action="train.php">

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
</html>
