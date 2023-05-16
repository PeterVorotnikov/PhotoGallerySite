<!DOCTYPE html>

<?php


if(!empty($_POST['name']) && $_FILES['photo']['error'] == UPLOAD_ERR_OK){
	$id = uniqid();
	$newpath = $_SERVER['DOCUMENT_ROOT'] . '/img/images/' . $id . '.' . pathinfo($_FILES['photo']['name'])['extension'];
	$newpathdb = '../img/images/' . $id . '.' . pathinfo($_FILES['photo']['name'])['extension'];

	try{
		$conn = new PDO("pgsql:host=localhost;dbname=photogallery", 'postgres', '789456');
		echo '<br>';
		echo "INSERT INTO photos (user_email, name, url, date_of_creating) VALUES ('a@bb', '" . $_POST['name'] . "', '" . $newpath . "', current_date);";
		$request = $conn->prepare("INSERT INTO photos (user_email, name, url, date_of_creating) VALUES ('a@bb', '" . $_POST['name'] . "', '" . $newpathdb . "', current_date);");
		echo $_FILES['photo']['tmp_name'] . "\t" . $newpath . "\t" . $_FILES;
		if(move_uploaded_file($_FILES['photo']['tmp_name'], $newpath)){
			$request->execute();
		}
		else{
			echo 'Move error';
		}
	}
	catch(Exception $e){
		echo $e->getmessage();
	}

}
else{
	echo 'Not ok';
}

?>

<html>
	<head>
		<meta charset='utf-8'>
	</head>
	<body>
		<form enctype='multipart/form-data' method='post' action=''>
			<input name='photo' type='file'>
			<input name='name' type='text'>
			<label>Name</label>
			<input type='submit'>
		</form>
	</body>
</html>
