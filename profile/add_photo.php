<?php include 'functions/func.php'; ?>
<?php if(!isset($_SESSION['user_id'])): ?>
    <?php $_SESSION['unauthorized'] = "Please Enter Email & Password"; ?>
    <?php header("location:../index.php"); ?>
    <?php endif; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/profile.css">
    <title>Profile</title>
</head>
<body>
    <?php include '../parts/nav.php'; ?>
    <div class="container contents">
        <div class="row">
            <div class="col-md-3">
                <div class="left-area">
                    <?php links(); ?>
                </div><!-- left-area -->
            </div><!-- col -->
            <div class="col-md-9">
                <div class="right-area">
                   <h4>Update Profile Picture</h4><hr>
                   <div class="form-group">
                    <?php update_picture(); ?>
                   </div>
                   <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="file" name="file" class="form-control" required="" >
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Update Picture" name="picture" class="btn btn-success">
                    </div>
                   </form>
                </div><!-- right-area -->
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->


   <script type="text/javascript" src="../js/jquery.min.js"></script>
   <script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>