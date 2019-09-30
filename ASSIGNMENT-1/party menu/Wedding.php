<!DOCTYPE html>
<head>
<title>WEDDING-MENU</title>
<title></title>
<style type="text/css">
                body
                {
                      background-image:url("3232.jpeg");
                      background-size:cover;
                      background-repeat:no-repeat;   
                }
		h1
		{
			font-family: 'Comfortaa', cursive;
		}
               
</style>
</head>
<body>
<form method="POST" action="wedding2.php">
<br>
<center>

<h1>WEDDING MENU:</h1>
<h3> Enter Details for the Wedding</h3><br>
Name:&nbsp<input type="text" name="name">&nbsp&nbspDate of booking:&nbsp<input type="date" name="date">
<br>
<br>
Time&nbsp<input type="time" name="time1"> &nbsp <input type="time" name="time2" ><br>
<br>
<br>
Number of People(approx.)&nbsp<input type="number" name="guest">
<br>
<br>
<h3><center>DINNER-ITEMS(Cost will be charged RS.450 per plate)</center></h3>
<table cellpadding=10 cellspacing=15>
<tr>
<center>
<td><input type=checkbox name="c[]" value="Dal Tadka ">Dal Tadka <br></td>
<td><input type=checkbox name="c[]" value="Dal Makhani "> Dal Makhani <br></td>
<td><input type=checkbox name="c[]" value="Paneer Butter Masala "> Paneer Butter Masala <br></td>
<td><input type=checkbox name="c[]" value="Shahi Paneer"> Shahi Paneer <br></td>
<td><input type=checkbox name="c[]" value="Kadhai Paneer">  Kadhai Paneer <br></td>
<td><input type=checkbox name="c[]" value="Malai Kofta "> Malai Kofta <br></td>
</center>
</tr>
<br>
</table>
<h1 align=left>SNACKS:</h1>
<table cellpadding=10 cellspacing=15 border=1px>
<tr>
<center>
<td align="center"><center><img src="Paneer_Tikka.jpg"  width="30%" height="30%"><br><input type=checkbox name="starters[]" value="Paneer Tikka (Price per plate=60)"> Paneer Tikka (Price per plate=60)</center></td>
<td align="center"><center><img src="momos.jpg"  width="30%" height="30%"><br><input type=checkbox name="starters[]" value=" Momos (Price per plate=60)" > Momos (Price per plate=60)</center></td>
<td align="center"><center><img src="spring-rolls.jpg"  width="30%" height="30%"><br><input type=checkbox name="starters[]" value="Spring Rolls (Price per plate=60)"> Spring Rolls (Price per plate=60)</center></td>
</center>
</tr>


<tr>
<center>
<td><center><img src="Veg-Chowmein.jpg"  width="30%" height="30%"><br><input type=checkbox name="starters[]" value="Veg. Chowmein (Price per plate=60)"> Veg. Chowmein (Price per plate=60)</center></td>
<td><center><img src="chilli-paneer.jpg"  width="30%" height="30%"><br><input type=checkbox name="starters[]" value="Chilli-Paneer (Price per plate=60)"> Chilli-Paneer (Price per plate=60)</center></td>
<td><center><img src="Veg-Manchurian.jpg"  width="30%" height="30%"><br><input type=checkbox name="starters[]" value="Veg. Manchurian (Price per plate=60)"> Veg. Manchurian (Price per plate=60)</center></td>
</center>
</tr>

</table>

</table>
<h1 align=left>DESSERT:</h1>

<table cellpadding=10 cellspacing=15 border=1px>
<tr align="center">
<td><center><img src="cheesecake.jpeg"  width="30%" height="30%"><br>Cheese cup-cakes<br><input type=checkbox name="dessert[]" value="Cheese cup-cakes"></center></td>
<td><center><img src="chocolate_mousse.jpg"  width="30%" height="30%"><br>Chocolate mousse<input type=checkbox name="dessert[]" value="Chocolate mousse"></center></td>
<td><center><img src="apple-berry.jpeg"  width="30%" height="30%"><br>Apple berry crumble<input type=checkbox name="dessert[]" value="Apple berry crumble"></center></td>
<td><center><img src="strawberry-elderflower-trifle.jpg"  width="30%" height="30%"><br>Strawberry & elderflower trifle<input type=checkbox name="dessert[]" value="Strawberry & elderflower trifle"></center></td>
</tr>

</table>

<input type=submit value="GENERATE BILL"></center>

</form>
</body>
</html>



