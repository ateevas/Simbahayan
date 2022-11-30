<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
header("Access-Control-Allow-Methods:POST");
include "connection.php";

if(isset($_POST["tag"])) {	//POST
	$tag = $_POST["tag"];
}else if(isset($_GET["tag"])){ //GET
	$tag = $_GET["tag"];
}

switch ($tag) {
	case 'get_colleges':
		$query="SELECT * FROM tbl_colleges";
		$stmt=$pdo->prepare($query);
		if($stmt->execute()) {
			$datax=json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
			$datay=json_decode($datax, true);
			$toecho="";
			for ($i=0; $i < count($datay); $i++) { 
				$toecho.="<option value='".$datay[$i]['id']."'>".$datay[$i]['college_name']."</option>";
			}
			echo $toecho;
		} else {
			echo json_encode([
				"status" => "error"
			]);
		}
	break;
	case 'save_userinfo':
		$user_id=$_GET['user_id'];
		$fname=$_GET['fname'];
		$lname=$_GET['lname'];
		$id_number=$_GET['id_number'];
		$college=$_GET['college'];
		$email=$_GET['email'];
		$contact=$_GET['contact'];
		$bday=$_GET['bday'];
		$position=$_GET['position'];
		$org=$_GET['org'];
		$query="UPDATE tbl_users SET
			fname=?,
			lname=?,
			id_num=?,
			college=?,
			email=?,
			contact=?,
			bday=?,
			position=?,
			organization=?
			WHERE id=?
		";
		$stmt=$pdo->prepare($query);
		if($stmt->execute([$fname,$lname,$id_number,$college,$email,$contact,$bday,$position,$org,$user_id])) {
			echo json_encode([
				"status" => "updated"
			]);
		} else {
			echo json_encode([
				"status" => "error"
			]);
		}
	break;
	case 'get_userinfo':
		$user_id=$_GET['user_id'];
		$query="SELECT tbl_users.*, tbl_colleges.college_name FROM tbl_users INNER JOIN tbl_colleges ON tbl_colleges.id=tbl_users.college WHERE tbl_users.id=?";
		$stmt=$pdo->prepare($query);
		if($stmt->execute([$user_id])) {
			echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
		} else {
			echo json_encode([
				"status" => "error"
			]);
		}
	break;
	case 'register':
		$fname= $_POST['fname'];
		$lname= $_POST['lname'];
		$email= $_POST['email'];
		$bday= $_POST['bday'];
		$gender= $_POST['gender'];
		$college= $_POST['college'];
		$id_num= $_POST['id_num'];
		$contact= $_POST['contact'];
		$org= $_POST['org'];
		$position= $_POST['position'];
		$password= $_POST['password'];

		$query="INSERT INTO tbl_users SET
			user_role=?,
			fname=?,
			lname=?,
			email=?,
			bday=?,
			gender=?,
			college=?,
			id_num=?,
			contact=?,
			organization=?,
			position=?,
			password=?";

		$stmt=$pdo->prepare($query);
		if($stmt->execute([
			"1",
			$fname,
			$lname,
			$email,	
			$bday,
			$gender,
			$college,
			$id_num,
			$contact,
			$org,
			$position,
			$password
		])) {
			echo json_encode([
				"status" => "ok",
			]);
		} else {
			echo json_encode([
				"status" => "error"
			]);
		}
	break;
	case 'login': 
		$email= $_POST['email'];
		$password= $_POST['password'];
		
		
		$query="SELECT * FROM tbl_users WHERE email=?";
		$stmt=$pdo->prepare($query);
		if($stmt->execute([$email])) {
			if($stmt->rowCount() == 1) {
				 $row=$stmt->fetch(PDO::FETCH_ASSOC);
				if($password==$row['password']) {
					echo json_encode([
						"status" => "ok",
						"id" => $row['id'],
						"user_role" => $row['user_role']
				]);
				} else {
					echo json_encode([
					"status" => "error_1"
				]);
			   }
			} else {
				echo json_encode([
				"status" => "error_2"
			]);
			}
		} else {
			echo json_encode([
				"status" => "error3"
			]);
		}
		break;
}
?>