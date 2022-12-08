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
	case 'approve_kra2coordinator':
		$query="UPDATE tbl_kra_submission SET kra2_sub='2' WHERE user_id=?";
		$stmt=$pdo->prepare($query);
		if($stmt->execute([$_GET['user_id']])) {
			echo json_encode([
				"status" => "updated"
			]);
		} else {
			echo json_encode([
				"status" => "error"
			]);
		}
	break;
	case 'get_kra2datafromuserid':
		$query="SELECT * FROM kra2 WHERE user_id=?";
		$stmt=$pdo->prepare($query);
		if($stmt->execute([$_GET['user_id']])) {
			echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
		} else {
			echo json_encode([
				"status" => "error"
			]);
		}
	break;
	case 'check_coordinatorsubmission':
		$query="SELECT * FROM tbl_kra_submission WHERE user_id=?";
		$stmt=$pdo->prepare($query);
		if($stmt->execute([$_GET['user_id']])) {
			echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
		} else {
			echo json_encode([
				"status" => "error"
			]);
		}
	break;
	case 'approve_kra1coordinator':
		$query="UPDATE tbl_kra_submission SET kra1_sub='2' WHERE user_id=?";
		$stmt=$pdo->prepare($query);
		if($stmt->execute([$_GET['user_id']])) {
			echo json_encode([
				"status" => "updated"
			]);
		} else {
			echo json_encode([
				"status" => "error"
			]);
		}
	break;
	case 'get_kra1datafromuserid':
		$query="SELECT * FROM kra1 WHERE user_id=?";
		$stmt=$pdo->prepare($query);
		if($stmt->execute([$_GET['user_id']])) {
			echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
		} else {
			echo json_encode([
				"status" => "error"
			]);
		}
	break;
	case 'get_allsubmittedkra':
		$query="SELECT tbl_kra_submission.*, tbl_colleges.college_name, tbl_users.id_num, tbl_users.fname, tbl_users.lname, tbl_users.email FROM tbl_kra_submission INNER JOIN tbl_users ON tbl_users.id=tbl_kra_submission.user_id INNER JOIN tbl_colleges ON tbl_colleges.id=tbl_users.college";
		$stmt=$pdo->prepare($query);
		if($stmt->execute()) {
			if($stmt->rowCount() != 0) {
				$datax=json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
				$datay=json_decode($datax, true);
				$toecho="";
				for ($i=0; $i < count($datay); $i++) {
					$status="";
					switch ($datay[$i]['kra_status']) {
						case '1':
							$status="<span class='badge bg-success'>Submitted</span>";
						break;
						
						default:
							$status="<span class='badge bg-success'>unknown</span>";
						break;
					}
					$toecho.="<tr>
						<td style='text-transform: capitalize;'>".$datay[$i]['fname']. " " . $datay[$i]['lname']."</td>
						<td>".$datay[$i]['college_name']."</td>
						<td>".$datay[$i]['id_num']."</td>
						<td>".$datay[$i]['email']."</td>
						<td>".date('F d, Y h:i a', strtotime($datay[$i]['date_submitted']))."</td>
						<td>".$status."</td>
						<td><button class='btn btn-link' data-user_id='".$datay[$i]['user_id']."' onclick='goto_kra_select(this)'>View</button></td>
					</tr>";
				}
				echo $toecho;
			} else {
				$toecho="<tr>
						<td style='text-transform: capitalize;' rowspan='6'>No data available</td>
					</tr>";
					echo $toecho;
			}
			
		} else {
			echo json_encode([
				"status" => "error"
			]);
		}
	break;
	case 'check_krasubmission':
		$query="SELECT COALESCE(sum(tbl_kra_submission.id), 0) as kra_submit, COALESCE(sum(kra1.id), 0) as kra1, COALESCE(sum(kra2.id), 0) as kra2, COALESCE(sum(kra3.id), 0) as kra3 FROM kra1 LEFT JOIN kra2 ON kra2.user_id=kra1.user_id LEFT JOIN kra3 ON kra3.user_id=kra1.user_id LEFT JOIN tbl_kra_submission ON tbl_kra_submission.user_id=kra1.user_id WHERE kra1.user_id=? LIMIT 1";
		$stmt=$pdo->prepare($query);
		if($stmt->execute([$_POST['user_id']])) {
			echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
		} else {
			echo json_encode([
				"status" => "error"
			]);
		}
	break;
	case 'submit_allkra':
		$query="INSERT INTO tbl_kra_submission SET 
			kra_status=?,
			user_id=?,
			kra1_sub=?,
			kra2_sub=?,
			kra3_sub=?
			";
		$stmt=$pdo->prepare($query);
		if($stmt->execute(["1",$_GET['user_id'],"1","1","1"])) {

			$queryx="UPDATE kra1
				INNER JOIN kra2 ON kra2.user_id = kra1.user_id
				INNER JOIN kra3 ON kra3.user_id = kra1.user_id
			SET kra1.kra_status = '1',
			    kra2.kra_status = '1',
			    kra3.kra_status = '1'
			WHERE kra1.user_id =?";
					$stmtx=$pdo->prepare($queryx);
					if($stmtx->execute([$_GET['user_id']])) {
						echo json_encode([
							"status" => "ok"
						]);
					} else {
						echo json_encode([
							"status" => "error"
						]);
					}
		} else {
			echo json_encode([
				"status" => "error"
			]);
		}
	break;
	case 'save_kra3':
		$query="INSERT INTO kra3 SET
		kra_status=?,
		user_id=?,
		pos_arr=?,
		pot_arr=?,
		gas_arr=?,
		gat_arr=?,
		ngos_arr=?,
		ngot_arr=?,
		beis_arr=?,
		beit_arr=?,
		lheis_arr=?,
		lheit_arr=?,
		iheis_arr=?,
		iheit_arr=?,
		cbos_arr=?,
		cbot_arr=?,
		pbos_arr=?,
		pbot_arr=?,
		tccs_arr=?,
		tcct_arr=?"; 
		$stmt=$pdo->prepare($query);
		if($stmt->execute([
			"0",
			$_POST['user_id'],
			$_POST['pos_arr'], 
			$_POST['pot_arr'],
			$_POST['gas_arr'],
			$_POST['gat_arr'],
			$_POST['ngos_arr'],
			$_POST['ngot_arr'],
			$_POST['beis_arr'],
			$_POST['beit_arr'],
			$_POST['lheis_arr'],
			$_POST['lheit_arr'],
			$_POST['iheis_arr'],
			$_POST['iheit_arr'],
			$_POST['cbos_arr'],
			$_POST['cbot_arr'], 
			$_POST['pbos_arr'],
			$_POST['pbot_arr'], 
			$_POST['tccs_arr'],
			$_POST['tcct_arr'], 
		])) {

	} else{
			echo json_encode([
				"status" => "error"
				]);
	}
	break;

	case 'save_kra2':
		$query="INSERT INTO kra2 SET
			kra_status=?,
			user_id=?,
			s_puidcd_arr=?,
			t_puidcd_arr=?,
			s_psaa_arr=?,
			t_psaa_arr=?,
			s_pucer_arr=?,
			t_pucer_arr=?,
			s_pul_arr=?,
			t_pul_arr=?,
			udcps_arr=?,
			udcpt_arr=?,
			fcs_arr=?,
			fct_arr=?,
			ps_arr=?,
			pt_arr=?"; 
		$stmt=$pdo->prepare($query);
		if($stmt->execute([
			"0",
			$_POST['user_id'],
			$_POST['s_puidcd_arr'], 
			$_POST['t_puidcd_arr'],
			$_POST['s_psaa_arr'],
			$_POST['t_psaa_arr'],
			$_POST['s_pucer_arr'],
			$_POST['t_pucer_arr'],
			$_POST['s_pul_arr'],
			$_POST['t_pul_arr'],
			$_POST['udcps_arr'],
			$_POST['udcpt_arr'],
			$_POST['fcs_arr'],
			$_POST['fct_arr'],
			$_POST['ps_arr'],
			$_POST['pt_arr'], 
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

	case 'save_kra1':
		$query="INSERT INTO kra1 SET
			kra_status=?,
			user_id=?,
			hs_arr=?,
			ht_arr=?,
			es_arr=?,
			et_arr=?,
			ggs_arr=?,
			ggt_arr=?,
			ejs_arr=?,
			ejt_arr=?,
			cls_arr=?,
			clt_arr=?,
			cahds_arr=?,
			cahdt_arr=?,
			sds_arr=?,
			sdt_arr=?,
			drrms_arr=?,
			drrmt_arr=?,
			fhds_arr=?,
			fhdt_arr=?,
			cofs_arr=?,
			coft_arr=?";

		$stmt=$pdo->prepare($query);
		if($stmt->execute([
			"0",
			$_POST['user_id'],
			$_POST['hs_arr'],
			$_POST['ht_arr'],
			$_POST['es_arr'],
			$_POST['et_arr'],
			$_POST['ggs_arr'],
			$_POST['ggt_arr'],
			$_POST['ejs_arr'],
			$_POST['ejt_arr'],
			$_POST['cls_arr'],
			$_POST['clt_arr'],
			$_POST['cahds_arr'],
			$_POST['cahdt_arr'],
			$_POST['sds_arr'],
			$_POST['sdt_arr'],
			$_POST['drrms_arr'],
			$_POST['drrmt_arr'],
			$_POST['fhds_arr'],
			$_POST['fhdt_arr'],
			$_POST['cofs_arr'],
			$_POST['coft_arr']
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