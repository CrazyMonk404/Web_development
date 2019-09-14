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
<h1 style="color:blue";><center>B.Tech CSE OSOS Time Table</center></h1>
<form name="tt" method="POST">

<table >

<tr>
<th>LECTURE NO-:</th>
<th>MONDAY</th>
<th>TUESDAY</th>
<th>WEDNESDAY</th>
<th>THURSDAY</th>
<th>FRIDAY</th>
</tr>

<tr>
<td><b>LECTURE 1</b></td>
<td> 
Enter Subject <input type = "text" name="m1"><br>
Enter Facuty  <input type="text" name="f1"><br>
</td>
<td> 
Enter Subject <input type = "text" name="t1"><br>
Enter Facuty   <input type="text" name="f2"><br>
</td>
<td> 
Enter Subject <input type = "text" name="w1"><br>
Enter Facuty   <input type="text" name="f3"><br>
</td>
<td> 
Enter Subject <input type = "text" name="th1"><br>
Enter Facuty   <input type="text" name="f4"><br>
</td>
<td> 
Enter Subject <input type = "text" name="fr1"><br>
Enter Facuty   <input type="text" name="f5"><br>
</td>
</tr>

<tr>
<td><b>LECTURE 2</b></td>
<td> 
Enter Subject <input type = "text" name="m2"><br>
Enter Facuty   <input type="text" name="f6"><br>
</td>
<td> 
Enter Subject <input type = "text" name="t2"><br>
Enter Facuty   <input type="text" name="f7"><br>
</td>
<td> 
Enter Subject <input type = "text" name="w2"><br>
Enter Facuty   <input type="text" name="f8"><br>
</td>
<td> 
Enter Subject <input type = "text" name="th2"><br>
Enter Facuty   <input type="text" name="f9"><br>
</td>
<td> 
Enter Subject <input type = "text" name="fr2"><br>
Enter Facuty   <input type="text" name="f10"><br>
</td>
</tr>
<tr>
<td><b>BREAK</b></td>
<td> 
<h3><b><center>B</center></b></h3>
</td>
<td>
<h3><b><center>R</center></b></h3> 
</td>
<td> 
<h3><b><center>E</center></b></h3>
</td>
<td>
<h3><b><center>A</center></b></h3> 
</td>
<td>
<h3><b><center>K</center></b></h3><br>
</td>
</tr>
<tr>
<td><b>LECTURE 3</b></td>
<td> 
Enter Subject <input type = "text" name="m3"><br>
Enter Facuty   <input type="text" name="f11"><br>
</td>
<td> 
Enter Subject <input type = "text" name="t3"><br>
Enter Facuty   <input type="text" name="f12"><br>
</td>
<td> 
Enter Subject <input type = "text" name="w3"><br>
Enter Facuty   <input type="text" name="f13"><br>
</td>
<td> 
Enter Subject <input type = "text" name="th3"><br>
Enter Facuty   <input type="text" name="f14"><br>
</td>
<td> 
Enter Subject <input type = "text" name="fr3"><br>
Enter Facuty   <input type="text" name="f15"><br>
</td>
</tr>
<tr>


<td><b>LECTURE 4</b></td>
<td> 
Enter Subject <input type = "text" name="m4"><br>
Enter Facuty   <input type="text" name="f16"><br>
</td>
<td> 
Enter Subject <input type = "text" name="t4"><br>
Enter Facuty   <input type="text" name="f17"><br>
</td>
<td> 
Enter Subject <input type = "text" name="w4"><br>
Enter Facuty   <input type="text" name="f18"><br>
</td>
<td> 
Enter Subject <input type = "text" name="th4"><br>
Enter Facuty   <input type="text" name="f19"><br>
</td>
<td> 
Enter Subject <input type = "text" name="fr4"><br>
Enter Facuty   <input type="text" name="f20"><br>
</td>
</tr>

</table>

 <center> <input type=submit value="GET TIME-TABLE"> </center>
</form>

</body>


<?php
if($_POST)
{

$m1=$_POST['m1'];
$f1=$_POST['f1'];

$t1=$_POST['t1'];
$f2=$_POST['f2'];

$w1=$_POST['w1'];
$f3=$_POST['f3'];

$th1=$_POST['th1'];
$f4=$_POST['f4'];

$fr1=$_POST['fr1'];
$f5=$_POST['f5'];

$m2=$_POST['m2'];
$f6=$_POST['f6'];

$t2=$_POST['t2'];
$f7=$_POST['f7'];

$w2=$_POST['w2'];
$f8=$_POST['f8'];

$th2=$_POST['th2'];
$f9=$_POST['f9'];

$fr2=$_POST['fr2'];
$f10=$_POST['f10'];

$m3=$_POST['m3'];
$f11=$_POST['f11'];

$t3=$_POST['t3'];
$f12=$_POST['f12'];

$w3=$_POST['w3'];
$f13=$_POST['f13'];

$th3=$_POST['th3'];
$f14=$_POST['f14'];

$fr3=$_POST['fr3'];
$f15=$_POST['f15'];

$m4=$_POST['m4'];
$f16=$_POST['f16'];

$t4=$_POST['t4'];
$f17=$_POST['f17'];

$w4=$_POST['w4'];
$f18=$_POST['f18'];

$th4=$_POST['th4'];
$f19=$_POST['f19'];

$fr4=$_POST['fr4'];
$f20=$_POST['f20'];

echo"<table >";

echo" <tr> <th>LECTURE NO-:</th> <th>MONDAY</th> <th>TUESDAY</th> <th>WEDNESDAY</th> <th>THURSDAY</th><th>FRIDAY</th> </tr>";

echo"<tr> <td><b>LECTURE 1</b></td> <td>$m1<br>$f1</td> <td>$t1<br>$f2</td> <td>$w1<br>$f3</td> <td>$th1<br>$f4</td><td>$fr1<br>$f5</td> </tr>";

echo"<tr> <td><b>LECTURE 2</b></td> <td>$m2<br>$f6</td> <td>$t2<br>$f7</td> <td>$w2<br>$f8</td> <td>$th2<br>$f9</td> <td>$fr2<br>$f10</td> </tr>";

echo"<tr> <td><b>Break</b></td> <b><td><center>B</center></b></td> <b><td><center>R</center></b></td> <b><td><center>E</center></b></td> <b><td><center>A</center></b></td> <b><td><center>K</center></b></td> </tr>";

echo"<tr> <td><b>LECTURE 3</b></td> <td>$m3<br>$f11</td> <td>$t3<br>$f12</td> <td>$w3<br>$f13</td> <td>$th3<br>$f14</td> <td>$fr3<br>$f15</td> </tr>";

echo"<tr> <td><b>LECTURE 4</b></td> <td>$m4<br>$f16</td> <td>$t4<br>$f17</td> <td>$w4<br>$f18</td><td>$th4<br>$f19</td> <td>$fr4<br>$f20</td> </tr>";
echo"</table>";

}
?>
</html>