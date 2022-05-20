
<?php include('config/constants.php');?>
<?php include('login-check.php');?>

<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Data Table | Accitex - Admin & Dashboard </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- DataTables -->
        <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 
        
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="images/ACCITEX_white.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="images/ACCITEX_white.png" alt="" height="17">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="images/ACCITEX_white.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="images/ACCITEX_white.png" alt="" height="18">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>

                        <div class="d-none d-sm-block">
                            <div class="dropdown dropdown-topbar pt-3 mt-1 d-inline-block">
                                <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Create <i class="mdi mdi-chevron-down"></i>
                                    </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex">

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="fa fa-search"></span>
                            </div>
                        </form>

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                aria-labelledby="page-header-search-dropdown">
                    
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>



                        <div class="dropdown d-none d-md-block ms-2">
                            <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 English <span class="mdi mdi-chevron-down"></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                     <span class="align-middle"> Sinhala </span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                     <span class="align-middle"> Tamil </span>
                                </a>
                            </div>
                        </div>

                        
            

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="assets/images/users/user-2.jpg"
                                    alt="Header Avatar">
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle font-size-17 text-muted align-middle me-1"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-wallet font-size-17 text-muted align-middle me-1"></i> My Wallet</a>
                                <a class="dropdown-item d-flex align-items-center" href="#"><i class="mdi mdi-cog font-size-17 text-muted align-middle me-1"></i> Settings</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline font-size-17 text-muted align-middle me-1"></i> Lock screen</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="logout.php"><i class="mdi mdi-power font-size-17 text-muted align-middle me-1 text-danger"></i> Logout</a>
                            </div>
                        </div>
            
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="mdi mdi-spin mdi-cog"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </header>
             <!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                

                <li>
                    <a href="insurance-datatable.php" class="waves-effect">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span>Insurance</span>
                    </a>
                </li>

                <li>
                    <a href="police_database.php" class="waves-effect">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span>Police</span>
                    </a>
                </li>

                <li>
                    <a href="police_database.php" class="waves-effect">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span>RDA</span>
                    </a>
                </li>

              

               
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="page-title-box">
                                    <h4>Form Elements</h4>
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Accitex</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Form Elements</li>
                                        </ol>
                                </div>
                            </div>
                            
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <form method="post">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Insurance Login Details</h4>
                                        

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Insurance Company Name</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="comname" placeholder="Company Name"  id="example-text-input">
                                            </div>
                                        </div><!-- end row -->
                                        <div class="mb-3 row">
                                            <label for="example-search-input" class="col-md-2 col-form-label">Insurace Company Register ID</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="search" name="tegid" placeholder="ASD1234" id="example-search-input">
                                            </div>
                                        </div><!-- end row -->
                                        <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="email" name="email" placeholder="insurance@example.com" id="example-email-input">
                                            </div>
                                        </div><!-- end row -->
                                        <div class="mb-3 row">
                                            <label for="example-date-input" class="col-md-2 col-form-label">Company_Registered_Date</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="date" name="regnamedate" placeholder="2022-04-19" id="example-date-input">
                                            </div>
                                       
                                        </div><!-- end row -->
                                        <div class="mb-3 row">
                                            <label for="example-tel-input" class="col-md-2 col-form-label">Telephone</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="tel" name="tel" placeholder="1-(555)-555-5555" id="example-tel-input">
                                            </div>
                                            <div class="mb-3 row">
                                            <label for="example-password-input" class="col-md-2 col-form-label">Username</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="name" name="username" placeholder="ceylinco" id="example-username-input">
                                            </div>
                                        </div>
                                        </div><!-- end row -->
                                        <div class="mb-3 row">
                                            <label for="example-password-input" class="col-md-2 col-form-label">Password</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="password" name="password" placeholder="cey123" id="example-password-input">
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="mt-4">
                                            <button type="submit" class="btn btn-primary w-md" name="insurance" >Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                            <!-- end col -->
                    </div>
                        <!-- end row -->
                        <?php
           if (isset($_POST['insurance'])){
$comname=$_POST['comname'];
$tegid=$_POST['tegid'];
$email=$_POST['email'];
$regnamedate=$_POST['regnamedate'];
                            $tel = $_POST['tel'];
$i_username=$_POST['username'];
$i_password=$_POST['password'];

$sql = "INSERT INTO insurance VALUES ('$comname', '$tegid', '$email','$regnamedate','$tel','$i_username','$i_password')";

if (mysqli_query($con, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

$sql = "INSERT INTO users VALUES ('$i_username', '$i_password', 'insurance')";

if (mysqli_query($con, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}



           }

           
            ?>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Sri Lankan Police</h4>
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <div class="mt-4">
                                                    <h5 class="font-size-14 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i> Sri Lankan Police</h5>
                                                    <form method="post">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">Police area name</label>
                                                            <input type="text" class="form-control" id="formrow-firstname-input" name="areaname" placeholder="Enter your police name">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">Police ID</label>
                                                            <input type="text" class="form-control" id="formrow-id-input" name="polid" placeholder="Enter your police area ID">
                                                        </div>
            
                                                        <div class="row">                                                            
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="formrow-email-input">Email</label>
                                                                    <input type="email" class="form-control" id="formrow-email-input" name="poliemail" placeholder="Enter your email">
                                                                </div>
                                                            </div> <!-- end col -->
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="formrow-password-input">Contact Number</label>
                                                                    <input type="text" class="form-control" id="formrow-password-input" name="contact"placeholder="Enter your No">
                                                                </div>
                                                            </div> <!-- end col -->
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="formrow-email-input">Username</label>
                                                                    <input type="text" class="form-control" id="formrow-username-input"name="poliusername" placeholder="Enter your username">
                                                                </div>
                                                            </div> <!-- end col -->
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="formrow-password-input">Password</label>
                                                                    <input type="password" class="form-control" id="formrow-password-input" name="polipassword"placeholder="Enter your password">
                                                                </div>
                                                            </div> <!-- end col -->
                                                         
                                                        </div> <!-- end row -->
          
                                                        

                                                        <div class="mt-4">
                                                            <button type="submit" class="btn btn-primary w-md" name="policesub">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div> <!-- end col -->
                                            
                                        </div> <!-- end row -->

                                        <?php
           if (isset($_POST['policesub'])){
$poliareaname=$_POST['areaname'];
$polid=$_POST['polid'];
$poliemail=$_POST['poliemail'];
$Contact_No=$_POST['contact'];
$poliuname=$_POST['poliusername'];
$polipwd=$_POST['polipassword'];
$sql = "INSERT INTO tbl_police VALUES ('$poliareaname','$polid','$poliemail','$Contact_No','$poliuname','$polipwd')";

if (mysqli_query($con, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

$sql = "INSERT INTO users VALUES ('$poliuname', '$polipwd', 'police')";

if (mysqli_query($con, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

           }

           
            ?>
             <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Sri Lankan RDA</h4>
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <div class="mt-4">
                                                    <h5 class="font-size-14 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i> Sri Lankan RDA</h5>
                                                    <form method="post">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">RDA Area</label>
                                                            <input type="text" class="form-control" id="formrow-firstname-input" name="areaname" placeholder="Enter RDA Area">
                                                        </div>
            
                                                        <div class="row">                                                            
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="formrow-email-input">Email</label>
                                                                    <input type="email" class="form-control" id="formrow-email-input" name="poliemail" placeholder="Enter your email">
                                                                </div>
                                                            </div> <!-- end col -->
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="formrow-password-input">Contact Number</label>
                                                                    <input type="text" class="form-control" id="formrow-password-input" name="contact"placeholder="Enter your No">
                                                                </div>
                                                            </div> <!-- end col -->
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="formrow-email-input">Username</label>
                                                                    <input type="text" class="form-control" id="formrow-username-input"name="poliusername" placeholder="Enter your username">
                                                                </div>
                                                            </div> <!-- end col -->
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="formrow-password-input">Password</label>
                                                                    <input type="password" class="form-control" id="formrow-password-input" name="polipassword"placeholder="Enter your password">
                                                                </div>
                                                            </div> <!-- end col -->
                                                         
                                                        </div> <!-- end row -->
          
                                                        

                                                        <div class="mt-4">
                                                            <button type="submit" class="btn btn-primary w-md" name="policesub">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div> <!-- end col -->
                                            
                                        </div> <!-- end row -->

                      </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
            
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                © <script>document.write(new Date().getFullYear())</script> ACCITEX <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Group 01.</span>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>            
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->


        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div> 
        
        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>

</html>