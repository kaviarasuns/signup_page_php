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
    <?php if(isset($_SESSION['image_success'])): ?>
        <div class="alert alert-success all-msg text-center success-msg">
            <?php echo $_SESSION['image_success']; ?>
        </div>
    <?php endif; ?>
    <?php unset($_SESSION['image_success']); ?>


     <?php if(isset($_SESSION['bio_success'])): ?>
        <div class="alert alert-success all-msg text-center success-msg">
            <?php echo $_SESSION['bio_success']; ?>
        </div>
    <?php endif; ?>
    <?php unset($_SESSION['bio_success']); ?>


    <div class="container contents">
        <div class="row">
            <div class="col-md-3">
                <div class="left-area">
                    <?php links(); ?>
                </div><!-- left-area -->
            </div><!-- col -->
            <div class="col-md-9">
                <div class="right-area">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure iusto esse incidunt, ipsam cumque ut! Suscipit voluptatum explicabo alias vitae laudantium saepe assumenda, tenetur blanditiis delectus laborum sed officia accusantium.
                
                <?php include 'parts/bio.php' ?>
                <?php include 'parts/address.php' ?>
                <?php include 'parts/twitter.php' ?>
                <?php include 'parts/linkedin.php' ?>
                <?php include 'parts/name.php' ?>
                <?php include 'parts/change_password.php' ?>
                
                </div><!-- right-area -->
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->

   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
   integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
   crossorigin="anonymous"></script>
   <script type="text/javascript" src="../js/jquery.min.js"></script>
   <script type="text/javascript" src="../js/bootstrap.min.js"></script>
   <script type="text/javascript" src="js/profile.js"></script>
       <script type="text/javascript">
        $(document).ready(function(){
            setTimeout(() => {
                $(".all-msg").fadeOut("slow");
            }, 1500);
        })
    </script> 
</body>
</html>