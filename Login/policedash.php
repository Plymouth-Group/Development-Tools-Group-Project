<?php include('config/constants.php');?>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Dashboard | Lexa - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<body data-sidebar="dark">

<?php 
 $sql="SELECT type,count(type) as total FROM acc group by type";
 $result = $con->query($sql);
 
 if ($result->num_rows > 0) {
   // output data of each ro
   while($row = $result->fetch_assoc()) {

     if($row["type"]=="Bad Weather"){
        $Bad_Weather=$row["total"];
     }
     elseif($row["type"]=="Drunk Driving"){
        $Drunk_Driving=$row["total"];
     }
     elseif($row["type"]=="Speeding"){
        $Speeding=$row["total"];
     }
     elseif($row["type"]=="Distractions"){
        $Distractions=$row["total"];
     }
     
   }
   
 }

 $sql="SELECT vehicle,count(vehicle) as total FROM acc group by vehicle";
 $result = $con->query($sql);
 
 if ($result->num_rows > 0) {
   // output data of each ro
   while($row = $result->fetch_assoc()) {

     if($row["vehicle"]=="jeep"){
        $jeep=$row["total"];
     }
     elseif($row["vehicle"]=="Van"){
        $van=$row["total"];
     }
     elseif($row["vehicle"]=="Bike"){
        $bike=$row["total"];
     }
     elseif($row["vehicle"]=="Car"){
        $car=$row["total"];
     }
     elseif($row["vehicle"]=="Bus"){
        $bus=$row["total"];
     }

     
   }
   
 }

?>

<script>
    
const dataP = {
  labels: [
    'Bad Weather',
    'Drunk Driving',
    'Speeding',
    'Distractions'

  ],
  datasets: [{
    label: 'My First Dataset',
    data: [
        <?php echo $Bad_Weather; ?>,
        <?php echo $Drunk_Driving; ?>,
        <?php echo $Speeding; ?>,
        <?php echo  $Distractions; ?>
    ],
    backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(54, 162, 235)',
      'rgb(255, 205, 86)',
      'rgb(75, 192, 192)',
    ],
    hoverOffset: 4
  }]
};

const configP = {
  type: 'doughnut',
  data: dataP,
};

// Line chart
const dataL = {
  labels: ["Car","Jeep","Bus","Van","Bike"],
  datasets: [{
    label: 'Accident details charts',
    data: [
        <?php echo $car; ?>,
        <?php echo $jeep; ?>,
        <?php echo $bus; ?>,
        <?php echo  $van; ?>,
        <?php echo  $bike; ?>
    ],
    backgroundColor: [
      'rgba(255, 99, 132, 0.2)',
      'rgba(255, 159, 64, 0.2)',
      'rgba(255, 205, 86, 0.2)',
      'rgba(75, 192, 192, 0.2)',
      'rgba(54, 162, 235, 0.2)',
    ],
    borderColor: [
      'rgb(255, 99, 132)',
      'rgb(255, 159, 64)',
      'rgb(255, 205, 86)',
      'rgb(75, 192, 192)',
      'rgb(54, 162, 235)',
    ],
    borderWidth: 1
  }]
};

const configL = {
  type: 'bar',
  data: dataL,
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  },
};

</script>

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
        </header> <!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

<div data-simplebar class="h-100">

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            

            <li>
                <a href="policedash.php" class="waves-effect">
                    <i class="mdi mdi-view-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="settings.php" class="waves-effect">
                    <i class="mdi mdi-view-dashboard"></i>
                    <span>Settings</span>
                </a>
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
                                <h4>Dashboard</h4>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">ACCITEX</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Police_Dashboard</li>
                                    </ol>
                            </div>
                        </div>
                        
                    <!-- end page title -->

                   
                        <div class="col-xl-3 col-sm-6">
                            <div class="card mini-stat bg-primary">
                                <div class="card-body mini-stat-img">
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-buffer float-end"></i>
                                    </div>
                                    <div class="text-white">
                                        <h6 class="text-uppercase mb-3 font-size-16 text-white">Accepted Accidents</h6>
                                        <h2 class="mb-4 text-white"></h2>
                                        <span class="badge bg-danger">..</span> <span class="ms-2">..</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="card mini-stat bg-primary">
                                <div class="card-body mini-stat-img">
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-tag-text-outline float-end"></i>
                                    </div>
                                    <div class="text-white">
                                        <h6 class="text-uppercase mb-3 font-size-16 text-white">Regected Accidents</h6>
                                        <h2 class="mb-4 text-white"></h2>
                                        <span class="badge bg-warning"> .. </span> <span class="ms-2"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    <!-- end row -->

                    <div class="row">

                        <div class="col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Causes of accident</h4>
                                    <div>
                                        <canvas id="myChartP"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-9">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Accident Vehicle types</h4>

                                    <div>
                                        <canvas id="myChartL"></canvas>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end row -->
                    
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Latest Accident Reports</h4>

                                    <div class="table-responsive">
                                        <table class="table align-middle table-centered table-vertical table-nowrap">

                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="assets/images/users/user-2.jpg" alt="user-image" class="avatar-xs rounded-circle me-2" /> Piyumi Prasandika
                                                    </td>
                                                    <td><i class="mdi mdi-checkbox-blank-circle text-success"></i> Confirm</td>
                                                    
                                                    <td>
                                                        5/12/2021
                                                        <p class="m-0 text-muted font-size-14">Date</p>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">Remove</button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src="assets/images/users/user-3.jpg" alt="user-image" class="avatar-xs rounded-circle me-2" /> Chanaka Niroshan
                                                    </td>
                                                    <td><i class="mdi mdi-checkbox-blank-circle text-warning"></i> Waiting approve</td>
                                                    
                                                    <td>
                                                        10/11/2021
                                                        <p class="m-0 text-muted font-size-14">Date</p>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">Remove</button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src="assets/images/users/user-4.jpg" alt="user-image" class="avatar-xs rounded-circle me-2" /> Lasan Nishshanke
                                                    </td>
                                                    <td><i class="mdi mdi-checkbox-blank-circle text-success"></i> Confirm</td>
                                                    
                                                    <td>
                                                        8/11/2021
                                                        <p class="m-0 text-muted font-size-14">Date</p>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">Remove</button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src="assets/images/users/user-5.jpg" alt="user-image" class="avatar-xs rounded-circle me-2" /> Pasindu Aberarthna
                                                    </td>
                                                    <td><i class="mdi mdi-checkbox-blank-circle text-danger"></i> Rejected</td>
                                                   
                                                    <td>
                                                        7/11/2021
                                                        <p class="m-0 text-muted font-size-14">Date</p>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">Remove</button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src="assets/images/users/user-6.jpg" alt="user-image" class="avatar-xs rounded-circle me-2" /> Binalka Amarajeewa
                                                    </td>
                                                    <td><i class="mdi mdi-checkbox-blank-circle text-success"></i> Confirm</td>
                                                    
                                                    <td>
                                                        1/11/2021
                                                        <p class="m-0 text-muted font-size-14">Date</p>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">Remove</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="assets/images/users/user-6.jpg" alt="user-image" class="avatar-xs rounded-circle me-2" /> Navodya Aselage
                                                    </td>
                                                    <td><i class="mdi mdi-checkbox-blank-circle text-danger"></i> Rejected</td>
                                                    
                                                    <td>
                                                        1/11/2021
                                                        <p class="m-0 text-muted font-size-14">Date</p>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">Remove</button>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                
                    <!-- end row -->


                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
        
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            © <script>document.write(new Date().getFullYear())</script> ACCITEX <span class="d-none d-sm-inline-block"> -Group 01<i class="mdi mdi-heart text-danger"></i> by Group 01.</span>
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

    <!--Morris Chart-->
    <script src="assets/libs/morris.js/morris.min.js"></script>
    <script src="assets/libs/raphael/raphael.min.js"></script>

    <script src="assets/js/pages/dashboard.init.js"></script>

    <script src="assets/js/app.js"></script>

    <script>
        const myChartP = new Chart(
        document.getElementById('myChartP'),
        configP
        );
        const myChartL = new Chart(
        document.getElementById('myChartL'),
        configL
        );
    </script>

</body>

</html>