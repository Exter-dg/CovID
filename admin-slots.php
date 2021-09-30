<?php
    session_start();
    if(!isset($_SESSION["adminvalid"]) || $_SESSION["adminvalid"]!="true")
    {
        echo("<script type='text/javascript'>alert('Access Denied'); </script>");
        header('Refresh: 0; URL = admin-login.html');
    }
?>

<!-- Load Required Files -->
<?php
    // Load dbconnect 
    require_once('sql/dbconnect.php');
    
    require_once('validation-functions.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Slots</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item active" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                       

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Admin - Slots</h1>

                    <!-- * Buttons -->
                    <div class="row">  
                        <div class="col-lg-3"></div>
                        <div class="col-lg-7">                          
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Select an Option</h6>
                                </div>
                                <div class="card-body">
                                    <div class="my-2"></div>
                                    <a href="#" class="btn btn-info btn-icon-split btn-lg mr-5" id="defaultOpen"
                                       onclick="operation(event, 'slots-display')">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-info-circle"></i>
                                        </span>
                                        <span class="text">Display Slots</span>
                                    </a>

                                    <a href="#" class="btn btn-success btn-icon-split btn-lg mr-5 ml-5"
                                       onclick="operation(event, 'slots-insert')">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                        <span class="text">Add Slots</span>
                                    </a>

                                    <a href="#" class="btn btn-danger btn-icon-split btn-lg ml-5"
                                       onclick="operation(event, 'slots-remove')">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        <span class="text">Delete Slots</span>
                                    </a>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="row slots-row" id = "slots-display">
                        <div class="col-lg-12">

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Display Slots</h6>
                                </div>
                                <div class="card-body">
                                    <?php
                                        $sql = "SELECT * FROM slots";
                                        $data=$conn->query($sql);
                                        if($data) {
                                            echo "<div class='table-responsive'> 
                                                    <table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
                                                        <thead>
                                                            <tr>
                                                                <th>Centre ID</th>
                                                                <th>District ID</th>
                                                                <th>State ID</th>
                                                                <th>Vaccine ID</th>
                                                                <th>Slots</th>
                                                                <th>Date</th>
                                                            </tr>
                                                        </thead>
                                                        <tfoot>
                                                            <tr>
                                                                <th>Centre ID</th>
                                                                <th>District ID</th>
                                                                <th>State ID</th>
                                                                <th>Vaccine ID</th>
                                                                <th>Slots</th>
                                                                <th>Date</th>
                                                            </tr>
                                                        </tfoot>
                                                        <tbody>";
                                            while($row = $data->fetch_assoc())
                                            {
                                                    echo "
                                                            <tr>
                                                                <td>".$row["id"]."</td>
                                                                <td>".$row["did"]."</td>
                                                                <td>".$row["sid"]."</td>
                                                                <td>".$row["vid"]."</td>
                                                                <td>".$row["slots"]."</td>
                                                                <td>".$row["date"]."</td>
                                                            </tr>";                                                        
                                            }

                                            echo "      </tbody>
                                                    </table>
                                                  </div>";
                                        }
                                        else {
                                            echo "Couldn't Fetch Data";
                                        }
                                    ?>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div id="slots-insert" class="row slots-row" >
                        <div class="col-lg-12">

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Add Slots</h6>
                                </div>
                                <div class="card-body">
                                    <form class="user" id="form-insert" method="post">
                                        <div class="form-group row">

                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text" class="form-control form-control-user" name="id"
                                                       placeholder="Centre ID">
                                            </div>
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text" class="form-control form-control-user" name="did"
                                                       placeholder="District ID">
                                            </div>
                                           
                                            
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="sid"
                                                       placeholder="State ID">
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text" class="form-control form-control-user" name="vid"
                                                       placeholder="Vaccine ID">
                                            </div>
                                            <div class="col-sm-6 ">
                                                <input type="text" class="form-control form-control-user" name="slots"
                                                       placeholder="Slots">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                                <input type="date" class="form-control form-control-user" name="date"
                                                       placeholder="Date">
                                        </div>
                                        
                                        <br>
                                        <input type="submit" name="submit-insert" value="Submit" class="btn btn-primary btn-user btn-block">

                                    </form>     
                                    
                                    <?php
                                        if(isset($_POST['submit-insert'])) {
                                            $id = test_input($_POST['id']);  
                                            $did = test_input($_POST['did']);  
                                            $sid = test_input($_POST['sid']); 
                                            $vid = test_input($_POST['vid']);
                                            $slots = test_input($_POST['slots']);
                                            $date = test_input($_POST['date']);
                                            
                                            $err="";

                                            // * True indicates no error
                                            $error_flag = true;
                                            
                                            if($error_flag && !validate_not_empty($id)) {
                                                $err.= "Centre ID is required!\n";
                                                $error_flag = false;
                                            }
                                            if($error_flag && !validate_not_empty($did)) {
                                                $err.= "District ID is required!\n";
                                                $error_flag = false;
                                            }
                                            if($error_flag && !validate_not_empty($sid)) {
                                                $err.= "State ID is required!\n";
                                                $error_flag = false;
                                            }
                                            if($error_flag && !validate_not_empty($vid)) {
                                                $err.= "Vaccine ID is required!\n";
                                                $error_flag = false;
                                            }
                                            if($error_flag && !validate_not_empty($slots)) {
                                                $err.= "Slots is required!\n";
                                                $error_flag = false;
                                            }
                                            if($error_flag && !validate_not_empty($date)) {
                                                $err.= "Date is required!\n";
                                                $error_flag = false;
                                            }

                                            if($error_flag && !validate_number($id)) {
                                                $err.= "Centre ID must be a Number!\n";
                                                $error_flag = false;
                                            }
                                            if($error_flag && !validate_number($did)) {
                                                $err.= "District ID must be a Number!\n";
                                                $error_flag = false;
                                            }
                                            if($error_flag && !validate_number($sid)) {
                                                $err.= "State ID must be a Number!\n";
                                                $error_flag = false;
                                            }
                                            if($error_flag && !validate_number($vid)) {
                                                $err.= "Vaccine ID must be a Number!\n";
                                                $error_flag = false;
                                            }
                                            if($error_flag && !validate_number($slots)) {
                                                $err.= "Slots must be a Number!\n";
                                                $error_flag = false;
                                            }

                                            // TODO Add date validator

                                            if($error_flag) {
                                                // * No error found
                                                $sql = "INSERT INTO slots (id, did, sid, vid, slots, date) VALUES
                                                    ('$id', '$did', '$sid', '$vid', '$slots', '$date')";

                                                $data=$conn->query($sql);
                                                if($data)
                                                    echo "<script>alert('Inserted Successfully')</script>";
                                                else
                                                { 
                                                    $error = "SQL: " . $sql . "\n\n" . "Error: " . $conn->error;
                                                
                                                    // ! $error is in `` and not '' as the message(error string) itself contains " and ' inside it.
                                                    // ! If $error is put in those commas, an alert box would not be displayed.
                                                    echo "<script type='text/javascript'>alert(`$error`);</script>";
                                                }   
                                            }
                                            else {
                                                echo "<script type='text/javascript'>alert(`$err`);</script>";
                                            }
                                        }
                                    ?>

                                    
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="row slots-row" id = "slots-remove">
                        <div class="col-lg-12">

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Remove Slots</h6>
                                </div>
                                <div class="card-body">
                                <form class="user" id="form-insert" method="post">
                                    <div class="form-group row">

                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" name="id"
                                                    placeholder="Centre ID">
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" name="did"
                                                    placeholder="District ID">
                                        </div>                                   
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="sid"
                                                    placeholder="State ID">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <input type="date" class="form-control form-control-user" name="date"
                                                    placeholder="Date">
                                    </div>
                                    <br>
                                    <input type="submit" name="submit-remove" value="Submit" class="btn btn-primary btn-user btn-block">

                                    </form>     
                                    <!-- TODO Display slots with a button to delete them - as in approve admins -->
                                    <?php
                                        if(isset($_POST['submit-remove'])) {
                                            $id = test_input($_POST['id']); 
                                            $did = test_input($_POST['did']); 
                                            $sid = test_input($_POST['sid']);
                                            $date = test_input($_POST['date']);   
                                            
                                            $err="";

                                            // * True indicates no error
                                            $error_flag = true;
                                            
                                            if($error_flag && !validate_not_empty($id)) {
                                                $err.= "Centre ID is required!\n";
                                                $error_flag = false;
                                            }
                                            if($error_flag && !validate_not_empty($did)) {
                                                $err.= "District ID is required!\n";
                                                $error_flag = false;
                                            }
                                            if($error_flag && !validate_not_empty($sid)) {
                                                $err.= "State ID is required!\n";
                                                $error_flag = false;
                                            }
                                            if($error_flag && !validate_not_empty($date)) {
                                                $err.= "Date is required!\n";
                                                $error_flag = false;
                                            }

                                            if($error_flag && !validate_number($id)) {
                                                $err.= "Centre ID must be a Number!\n";
                                                $error_flag = false;
                                            }
                                            if($error_flag && !validate_number($did)) {
                                                $err.= "District ID must be a Number!\n";
                                                $error_flag = false;
                                            }
                                            if($error_flag && !validate_number($sid)) {
                                                $err.= "State ID must be a Number!\n";
                                                $error_flag = false;
                                            }

                                            if($error_flag) {
                                                $sql = "DELETE FROM slots WHERE sid='$sid' AND did='$did' AND id='$id' AND date='$date'";

                                                $data=$conn->query($sql);
                                                
                                                // TODO Even if data doesn't exists, it still displays deleted successfully.
                                                if($data)
                                                    echo "<script>alert('Deleted Successfully')</script>";
                                                else
                                                { 
                                                    $error = "SQL: " . $sql . "\n\n" . "Error: " . $conn->error;
                                                
                                                    // ! $error is in `` and not '' as the message itself contains " and ' inside it.
                                                    // ! If $error is put in those commas, an alert box would not be displayed.
                                                    echo "<script type='text/javascript'>alert(`$error`);</script>";
                                                }   
                                            }
                                            else {
                                                echo "<script type='text/javascript'>alert(`$err`);</script>";
                                            }
                                            
                                        }
                                    ?>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="admin-logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- * Script to choose which div to display -->
    <script>
        function operation(evt, opn) 
        {
            var i, tabcontent;
            tabcontent = document.getElementsByClassName("slots-row");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            document.getElementById(opn).style.display = "flex";
        }
        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();

    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>