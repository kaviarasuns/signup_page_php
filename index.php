<?php include 'connection/db.php'; ?>
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
<?php include 'parts/nav.php'; ?>
<?php if(isset($_SESSION['unauthorized'])): ?>
  <div class="alert alert-danger text-center all-msg">
    <strong><?php echo $_SESSION['unauthorized']; ?></strong>
  </div>
<?php endif; ?>
<?php unset($_SESSION['unauthorized']); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-7 content">
                <h1>Its always free</h1>
                <hr>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem vitae voluptatum nisi hic
                    minima consequuntur dolore sed nostrum aperiam laboriosam, nemo necessitatibus sit, pariatur
                    tempora. Illo mollitia doloribus dicta nesciunt?</p>
            </div><!-- col -->
            <div class="col-md-5 content">
                <div class="signup-cover">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-9">
                                    <h3 class="form-heading">Signup</h3>
                                    <p>Account creating is 100% free</p>
                                </div>
                                <div class="col-md-3 text-right">
                                    <i class="fa fa-pencil-square-o fa-3x"></i>
                                </div>
                            </div>
                        </div><!-- card-header -->
                        <div class="card-body">
                            <form id="signup_submit">
                                <div class="form-group show-progress">

                                </div>
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Enter Name...">
                                    <div class="name-error error"></div>
                                </div><!-- form-group -->
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Enter Email...">
                                    <div class="email-error error"></div>
                                </div><!-- form-group -->
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control"
                                        placeholder="Choose Password...">
                                    <div class="password-error error"></div>
                                </div><!-- form-group -->
                                <div class="form-group">
                                    <input type="password" id="confirm" class="form-control"
                                        placeholder="Confirm Password...">
                                    <div class="confirm-error error"></div>
                                </div><!-- form-group -->
                                <div class="form-group">
                                    <button type="submit" id="submit" class="btn btn-success btn-block form-btn">Create
                                        Account</button>
                                </div><!-- form-group -->
                                <div class="form-group">
                                    <a href="#" id="login">Already have an account?</a>
                                </div>
                            </form>
                        </div><!-- card-body -->
                    </div><!-- card -->
                </div><!-- signup-cover -->


                <div class="login-cover">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-9">
                                    <h3 class="form-heading">Login</h3>
                                    <p>Enter Email && Password</p>
                                </div>
                                <div class="col-md-3 text-right">
                                    <i class="fa fa-lock fa-3x"></i>
                                </div>
                            </div>
                        </div><!-- card-header -->
                        <div class="card-body">
                            <form id="login-submit-form">
                                <div class="form-group">
                                    <div class="login-error error">


                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="login_email" id="login-email" class="form-control" placeholder="Enter Email...">
                                    <div class="login-email-error error"></div>
                                </div><!-- form-group -->
                                <div class="form-group">
                                    <input type="password" name="login_password" id="login-password" class="form-control"
                                        placeholder="Choose Password...">
                                        <div class="login-password-error error"></div>
                                </div><!-- form-group -->
                                <div class="form-group">
                                    <button type="button" id="login-submit"
                                        class="btn btn-success btn-block form-btn">Login</button>
                                </div><!-- form-group -->
                                <div class="form-group">
                                    <a href="#" id="signup">Create New Account?</a>
                                </div>
                            </form>
                        </div><!-- card-body -->
                    </div><!-- card -->
                </div><!-- signup-cover -->


            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/simple.js"></script>
    <script type="text/javascript" src="js/signup.js"></script>
    <script type="text/javascript" src="js/login.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            setTimeout(() => {
                $(".all-msg").fadeOut("slow");
            }, 1500);
        })
    </script> 
</body>

</html>