<?php include '../../connection/db.php'; ?>
<?php 

function bio(){
	GLOBAL $db;
	if(isset($_GET['bio']) && $_GET['bio'] == 'true'){
		$bio = $_POST['bio'];
		$user_id = $_SESSION['user_id'];
		$Query = $db->prepare("SELECT bio FROM users WHERE id = ?");
		$Query->execute(array($user_id));
		$r = $Query->fetch(PDO::FETCH_OBJ);
		$bio_db = $r->bio;
		if(empty($bio_db)){
			$Insert = $db->prepare("UPDATE users SET bio = ? WHERE id = ?");
			$Insert->execute(array($bio, $user_id));
			if($Insert){
				$_SESSION['bio_success'] = "<i class='fa fa-check-circle'></i> Your Bio is successfully added";
				echo json_encode(array('error' => 'success'));
			} else {
				echo json_encode(array('error' => 'error'));
			}
		} else {
			$Insert = $db->prepare("UPDATE users SET bio = ? WHERE id = ?");
			$Insert->execute(array($bio, $user_id));
			if($Insert){
				$_SESSION['bio_success'] = "<i class='fa fa-check-circle'></i> Your Bio is successfully Updated";
				echo json_encode(array('error' => 'success'));
			} else {
				echo json_encode(array('error' => 'error'));
			}
		}

	}

}
bio();