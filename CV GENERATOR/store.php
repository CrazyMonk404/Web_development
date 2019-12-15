<html>
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
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select text file to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</div>
</html>
<?php

if($_POST)
{
	$name = $_POST['name'];
	$address= $_POST['address'];
	$age = $_POST['age'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	
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
	
	$achievement = $_POST['achievement'];
	$skill = $_POST['skill'];
	$skill1 = $_POST['skill1'];
	$skill2= $_POST['skill2'];
	$skill3 = $_POST['skill3'];
	$skill4 = $_POST['skill4'];
	$skill5 = $_POST['skill5'];
    $references = $_POST['refer'];
    $filename = $_POST['filename'];

    $x=fopen("$filename personal.txt","w+");
fwrite($x,$name);
fwrite($x,"Address:\n".$address);
fwrite($x,"\n Age:".$age);
fwrite($x,"\nContact Number:".$contact);
fwrite($x,"\nDate of Birth:".$date);
fwrite($x,"\nFather's Name:".$fname);
fwrite($x,"\nMother's Name".$mname);
fwrite($x,"\nCategory:".$category);
fwrite($x,"\nGender:".$gender);
fwrite($x,"\nNationality:".$nationality);
fwrite($x,"\nHome-Town:".$home_town);
fwrite($x,"\nAchievements:".$achievement);
fclose($x);

$y=fopen("$filename official.txt","w+");
fwrite($y,$name);
fwrite($y,"\nE-mail:".$email);
fwrite($y,"\nCareer Objective:".$carrer_obj);
fwrite($y,"\nGrade".$grade);
fwrite($y,"\nBoard".$board);
fwrite($y,"\nSchool".$school);
fwrite($y,"\nCgpa".$gpa);
fwrite($y,"\nGrade1".$grade1);
fwrite($y,"\nBoard1".$board1);
fwrite($y,"\nSchool1".$school1);
fwrite($y,"\ngpa1".$gpa1);
fwrite($y,"\n".$grade2);
fwrite($y,"\n".$board2);
fwrite($y,"\n".$school2);
fwrite($y,"\n".$gpa2);
fwrite($y,"\n".$grade3);
fwrite($y,"\n".$board3);
fwrite($y,"\n".$school3);
fwrite($y,"\n".$gpa3);
fwrite($y,"\nSkills\n:".$skill);
fwrite($y,"1.".$skill1);
fwrite($y,"\n2.".$skill2);
fwrite($y,"\n3.".$skill3);
fwrite($y,"\n4.".$skill4);
fwrite($y,"\n5.".$skill5);
fwrite($y,"\nReferences:".$references);
fclose($y);

}
?>
