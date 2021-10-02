<!-- Load dbconnect -->
<?php
    include_once('sql/dbconnect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin  - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!--Sweetalert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
</head>

<body class="bg-gradient-primary">
<a title ="Click to go back to home" href="index.php"><i class="far fa-2x fa-arrow-alt-circle-left whiteicon"></i></a>
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Admin Account!</h1>
                            </div>
                            <form class="user" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="fname"
                                            placeholder="First Name">
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-user" name="mname"
                                            placeholder="Middle Name">
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-user" name="sname"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="email" class="form-control form-control-user" name="email"
                                            placeholder="Email Address">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="aadhar"
                                            placeholder="Aadhar No.">
                                    </div>

                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="rights"
                                            placeholder="Rights- I for Country, S-ID for state, C-SID-ID for city">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            name="password" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            name="passwordrepeat" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <br>
                                <hr>
                                <input type="submit" name="register" value="Register Account" class="btn btn-primary btn-user btn-block">
                            
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="admin-login.html">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php
        if(isset($_POST['register'])) {
            $fname=$_POST['fname']; 
            $mname=$_POST['mname'];   
            $sname=$_POST['sname'];    
            $email=$_POST['email'];    
            $aadhar=$_POST['aadhar'];
            $rights=$_POST['rights'];
            $password=$_POST['password'];

            $sql = "INSERT INTO adminapprove (fname, mname, sname, aadharno, email, rights, password) 
                    VALUES ('$fname', '$mname', '$sname', '$aadhar', '$email', '$rights', '$password')";
            
            $data=$conn->query($sql);
            if($data)
                echo "<script> swal('Registered!','Please wait till your admin role is approved','success')</script>";
                echo '<script type="text/javascript">';
		        echo 'window.location.href = "admin-login.html";';
		        echo '</script>';
            else
            { 
                $error = "SQL: " . $sql . "\n\n" . "Error: " . $conn->error;
                
                // ! $error is in `` and not '' as the message itself contains " and ' inside it.
                // ! If $error is put in those commas, an alert box would not be displayed.
                echo "<script> swal('Oops!',`$error`,'error')</script>";
            }  
        }
    ?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>