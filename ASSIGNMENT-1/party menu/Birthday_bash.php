<!DOCTYPE html>
<head>
<title> BIRTHDAY BASH</title>
	<style type="text/css">
		body
		{
			background-image:url("1234.jpeg");
                      background-size:cover;
                      background-repeat:no-repeat;
		}
		h1
		{
			font-family: 'Comfortaa', cursive;
		}
               
	</style>
</head>

<form method="POST" action="Birthday.php">
<center>
<h1>BIRTHDAY BASH</h1>
<table cellpadding=1 cellspacing=3 border=1px>
<h2> Enter Details:</h2>
<tr>
<th align="left">
<font size=4>Name:
</th>
<th align="left">
<input type="text" name="name">
</th>
</tr>
<tr>
<th align="left">
<font size=4>Date of booking:
</th>
<th align="left">
<input type="date" name="date">
</th>
</tr>
<tr>
<th align="left">
<font size=4>Time:
</th>
<th align="left"><input type="time" name="time1"> to <input type="time" name="time2">
</th>
</tr>
<tr>
<th align="left">
<font size=4> Number of people:
</th>
<th align="left">
<input type="number" name="guest">
</th>
</tr>
<tr>
<th align="left">
<font size=4>(approx)
</th>
<th align="left">
</th>
</tr>
</table cellpadding=1 cellspacing=3 border=1px>
<h1>Menu:</h1>
<h3>1.Cakes:</h3>
<h4>Flavour:&nbsp<select name="cake"> 
<option>
<option>Chocolate(cost per kg=550)
<option>Strawberry(cost per kg=650)
<option>Butterscotch(cost per kg=500)
<option>Dry-Fruit(cost per kg=750)
<option>Red-Velvet(cost per kg=950)
</select>
<br>
<br>
Size: 
<select name="cakesize"> 
<option>1-KG
<option>1.5-KG
<option>2-KG
<option>2.5-KG
<option>3-KG
</select>
<br>
Message on Cake &nbsp<input type="text" name="cakemessage">
<br>
<h3><center>SNACKS</center></h3>
<table cellpadding=1 cellspacing=3 border=1px>
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
<h3><center>DESSERT</center></h3>
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




