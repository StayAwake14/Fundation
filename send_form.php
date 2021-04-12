<?php
if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['phone']) && isset($_POST['email']) 
	&& isset($_POST['content']))
{
	require_once "connect.php";
	
	$connect = new PDO('mysql:host='.$host.';dbname='.$db_name.'', $db_user,$db_password);

	$name = $_POST['name'];
	$surname =$_POST['surname'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$content = $_POST['content'];

	$send = "INSERT INTO Forms VALUES('','$name','$surname','$phone','$email','$content')";

	if($exec = $connect->query($send))
	{
		ECHO "Formularz wysłany pomyślnie!";
		$_SESSION["check"] = "registered";
		header("Location: form.php?success=1");
	}
	else
	{
		$_SESSION["check"] = "error";
		header("Location: form.php?error=3");
		break;
	}


}






?>