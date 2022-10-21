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
		$bio = "<a href='' data-target='#bio' data-toggle='modal'>Update Bio <i class='fa fa-pencil'></i></a>";
	}

    if(empty($r->address)){
		$address =  "<a href='address.php'>Add Address <i class='fa fa-plus-circle'></i></a>";
	} else {
		$address =  "<a href='address.php'>Update Address <i class='fa fa-pencil'></i></a>";
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
         <li class='list-group-item'>$address</li>
         <li class='list-group-item'>$twitter</li>
         <li class='list-group-item'>$linkedin</li>
         <li class='list-group-item'><a href='#' data-target='#update_password' data-toggle='modal'>Update Password <i class='fa fa-pencil'></i></a></li>
         <li class='list-group-item'><a href='#' data-target='#update_name' data-toggle='modal'>Update Name <i class='fa fa-pencil'></i></a></li>
	</ul>";
}
?>