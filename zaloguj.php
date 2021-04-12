<?php

	session_start();


		if((isset($_POST['login'])) && (isset($_POST['password'])))
		{
			require_once "connect.php";
			
			$connect = new PDO('mysql:host='.$host.';dbname='.$db_name.'', $db_user,$db_password);
			$connect -> exec("SET CHARACTER SET utf8");
			$login = $_POST['login'];
			$password = $_POST['password'];
			$hash = sha1(md5($password));
			
			$login = htmlentities($login, ENT_QUOTES, "UTF-8");
			$password = htmlentities($hash, ENT_QUOTES, "UTF-8");
			
			
				$sql = "SELECT * FROM Users WHERE login='$login' AND password='$hash'";
				if($execute = @$connect->query($sql))
				{
					
					$count_users = $execute->rowCount();
					
					if($count_users > 0)
					{
						$_SESSION['zalogowanie']=true;
						$row = $execute->fetch();
						$_SESSION['login'] = $row['login'];
						$_SESSION['password'] = $row['password'];
						header("Location: start.php");
					}
					else
					{
						echo "ERROR2";
					}
				}
				else
				{
					$_SESSION['blad'] = '<span style="color: red;">Nieprawidlowy login lub haslo !</span>';
					header("Location: login.php");
				}
		}
		else
		{
			echo "Brak poł.";
		}
$connect -> close();
?>