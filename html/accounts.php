<?php

require_once("config.php");

session_start();

if(!empty($_POST['type'])){
	if($_POST['type'] == "registration"){
		if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['pass']) || empty($_POST['checkPass'])){
			echo "Invalid form data";
			die();
		}

		$namePattern = '/^[a-zA-Z0-9]+$/';
		$emailPattern = '/^[a-zA-Z0-9]+@[a-zA-Z]+$/';
		$phonePattern = '/^\+?[0-9]{10}$/';
		$passPattern = '/^.{6,}$/';

		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$pass = $_POST['pass'];
		$checkPass = $_POST['checkPass'];

		if(preg_match($namePattern, $name) && preg_match($emailPattern, $email) && preg_match($phonePattern, $phone) && preg_match($passPattern, $pass) && $pass == $checkPass){


			try{
				$conn = new PDO('pgsql:host=localhost;dbname=' . $dbname, $username, $password);

				$request = $conn->prepare('SELECT * FROM users WHERE email = ?;');
				$request->bindParam(1, $email, PDO::PARAM_STR);
				$request->execute();

				$i = 0;
				while($result = $request->fetch(PDO::FETCH_ASSOC)){
					$i = $i + 1;
				}
				if($i != 0){
					echo 'User is already exist';
					$conn = null;
					die();
				}

				$addReguest = $conn->prepare('INSERT INTO users (name, email, phone, pass) VALUES (?, ?, ?, ?);');
				$addReguest->bindParam(1, $name, PDO::PARAM_STR);
				$addReguest->bindParam(2, $email, PDO::PARAM_STR);
				$addReguest->bindParam(3, $phone, PDO::PARAM_STR);
				$addReguest->bindParam(4, $pass, PDO::PARAM_STR);
				$addReguest->execute();

				$conn = null;

				$_SESSION['name'] = $name;
				$_SESSION['email'] = $email;
				echo 'Ok';
				exit();
			}
			catch(Exception $e){
				echo 'Failed connecting';
				die();
			}


		}	
		else{
			echo 'Invalid form data';
			die();
		}
	}
	else if($_POST['type'] == 'session'){
		if(!empty($_SESSION['name']) && !empty($_SESSION['email'])){
			echo '1';
		}
		else{
			echo '0';
		}
	}
	else if($_POST['type'] == 'logout'){
		unset($_SESSION['name']);
		unset($_SESSION['email']);
	}


	else if($_POST['type'] == 'login'){
		if(empty($_POST['email']) || empty($_POST['pass'])){
			echo 'Invalid form data';
			die();
		}

		$email = $_POST['email'];
		$pass = $_POST['pass'];

		try{
			$conn = new PDO('pgsql:host=localhost;dbname=' . $dbname, $username, $password);

			$loginRequest = $conn->prepare('SELECT * FROM users WHERE email = ?;');
			$loginRequest->bindParam(1, $email, PDO::PARAM_STR);
			$loginRequest->execute();

	
			$result = $loginRequest->fetchAll(PDO::FETCH_ASSOC);

			if(count($result) > 1){
				echo 'Count of users is not valid';
				die();
			}
			if(count($result) < 1){
				echo 'User is not exist';
				die();
			}

			if($result[0]['pass'] != $pass){
				echo 'Wrong password';
				die();
			}

			$_SESSION['name'] = $result[0]['name'];
			$_SESSION['email'] = $result[0]['email'];

			$conn = null;

			echo 'Ok';
			exit();
		}

		catch(Exception $e){
			echo 'Failed connecting';
			die();
		}

	}
}

?>
