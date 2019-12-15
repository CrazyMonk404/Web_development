<?php

if($_POST)
{
	$name = $_POST['name'];
	$address= $_POST['address'];
	$age = $_POST['age'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$image = $_POST['image'];
	$carrer_obj=$_POST['career_obj'];
	$date=$_POST['date'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$category=$_POST['category'];
	$gender = $_POST['Gender'];
	$nationality=$_POST['Nationality'];
	$home_town = $_POST['Home'];
	$grade =$_POST['grade'];
	$board = $_POST['board_1'];
	$school = $_POST['school_1'];
	$gpa = $_POST['gpa1'];
	$grade1 =$_POST['grade1'];
	$board1= $_POST['board_2'];
	$school1 = $_POST['school_2'];
	$gpa1 = $_POST['gpa2'];
	$grade2 =$_POST['grade2'];
	$board2 = $_POST['board_3'];
	$school2 = $_POST['school_3'];
	$gpa2 = $_POST['gpa3'];
	$grade3 =$_POST['grade3'];
	$board3 = $_POST['board_4'];
	$school3 = $_POST['school_4'];
	$gpa3 = $_POST['gpa4'];
	$ex_date = $_POST['ex_date'];
	$emp = $_POST['employer'];
	$desc = $_POST['desc'];
	$achievement = $_POST['achievement'];
	$skill = $_POST['skill'];
	$skill1 = $_POST['skill1'];
	$skill2= $_POST['skill2'];
	$skill3 = $_POST['skill3'];
	$skill4 = $_POST['skill4'];
	$skill5 = $_POST['skill5'];
	$references = $_POST['refer'];
}

echo "<h3><strong>$name</strong></h3><hr>
	<div><h3><u><em> Address Correspondence</em></u></h3>
			$address<br>
			<br>
			Age    :$age<br>
			Cell   :$contact<br>
			E-mail :$email<br><br>
			</h4></div>
	<div>
		<u><h2><u><em>CAREER OBJECTIVE -</em></u></h2></u>
		<h3>$carrer_obj</h3</div><hr>
	<div>
		<table>
		<u><h2><p ><strong><em>EDUCATION</em></strong></p></h2></u>
		<tr><th>Grade/<br>Degree</th>
		<th>Board</th>
		<th>School/<br>College</th>
		<th>GPA/percentage</th></tr>
		<tr>
		<td>$grade</td>
		<td>$board</td>
		<td>$school</td>
		<td>$gpa</td></tr>
	<tr><td>$grade2</td>
		<td>$board2</td>
		<td>$school2</td>
		<td>$gpa2</td>
	</tr><br> <tr><td>$grade3</td>
		<td>$board3</td>
		<td>$school3</td>
		<td>$gpa3</td>
	</tr> 
	</table></div>
	<div>
		<u><h2><p><strong><em>ADDITIONAL SKILLS</em></strong></p></h2></u>
		<p> 
		<ol><li>$skill</li><li>$skill1</li><li>$skill2</li><li>$skill3</li><li>$skill4</li></ol>
	</p>
		
	</div>
	<div>
		<h2><p><strong><em><u>WORK EXPERIENCE</u></em></strong></p></h2>
		<p> 
		DATE : $ex_date<br>
		Employer : $emp<br>
		Description : $desc<br>
	</div>

	<div>
		<h2><p><strong><em><u>ACHIEVEMENTS</u></em></strong></p></h2>
		<p> 
			$achievement
			<br></p></div><br><br>

		<h2><em><u>PERSONAL DETAILS -</u></em></h2>
		<h2>
	<table>
		<tr>
			<th>Date of Birth </th><td>:</td><td>$date</td>
		</tr>
		<tr>
			<th>Father's Name </th><td>:</td><td>$fname</td>
		</tr>
		<tr>
			<th>Mother's Name </th><td>:</td><td>$mname</td>
		</tr>
		<tr>
			<th>Category </th><td>:</td><td>$category</td>
		</tr>
		<tr>
			<th>Gender</th><td>:</td><td>$gender</td>
		</tr>
		<tr>
			<th>Nationality </th><td>:</td><td>$nationality</td>
		</tr>
		<tr>
			<th>Home Town</th><td>:</td><td>$home_town</td>
		</tr>
	</table>
</h2>
<br>
<em>I declare that the details above are correct and true to the best of my knowledge.</em><br>
<b>$name</b>";
?>
