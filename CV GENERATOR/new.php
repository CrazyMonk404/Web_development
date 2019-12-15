<?php
if($_POST)
{
$filename=$_POST['filename'];
$type=$_POST['type'];

echo "<img src='uploads/$filename.png' alt='$filename' style='width:250px;height:400px;'>";
echo "<br>";
if($type=="OFFICIAL")
{
     $y=fopen("$filename official.txt","r+");
while(!feof($y))
{
echo "<h1>".fgets($y)."<br></h1><hr>";
}
fclose($y);
}
if($type=="PERSONAL")
{
    $y=fopen("$filename personal.txt","r+");
while(!feof($y))
{
echo "<h1>".fgets($y)."<br></h1><hr>";
}
fclose($y);
}

if($type=="FULL")
{
    $y=fopen("$filename official.txt","r+");
echo "<h1>".fgets($y)."<br></h1><hr>";
fclose($y);

$x=fopen("$filename personal.txt","r+");
echo "<h1>".fgets($x)."<br></h1><hr>";
fclose($x);
}


}
?>