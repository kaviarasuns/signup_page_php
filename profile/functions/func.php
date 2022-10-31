<?php include '../connection/db.php'; ?>
<?php
function links(){
    GLOBAL $db;
	// $user_id = $_SESSION['user_id'];
	$Query = $db->prepare("SELECT * FROM users WHERE id = ?");
	// $Query->execute(array($user_id));
	$r = $Query->fetch(PDO::FETCH_OBJ);

    if(empty($r->image)){
		$photo = "<img src='img/no_img.png' class='user_img'>";
		$photo_link = "<a href='add_photo.php'>Update Photo <i class='fa fa-pencil'></i>'</a>";
	}else{
		$photo = "<img src='img/$r->image' class='user_img'>";
		$photo_link = "<a href='add_photo.php'>Update Photo <i class='fa fa-pencil'></i></a>";
	}

    if(empty($r->bio)){
        $bio = "<a href='#' data-target='#bio' data-toggle='modal'>Add Bio <i class='fa fa-plus-circle'></i></a>";
	}else{
		$bio = "<a href='#' data-target='#bio' data-toggle='modal'>Update Bio <i class='fa fa-pencil'></i></a>";
	}

    if(empty($r->address)){
		$address =  "<a href='#' data-target='#address' data-toggle='modal'>Add Address <i class='fa fa-plus-circle'></i></a>";
	} else {
		$address =  "<a href='#' data-target='#address' data-toggle='modal'>Update Address <i class='fa fa-pencil'></i></a>";
	}

    if(empty($r->twitter)){
		$twitter = "<a href='#' data-target='#twitter' data-toggle='modal'>Add Twitter <i class='fa fa-plus-circle'></i></a>";
	} else {
		$twitter = "<a href='#' data-target='#twitter' data-toggle='modal'>Update Twitter <i class='fa fa-pencil'></i></a>";
	}

    if(empty($r->linkedin)){
		$linkedin = "<a href='#' data-target='#linkedin' data-toggle='modal'>Add Linkedin <i class='fa fa-plus-circle'></i></a>";
	} else {
		$linkedin = "<a href='#' data-target='#linkedin' data-toggle='modal'>Update Linkedin <i class='fa fa-pencil'></i></a>";
	}

    echo "<ul class='list-group'>
	        $photo
	    <li class='list-group-item first-li'>$photo_link</li>
         <li class='list-group-item'>$bio</li>
         <li class='list-group-item'>$twitter</li>
         <li class='list-group-item'>$linkedin</li>
         <li class='list-group-item'><a href='#' data-target='#update_password' data-toggle='modal'>Update Password <i class='fa fa-pencil'></i></a></li>
         <li class='list-group-item'><a href='#' data-target='#update_name' data-toggle='modal'>Update Name <i class='fa fa-pencil'></i></a></li>
	</ul>";

	function update_picture(){
		GLOBAL $db;
		$user_id = $_SESSION['user_id'];
		if(isset($_POST['picture'])){
   		$img_name = $_FILES['file']['name'];
   		$tmp_name = $_FILES['file']['tmp_name'];
   		$store    = "img/";
   		$extensions = array('png', 'PNG', 'jpg', 'jpeg');
   		$split = explode(".", $img_name);
   		$img_exten = $split[1];
   			if(in_array($img_exten, $extensions)){
   		   		move_uploaded_file($tmp_name, "$store/$img_name");
   		   		$Query = $db->prepare("UPDATE users SET image = ? WHERE id = ?");
   		   		$Query->execute(array($img_name, $user_id));
   			if($Query){
   		   		$_SESSION['image_success'] = "<i class='fa fa-check-circle'></i> Your image is successfully updated!";
   			    header("location:profile.php");
   		   }else{
   		   		echo "sorry query not working";
   		   }

   	}else{
   		echo "<div class='text-danger'>Invalid Image Extension!</div>";
   	}

   }
	}
}
?>