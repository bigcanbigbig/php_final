<?php

//$conni=mysqli_connect('localhost','root','BigisCan0637','final');
$conni=mysqli_connect('localhost','rootphp','classforphp','2');	
                                   //"帳號"    "密碼"   "資料庫名稱"
$city=$_POST["yl"];
//$city="台南市";
mysqli_query($conni,"SET NAMES 'UTF8'");
mysqli_query($conni,"SET CHARACTER SET UTF8");
mysqli_query($conni,"SET CHARACTER_SET_RESULTS=UTF8'");
mysqli_query($conni,"SET character_set_connection=utf8, character_set_results=utf8, character_set_client=binary");

$sql="SELECT * FROM `city` WHERE `city_name`='".$city."'";
$result=mysqli_query($conni,$sql);
$row=mysqli_fetch_array($result);
$city_no=$row[0];
$sql="SELECT * FROM `area` WHERE `city_no`=".$city_no;
//echo $sql;
$result=mysqli_query($conni,$sql);
while($row=mysqli_fetch_array($result)){
	echo "<option value='".$row[2]."'>".$row[2]."</option>";
}
?>
