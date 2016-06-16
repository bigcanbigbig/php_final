<html>
	<head>
	</head>
	<body>
		<form action="" method="post">
			sender name:<input type="text" name="sName"><br/>
			sender email: <input type="text" name="sEmail"><br/>
			receiver name: <input type="text" name="rName"><br/>
			title: <input type="text" name="title"><br/>
			content: <br/><textarea name="content" id="" cols="30" rows="10"></textarea><br/>
			<input type="submit" value="send">
		</form>
	</body>
</html>
<?php
	require("PHPMailer/PHPMailerAutoload.php");

	$sName=$_POST["sName"];
	$sEmail=$_POST["sEmail"];
	$rName=$_POST["rName"];
	$title=$_POST["title"];
	$content=$_POST["content"];

	$mail=new PHPMailer();
	$mail->SMTPDebug=1;
	$mail->IsSMTP();

	$mail->SMTPAuth=true;
	$mail->Host="ssl://smtp.gmail.com";
	$mail->Port=465;
	/*$mail->Host="smtp.gmail.com";
	$mail->Port=587;*/

	$mail->Username="jupiter2432321@gmail.com";
	$mail->Password="";
	$mail->CharSet="utf-8";
	$mail->From = $sEmail;
    $mail->FromName = $sName;
	//$mail->Subject="php期末報到A1033337";
	$mail->Subject=$title;
	$mail->AddAddress('php@nuk.im');
	//$mail->AddAttachment('');
		//$mail->AddAddress('ihsien.ting@gmail.com');
	//$mail->From="jupiter2432321@gmail.com";
	//$mail->IsHtml(true);

	//$mail->Body="A1033337 mac address:28-E3-47-FC-19-23 ip address:10.0.180.162";
	$mail->Body=$content;
	$mail->send();
?>