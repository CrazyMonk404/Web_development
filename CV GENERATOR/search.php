<!DOCTYPE html>
<style>
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
p
{
	font-size:175%;
}
</style>
<body>
<div id="t1">
<center>
<form method=post action="new.php">
<table>
<tr>
<th align=left>
Enter Your Filename:
</th>
<th>
<input type=text name="filename">
</th>
</tr>
<tr>
</tr>
<tr>
</tr>
<tr>
</tr>
<tr>
<th align=left>
Select Type:
</th>
<th>
<select name=type>
<option value="OFFICIAL">Official Details only</option>
<option value="PERSONAL">Personal Details only</option>
<option value="FULL">Full CV</option>
</select>
</th>
</tr>
<tr>
</tr>
<tr>
</tr>
<tr>
</tr>
<tr>
<th colspan=2 align=center>
<input type=submit>
</th>
</tr>
</table>
</form>
</center>
</div >
</body>
</html>





