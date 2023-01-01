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
	case 'add_studentkra':
		$user_id=$_GET['user_id'];
		$school_year=$_GET['school_year'];
		$college_id=$_GET['college_id'];
		$query="INSERT INTO tbl_kra_submission SET user_id=?, school_year=?, college_id=?";
		$stmt=$pdo->prepare($query);
		if($stmt->execute([$user_id,$school_year,$college_id])) {
			echo json_encode([
				"status" => "inserted"
			]);
		} else {
			echo json_encode([
				"status" => "error"
			]);
		}
	break;
	case 'save_edituserinfo':
		$user_id=$_GET['user_id'];
		$user_fname=$_GET['user_fname'];
		$user_lname=$_GET['user_lname'];
		$user_email=$_GET['user_email'];
		$user_idnumber=$_GET['user_idnumber'];
		$college_id=$_GET['college_id'];
		$query="UPDATE tbl_users SET fname=?, lname=?, email=?, college=?, id_num=? WHERE id=?";
		$stmt=$pdo->prepare($query);
		if($stmt->execute([$user_fname,$user_lname,$user_email,$college_id,$user_idnumber,$user_id])) {
			echo json_encode([
				"status" => "updated"
			]);
		} else {
			echo json_encode([
				"status" => "error"
			]);
		}
	break;
	case 'get_allstudentkra':
		$query="SELECT tbl_kra_submission.*, tbl_users.fname, tbl_users.lname FROM tbl_kra_submission LEFT JOIN tbl_users on tbl_users.id=tbl_kra_submission.user_id WHERE user_id=?";
		$stmt=$pdo->prepare($query);
		if($stmt->execute([$_GET['user_id']])) {
			if($stmt->rowCount() != 0) {
				$datax=json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
				$datay=json_decode($datax, true);
				$toecho="";
				for ($i=0; $i < count($datay); $i++) {
					$kra_status="";
					switch ($datay[$i]['kra_status']) {
						case '0':
							$kra_status="<span class='badge bg-success'>Added</span>";
						break;
						case '1':
							$kra_status="<span class='badge bg-success'>Submitted</span>";
						break;
						case '2':
							$kra_status="<span class='badge bg-success'>Approved by Coordinator</span>";
						break;
						case '3':
							$kra_status="<span class='badge bg-success'>Approved by Simbahayan</span>";
						break;
						default:
							$kra_status="<span class='badge bg-warning'>unknown</span>";
						break;
					}
					$toecho.="<tr>
						<td valign='middle' style='text-transform: capitalize;'>".$datay[$i]['fname']. " " . $datay[$i]['lname']."</td>
						<td valign='middle'>".$datay[$i]['school_year']."</td>
						<td valign='middle'>".$kra_status."</td>
						<td valign='middle'><button class='btn btn-light text-primary shadow-none' type='button' id='dropdownMenuButton1' data-bs-toggle='dropdown' aria-expanded='false'>
								<i class='fa-solid fa-ellipsis fa-fw'></i>
							</button>
							<ul class='dropdown-menu' aria-labelledby='dropdownMenuButton1'>
								<li><a class='dropdown-item' onclick='manage_kra(this)' data-kra_id='".$datay[$i]['id']."' data-college_id='".$datay[$i]['college_id']."' href='#'>Manage</a></li>
							</ul>
						</td>
					</tr>";
				}
				echo $toecho;
			} else {
				$toecho="<tr>
						<td style='text-transform: capitalize;'>No data available</td>
						<td style='text-transform: capitalize;'></td>
						<td style='text-transform: capitalize;'></td>
						<td style='text-transform: capitalize;'></td>
					</tr>";
				echo $toecho;
			}
		} else {
			echo json_encode([
				"status" => "error"
			]);
		}
	break;
	case 'delete_student':
		$user_id=$_GET['user_id'];
		$value="2";
		$query="UPDATE tbl_users SET user_status=? WHERE id=?";
		$stmt=$pdo->prepare($query);
		if($stmt->execute([$value,$user_id])) {
			echo json_encode([
				"status" => "updated"
			]);
		} else {
			echo json_encode([
				"status" => "error"
			]);
		}
	break;
	case 'status_change':
		$user_id=$_GET['user_id'];
		$value=$_GET['value'];
		$query="UPDATE tbl_users SET user_status=? WHERE id=?";
		$stmt=$pdo->prepare($query);
		if($stmt->execute([$value,$user_id])) {
			echo json_encode([
				"status" => "updated"
			]);
		} else {
			echo json_encode([
				"status" => "error"
			]);
		}
	break;
	case 'verify_user':
		$user_id=$_GET['user_id'];
		$value=$_GET['value'];
		$query="UPDATE tbl_users SET verification_status=? WHERE id=?";
		$stmt=$pdo->prepare($query);
		if($stmt->execute([$value,$user_id])) {
			echo json_encode([
				"status" => "updated"
			]);
		} else {
			echo json_encode([
				"status" => "error"
			]);
		}
	break;
	case 'add_simbahayan':
		$query="INSERT INTO tbl_users SET fname=?, lname=?, user_role=?, email=?, password=?, contact=?";
		$stmt=$pdo->prepare($query);
		if($stmt->execute([$_GET['fname'],$_GET['lname'],'3',$_GET['email'],"password",$_GET['contact']])) {
			echo json_encode([
				"status" => "inserted"
			]);
		} else {
			echo json_encode([
				"status" => "error"
			]);
		}
	break;
	case 'get_simbahayanstaff':
		$query="SELECT * FROM tbl_users WHERE user_role='3'";
		$stmt=$pdo->prepare($query);
		if($stmt->execute()) {
			if($stmt->rowCount() != 0) {
				$datax=json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
				$datay=json_decode($datax, true);
				$toecho="";
				for ($i=0; $i < count($datay); $i++) {
					$toecho.="<tr>
						<td style='text-transform: capitalize;'>".$datay[$i]['fname']. " " . $datay[$i]['lname']."</td>
						<td>".$datay[$i]['email']."</td>
						<td>".$datay[$i]['contact']."</td>
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
	case 'get_coordinators':
		$query="SELECT tbl_users.*, tbl_colleges.college_name FROM tbl_users INNER JOIN tbl_colleges ON tbl_colleges.id=tbl_users.college WHERE tbl_users.user_role='2'";
		$stmt=$pdo->prepare($query);
		if($stmt->execute()) {
			if($stmt->rowCount() != 0) {
				$datax=json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
				$datay=json_decode($datax, true);
				$toecho="";
				for ($i=0; $i < count($datay); $i++) {
					$user_status="";
					$user_value="";
					$user_label="";
					$verify_value="";
					$verify_label="";
					$verification_status="";
					switch ($datay[$i]['verification_status']) {
						case '0':
							$verification_status="<span class='badge bg-danger'>Unverified</span>";
							$verify_value="1";
							$verify_label="Verify";
						break;
						case '1':
							$verification_status="<span class='badge bg-success'>Verified</span>";
							$verify_value="0";
							$verify_label="Unverify";
						break;
						default:
							$verification_status="<span class='badge bg-warning'>unknown</span>";
						break;
					}
					switch ($datay[$i]['user_status']) {
						case '0':
							$user_status="<span class='badge bg-danger'>Inactive</span>";
							$user_value="1";
							$user_label="Active";
						break;
						case '1':
							$user_status="<span class='badge bg-success'>Active</span>";
							$user_value="0";
							$user_label="Inactive";
						break;
						default:
							$user_status="<span class='badge bg-warning'>unknown</span>";
						break;
					}
					$toecho.="<tr>
						<td valign='middle' style='text-transform: capitalize;'>".$datay[$i]['fname']. " " . $datay[$i]['lname']."</td>
						<td valign='middle' style='text-transform: capitalize;'>".$datay[$i]['college_name']."</td>
						<td valign='middle' style='text-transform: capitalize;'>".$datay[$i]['id_num']."</td>
						<td valign='middle'>".$datay[$i]['email']."</td>
						<td valign='middle'>".$verification_status."</td>
						<td valign='middle'>".$user_status."</td>
						<td valign='middle'>
							<button class='btn btn-light text-primary btn-lg shadow-none' type='button' id='dropdownMenuButton1' data-bs-toggle='dropdown' aria-expanded='false'>
								<i class='fa-solid fa-ellipsis fa-fw'></i>
							</button>
							<ul class='dropdown-menu' aria-labelledby='dropdownMenuButton1'>
								<li><a class='dropdown-item' onclick='verify_user(this)' data-user_id='".$datay[$i]['id']."' data-value='".$verify_value."' href='#'>".$verify_label."</a></li>
								<li><a class='dropdown-item' onclick='status_change(this)' data-user_id='".$datay[$i]['id']."' data-value='".$user_value."' href='#'>".$user_label."</a></li>
								<li><a class='dropdown-item' href='#' onclick='edit_userinfo(this)' 
									data-user_id='".$datay[$i]['id']."'
									data-user_fname='".$datay[$i]['fname']."'
									data-user_lname='".$datay[$i]['lname']."'
									data-user_email='".$datay[$i]['email']."'
									data-college='".$datay[$i]['college']."'
									data-idnumber='".$datay[$i]['id_num']."'
								>Edit</a></li>
							</ul>
						</td>
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
	case 'add_coordinator':
		$query="INSERT INTO tbl_users SET fname=?, lname=?, user_role=?, college=?, email=?, password=?, contact=?";
		$stmt=$pdo->prepare($query);
		if($stmt->execute([$_GET['fname'],$_GET['lname'],'2',$_GET['college'],$_GET['email'],"password",$_GET['contact']])) {
			echo json_encode([
				"status" => "inserted"
			]);
		} else {
			echo json_encode([
				"status" => "error"
			]);
		}
	break;
	case 'save_alltargets':
		$query="UPDATE tbl_kratargetcount SET target_hit=?, current_target=?, current_target3=?, kra1_target=?, kra2_target=?, kra3_target=? WHERE id='1'";
		$stmt=$pdo->prepare($query);
		if($stmt->execute([$_GET['target_hit'],$_GET['current_target'],$_GET['current_target3'],$_GET['kra1_target'],$_GET['kra2_target'],$_GET['kra3_target']])) {
			echo json_encode([
				"status" => "updated"
			]);
		} else {
			echo json_encode([
				"status" => "error"
			]);
		}
	break;
	case 'get_targets':
		$query="SELECT * FROM tbl_kratargetcount";
		$stmt=$pdo->prepare($query);
		if($stmt->execute()) {
			echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
		} else {
			echo json_encode([
				"status" => "error"
			]);
		}
	break;
	case 'get_finalapproved':
		$query="SELECT tbl_kra_submission.*, tbl_colleges.college_name, tbl_colleges.college_acronym, tbl_users.id_num, tbl_users.organization, tbl_users.fname, tbl_users.lname, tbl_users.email FROM tbl_kra_submission INNER JOIN tbl_users ON tbl_users.id=tbl_kra_submission.user_id INNER JOIN tbl_colleges ON tbl_colleges.id=tbl_users.college GROUP BY tbl_kra_submission.college_id";
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
						case '2':
							$status="<span class='badge bg-success'>Submitted to Simbahayan</span>";
						break;
						default:
							$status="<span class='badge bg-success'>unknown</span>";
						break;
					}
					$toecho.="<tr>
						<td style='text-transform: capitalize;'><button class='btn btn-link' data-school_year='".$datay[$i]['school_year']."' data-college_name='".$datay[$i]['college_name']."' data-college_id='".$datay[$i]['college_id']."' data-user_id='".$datay[$i]['user_id']."' onclick='generate_pdf(this)'>".$datay[$i]['college_acronym']."_AnnualReport.pdf</button></td>
						<td>".$datay[$i]['school_year']."</td>
						<td>".date('F d, Y h:i a', strtotime($datay[$i]['date_submitted']))."</td>
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
	case 'change_password':
		$query="UPDATE tbl_users SET password=? WHERE id=?";
		$stmt=$pdo->prepare($query);
		if($stmt->execute([$_GET['inputpass_new'],$_GET['user_id']])) {
			echo json_encode([
				"status" => "updated"
			]);
		} else {
			echo json_encode([
				"status" => "error"
			]);
		}
	break;
	case 'get_mystudentlist':
		$query="SELECT tbl_users.*, 
		tbl_colleges.college_name, 
		tbl_kra_submission.kra_status,
		tbl_kra_submission.date_submitted FROM tbl_users LEFT JOIN tbl_colleges ON tbl_colleges.id=tbl_users.college LEFT JOIN tbl_kra_submission ON tbl_kra_submission.user_id=tbl_users.id WHERE tbl_users.college=? AND tbl_users.user_role='1'";
		$stmt=$pdo->prepare($query);
		if($stmt->execute([$_GET['college_id']])) {
			if($stmt->rowCount() != 0) {
				$datax=json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
				$datay=json_decode($datax, true);
				$toecho="";
				for ($i=0; $i < count($datay); $i++) {
					$user_status="";
					$user_value="";
					$user_label="";
					$verify_value="";
					$verify_label="";
					$verification_status="";
					switch ($datay[$i]['verification_status']) {
						case '0':
							$verification_status="<span class='badge bg-danger'>Unverified</span>";
							$verify_value="1";
							$verify_label="Verify";
						break;
						case '1':
							$verification_status="<span class='badge bg-success'>Verified</span>";
							$verify_value="0";
							$verify_label="Unverify";
						break;
						default:
							$verification_status="<span class='badge bg-warning'>unknown</span>";
						break;
					}
					switch ($datay[$i]['user_status']) {
						case '0':
							$user_status="<span class='badge bg-danger'>Inactive</span>";
							$user_value="1";
							$user_label="Active";
						break;
						case '1':
							$user_status="<span class='badge bg-success'>Active</span>";
							$user_value="0";
							$user_label="Inactive";
						break;
						default:
							$user_status="<span class='badge bg-warning'>unknown</span>";
						break;
					}
					if ($datay[$i]['date_submitted'] == null) {
						$date_submitted="not yet submitted";
					} else {
						$date_submitted=date('F d, Y h:i a', strtotime($datay[$i]['date_submitted']));
					}
					$toecho.="<tr>
						<td valign='middle' style='text-transform: capitalize;'>".$datay[$i]['fname']. " " . $datay[$i]['lname']."</td>
						<td valign='middle' style='text-transform: capitalize;'>".$datay[$i]['college_name']."</td>
						<td valign='middle' style='text-transform: capitalize;'>".$datay[$i]['id_num']."</td>
						<td valign='middle'>".$datay[$i]['email']."</td>
						<td valign='middle'>".$verification_status."</td>
						<td valign='middle'>".$user_status."</td>
						<td valign='middle'>
							<button class='btn btn-light text-primary btn-lg shadow-none' type='button' id='dropdownMenuButton1' data-bs-toggle='dropdown' aria-expanded='false'>
								<i class='fa-solid fa-ellipsis fa-fw'></i>
							</button>
							<ul class='dropdown-menu' aria-labelledby='dropdownMenuButton1'>
								<li><a class='dropdown-item' onclick='verify_user(this)' data-user_id='".$datay[$i]['id']."' data-value='".$verify_value."' href='#'>".$verify_label."</a></li>
								<li><a class='dropdown-item' onclick='status_change(this)' data-user_id='".$datay[$i]['id']."' data-value='".$user_value."' href='#'>".$user_label."</a></li>
								<li><a class='dropdown-item' href='#' onclick='edit_userinfo(this)' 
									data-user_id='".$datay[$i]['id']."'
									data-user_fname='".$datay[$i]['fname']."'
									data-user_lname='".$datay[$i]['lname']."'
									data-user_email='".$datay[$i]['email']."'
									data-college='".$datay[$i]['college']."'
									data-idnumber='".$datay[$i]['id_num']."'
								>Edit</a></li>
							</ul>
						</td>
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
	case 'approve_kra3simbahayan':
		$query="UPDATE tbl_kra_submission SET kra3_sub='3' WHERE college_id=?";
		$stmt=$pdo->prepare($query);
		if($stmt->execute([$_GET['college_id']])) {
			echo json_encode([
				"status" => "updated"
			]);
		} else {
			echo json_encode([
				"status" => "error"
			]);
		}
	break;
	case 'approve_kra2simbahayan':
		$query="UPDATE tbl_kra_submission SET kra2_sub='3' WHERE college_id=?";
		$stmt=$pdo->prepare($query);
		if($stmt->execute([$_GET['college_id']])) {
			echo json_encode([
				"status" => "updated"
			]);
		} else {
			echo json_encode([
				"status" => "error"
			]);
		}
	break;
	case 'approve_kra1simbahayan':
		$query="UPDATE tbl_kra_submission SET kra1_sub='3' WHERE college_id=?";
		$stmt=$pdo->prepare($query);
		if($stmt->execute([$_GET['college_id']])) {
			echo json_encode([
				"status" => "updated"
			]);
		} else {
			echo json_encode([
				"status" => "error"
			]);
		}
	break;
	case 'submit_reportsimbahayan':
		$query="UPDATE tbl_kra_submission SET kra_status='3', simb_id=? WHERE college_id=?";
		$stmt=$pdo->prepare($query);
		if($stmt->execute([$_GET['my_id'],$_GET['college_id']])) {
			echo json_encode([
				"status" => "ok"
			]);
		} else {
			echo json_encode([
				"status" => "error"
			]);
		}
	break;
	case 'submit_report':
		$query="UPDATE tbl_kra_submission SET kra_status='2', coor_id=? WHERE user_id=?";
		$stmt=$pdo->prepare($query);
		if($stmt->execute([$_GET['my_id'],$_GET['user_id']])) {
			echo json_encode([
				"status" => "ok"
			]);
		} else {
			echo json_encode([
				"status" => "error"
			]);
		}
	break;
	case 'approve_kra3coordinator':
		$query="UPDATE tbl_kra_submission SET kra3_sub='2' WHERE user_id=? AND id=?";
		$stmt=$pdo->prepare($query);
		if($stmt->execute([$_GET['user_id'],$_GET['kra_id']])) {
			echo json_encode([
				"status" => "updated"
			]);
		} else {
			echo json_encode([
				"status" => "error"
			]);
		}
	break;
	case 'approve_kra2coordinator':
		$query="UPDATE tbl_kra_submission SET kra2_sub='2' WHERE user_id=? AND id=?";
		$stmt=$pdo->prepare($query);
		if($stmt->execute([$_GET['user_id'],$_GET['kra_id']])) {
			echo json_encode([
				"status" => "updated"
			]);
		} else {
			echo json_encode([
				"status" => "error"
			]);
		}
	break;
	case 'disapprove_report':
		$query="UPDATE tbl_kra_submission SET kra_status='1', kra1_sub='1', kra2_sub='1', kra3_sub='1', remarks=? WHERE college_id=?";
		$stmt=$pdo->prepare($query);
		if($stmt->execute([$_GET['remarks'],$_GET['college_id']])) {
			echo json_encode([
				"status" => "updated"
			]);
		} else {
			echo json_encode([
				"status" => "error"
			]);
		}
	break;
	case 'check_simbahayansubmission':
		$query="SELECT * FROM tbl_kra_submission WHERE college_id=? GROUP BY college_id";
		$stmt=$pdo->prepare($query);
		if($stmt->execute([$_GET['college_id']])) {
			echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
		} else {
			echo json_encode([
				"status" => "error"
			]);
		}
	break;
	case 'check_coordinatorsubmission':
		$query="SELECT * FROM tbl_kra_submission WHERE id=?";
		$stmt=$pdo->prepare($query);
		if($stmt->execute([$_GET['kra_id']])) {
			echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
		} else {
			echo json_encode([
				"status" => "error"
			]);
		}
	break;
	case 'approve_kra1coordinator':
		$query="UPDATE tbl_kra_submission SET kra1_sub='2' WHERE user_id=? AND id=?";
		$stmt=$pdo->prepare($query);
		if($stmt->execute([$_GET['user_id'],$_GET['kra_id']])) {
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
	case 'get_kra3datafromuserid':
		$query="SELECT * FROM kra3 WHERE user_id=?";
		$stmt=$pdo->prepare($query);
		if($stmt->execute([$_GET['user_id']])) {
			echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
		} else {
			echo json_encode([
				"status" => "error"
			]);
		}
	break;
	case 'get_kra1datafromuseridsimbahayan':
		$query="SELECT * FROM kra1 WHERE college_id=?";
		$stmt=$pdo->prepare($query);
		if($stmt->execute([$_GET['college_id']])) {
			echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
		} else {
			echo json_encode([
				"status" => "error"
			]);
		}
	break;
	case 'get_kra2datafromuseridsimbahayan':
		$query="SELECT * FROM kra2 WHERE college_id=?";
		$stmt=$pdo->prepare($query);
		if($stmt->execute([$_GET['college_id']])) {
			echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
		} else {
			echo json_encode([
				"status" => "error"
			]);
		}
	break;
	case 'get_kra3datafromuseridsimbahayan':
		$query="SELECT * FROM kra3 WHERE college_id=?";
		$stmt=$pdo->prepare($query);
		if($stmt->execute([$_GET['college_id']])) {
			echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
		} else {
			echo json_encode([
				"status" => "error"
			]);
		}
	break;
	case 'get_allsubmittedkrasimbahayan':
		$query="SELECT tbl_kra_submission.*, tbl_colleges.college_name, tbl_users.id_num, tbl_users.organization, tbl_users.fname, tbl_users.lname, tbl_users.email FROM tbl_kra_submission INNER JOIN tbl_users ON tbl_users.id=tbl_kra_submission.user_id INNER JOIN tbl_colleges ON tbl_colleges.id=tbl_users.college WHERE kra_status='2' GROUP BY tbl_kra_submission.college_id";
		$stmt=$pdo->prepare($query);
		if($stmt->execute()) {
			if($stmt->rowCount() != 0) {
				$datax=json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
				$datay=json_decode($datax, true);
				$toecho="";
				for ($i=0; $i < count($datay); $i++) {
					$coor_name="";
					$qx="SELECT * FROM tbl_users WHERE id=?";
					$stmtx=$pdo->prepare($qx);
					if($stmtx->execute([$datay[$i]['coor_id']])) {
						$row=$stmtx->fetch(PDO::FETCH_ASSOC);
						$coor_name=$row['fname'] . " " . $row['lname'];
					} else {
						echo json_encode([
							"status" => "error2"
						]);
					}
					$status="";
					switch ($datay[$i]['kra_status']) {
						case '1':
							$status="<span class='badge bg-success'>Submitted</span>";
						break;
						case '2':
							$status="<span class='badge bg-success'>Submitted to Simbahayan</span>";
						break;
						case '3':
							$status="<span class='badge bg-success'>Approved</span>";
						break;
						default:
							$status="<span class='badge bg-success'>unknown</span>";
						break;
					}
					$toecho.="<tr>
						<td valign='middle' >".$datay[$i]['college_name']."</td>
						<td valign='middle' >".date('F d, Y h:i a', strtotime($datay[$i]['date_submitted']))."</td>
						<td valign='middle' >".$status."</td>
						<td valign='middle' ><button class='btn btn-link' data-kra_id='".$datay[$i]['id']."' data-college_id='".$datay[$i]['college_id']."' data-user_id='".$datay[$i]['user_id']."' onclick='goto_kra_select(this)'>View</button></td>
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
	case 'update2_kra3':
		$query="UPDATE kra3 SET
			lheis_arr=?,
			lheit_arr=?,
			iheis_arr=?,
			iheit_arr=?,
			cbos_arr=?,
			cbot_arr=?,
			pbos_arr=?,
			pbot_arr=?,
			tccs_arr=?,
			tcct_arr=? WHERE user_id=?"; 
		$stmt=$pdo->prepare($query);
		if($stmt->execute([
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
			$_POST['user_id']
		])) {
			echo json_encode([
				"status" => "ok"
				]);
		} else{
				echo json_encode([
					"status" => "error"
					]);
		}
	break;
	case 'update1_kra3':
		$query="UPDATE kra3 SET
			nmoas_arr=?,
			nmoat_arr=?,
			ncdaas_arr=?,
			ncdaat_arr=?,
			arr_ntco_stat=?,
			arr_ntco_targ=?,
			arr_nptco_stat=?,
			arr_nptco_targ=? WHERE user_id=? AND kra_sub_id=?"; 
			$stmt=$pdo->prepare($query);
			if($stmt->execute([
				$_POST['nmoas_arr'], 
				$_POST['nmoat_arr'],
				$_POST['ncdaas_arr'],
				$_POST['ncdaat_arr'],
				$_POST['arr_ntco_stat'],
				$_POST['arr_ntco_targ'],
				$_POST['arr_nptco_stat'],
				$_POST['arr_nptco_targ'],
				$_POST['user_id'],
				$_POST['kra_id']
			])) {
				echo json_encode([
					"status" => "ok"
				]);
		} else{
				echo json_encode([
					"status" => "error"
				]);
		}
	break;
	case 'update2_kra2':
		$query="UPDATE kra2 SET
			udcps_arr=?,
			udcpt_arr=?,
			fcs_arr=?,
			fct_arr=?,
			ps_arr=?,
			pt_arr=? WHERE user_id=?"; 
		$stmt=$pdo->prepare($query);
		if($stmt->execute([
			$_POST['udcps_arr'],
			$_POST['udcpt_arr'],
			$_POST['fcs_arr'],
			$_POST['fct_arr'],
			$_POST['ps_arr'],
			$_POST['pt_arr'], 
			$_POST['user_id']
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
	case 'update1_kra2':
		$query="UPDATE kra2 SET
			npus_arr=?,
			nput_arr=?,
			nppus_arr=?,
			npput_arr=?,
			nrpfcs_arr=?,
			nrpfct_arr=?,
			nps_arr=?,
			npt_arr=? WHERE user_id=? AND kra_sub_id=?"; 
		$stmt=$pdo->prepare($query);
		if($stmt->execute([
			$_POST['npus_arr'], 
			$_POST['nput_arr'],
			$_POST['nppus_arr'],
			$_POST['npput_arr'],
			$_POST['nrpfcs_arr'],
			$_POST['nrpfct_arr'],
			$_POST['nps_arr'],
			$_POST['npt_arr'],
			$_POST['user_id'],
			$_POST['kra_id'],
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
	case 'update2_kra1':
		$query="UPDATE kra1 SET
			ceras_arr=?,
			cerat_arr=?,
			sfas_arr=?,
			sfat_arr=?,
			ejas_arr=?,
			ejat_arr=?,
			hlas_arr=?,
			hlat_arr=?,
			cofs_arr=?,
			coft_arr=?
			
			WHERE user_id=? AND kra_sub_id=?";

		$stmt=$pdo->prepare($query);
		if($stmt->execute([
			$_POST['ceras_arr'],
			$_POST['cerat_arr'],
			$_POST['sfas_arr'],
			$_POST['sfat_arr'],
			$_POST['ejas_arr'],
			$_POST['ejat_arr'],
			$_POST['hlas_arr'],
			$_POST['hlat_arr'],
			$_POST['cofs_arr'],
			$_POST['coft_arr'],
			$_POST['user_id'],
			$_POST['kra_id']
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
	case 'update1_kra1':
		$query="UPDATE kra1 SET
			hs_arr=?,
			ht_arr=?,
			es_arr=?,
			et_arr=?,
			ggs_arr=?,
			ggt_arr=?,
			ejs_arr=?,
			ejt_arr=?,
			cls_arr=?,
			clt_arr=? WHERE user_id=? AND kra_sub_id=?";

		$stmt=$pdo->prepare($query);
		if($stmt->execute([
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
			$_POST['user_id'],
			$_POST['kra_id']
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
	case 'get_allsubmittedkra':
		$query="SELECT tbl_kra_submission.*, tbl_colleges.college_name, tbl_users.id_num, tbl_users.fname, tbl_users.lname, tbl_users.email FROM tbl_kra_submission INNER JOIN tbl_users ON tbl_users.id=tbl_kra_submission.user_id INNER JOIN tbl_colleges ON tbl_colleges.id=tbl_users.college WHERE tbl_kra_submission.college_id=?";
		$stmt=$pdo->prepare($query);
		if($stmt->execute([$_GET['college_id']])) {
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
						case '2':
							$status="<span class='badge bg-success'>Submitted to Simbahayan</span>";
						break;
						case '3':
							$status="<span class='badge bg-success'>Approved</span>";
						break;
						default:
							$status="<span class='badge bg-success'>unknown</span>";
						break;
					}
					$toecho.="<tr>
						<td valign='middle' style='text-transform: capitalize;'>".$datay[$i]['fname']. " " . $datay[$i]['lname']."</td>
						<td valign='middle'>".$datay[$i]['college_name']."</td>
						<td valign='middle'>".$datay[$i]['id_num']."</td>
						<td valign='middle'>".$datay[$i]['email']."</td>
						<td valign='middle'>".date('F d, Y h:i a', strtotime($datay[$i]['date_submitted']))."</td>
						<td valign='middle'>".$status."</td>
						<td valign='middle'>".$datay[$i]['remarks']."</td>
						<td valign='middle'><button class='btn btn-link' data-kra_id='".$datay[$i]['id']."' data-user_id='".$datay[$i]['user_id']."' onclick='goto_kra_select(this)'>View</button></td>
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
		$query="SELECT tbl_kra_submission.kra_status, COALESCE(sum(kra1.id), 0) as kra1, COALESCE(sum(kra2.id), 0) as kra2, COALESCE(sum(kra3.id), 0) as kra3 FROM tbl_kra_submission LEFT JOIN kra1 ON kra1.kra_sub_id=tbl_kra_submission.id LEFT JOIN kra2 ON kra2.kra_sub_id=tbl_kra_submission.id LEFT JOIN kra3 ON kra3.kra_sub_id=tbl_kra_submission.id WHERE tbl_kra_submission.id=?";
		$stmt=$pdo->prepare($query);
		if($stmt->execute([$_POST['kra_id']])) {
			echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
		} else {
			echo json_encode([
				"status" => "error"
			]);
		}
	break;
	case 'submit_allkra':
		$query="UPDATE tbl_kra_submission SET
			kra_status=? WHERE id=?";
		$stmt=$pdo->prepare($query);
		if($stmt->execute(["1",$_GET['kra_id']])) {

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
		kra_sub_id=?,
		kra_status=?,
		college_id=?,
		user_id=?,
		nmoas_arr=?,
		ncdaas_arr=?"; 
		$stmt=$pdo->prepare($query);
		if($stmt->execute([
			$_POST['kra_id'],
			"0",
			$_POST['college_id'],
			$_POST['user_id'],
			$_POST['nmoas_arr'],
			$_POST['ncdaas_arr']
		])) {
			echo json_encode([
				"status" => "ok"
				]);
	} else{
			echo json_encode([
				"status" => "error"
				]);
	}
	break;

	case 'save_kra2':
		$query="INSERT INTO kra2 SET
			kra_sub_id=?,
			kra_status=?,
			college_id=?,
			user_id=?,
			npus_arr=?,
			nppus_arr=?,
			nrpfcs_arr=?,
			nps_arr=?"; 
		$stmt=$pdo->prepare($query);
		if($stmt->execute([
			$_POST['kra_id'],
			"0",
			$_POST['college_id'],
			$_POST['user_id'],
			$_POST['npus_arr'], 
			$_POST['nppus_arr'],
			$_POST['nrpfcs_arr'],
			$_POST['nps_arr']
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
			kra_sub_id=?,
			kra_status=?,
			college_id=?,
			user_id=?,
			hs_arr=?,
			es_arr=?,
			ggs_arr=?,
			ejs_arr=?,
			cls_arr=?,
			efas_arr=?,
			ceras_arr=?,
			sfas_arr=?,
			ejas_arr=?,
			hlas_arr=?,
			cofs_arr=?";

		$stmt=$pdo->prepare($query);
		if($stmt->execute([
			$_POST['kra_id'],
			"0",
			$_POST['college_id'],
			$_POST['user_id'],
			$_POST['hs_arr'],
			$_POST['es_arr'],
			$_POST['ggs_arr'],
			$_POST['ejs_arr'],
			$_POST['cls_arr'],
			$_POST['efas_arr'],
			$_POST['ceras_arr'],
			$_POST['sfas_arr'],
			$_POST['ejas_arr'],
			$_POST['hlas_arr'],
			$_POST['cofs_arr']
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
	case 'register_cd':
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
			"2",
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
						"user_role" => $row['user_role'],
						"college" => $row['college'],
						"password" => $row['password'],
						"user_verification" => $row['verification_status'],
						"user_status" => $row['user_status']
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