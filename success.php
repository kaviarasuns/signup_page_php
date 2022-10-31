<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
    <title>Signup & Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include "parts/nav.php"; ?>
    <div class="container main">
        <div class="row">
            <div class="col-md-12">
                <div class="success-area">
 			        <?php if(isset($_SESSION['user_name'])): ?>
						<?php echo "<i class='fa fa-check-circle'></i> Hi <strong>". $_SESSION['user_name']. "</strong> Welcome to our website we are glad to see you here Now login <a href='index.php'>Login</a>"; ?>
					<?php endif; ?>
					<?php unset($_SESSION['user_name']); ?>
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
crossorigin="anonymous"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".success-area").fadeOut();
        $(".success-area").fadeIn(5000);
    })
</script>
</html>