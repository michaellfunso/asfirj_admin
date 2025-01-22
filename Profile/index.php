<?php session_start();?>
<!DOCTYPE html>
<html dir="ltr" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
   <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="">
    <meta name="description"
        content="">
    <meta name="robots" content="noindex,nofollow">
    <title>Portal | Editor</title>
   
        <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,600" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link href="../plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="../css/style.min.css" rel="stylesheet">
    <link href="../css/table.css" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.selectric/1.10.1/selectric.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css'>

<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <!-- Custom CSS -->
   <link href="../css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js?v=<?= time(); ?>"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js?v=<?= time(); ?>"></script>
<![endif]-->
</head>
<?php 
// if(!isset(_SESSION["Username"])){
// 		header("location:../Login/");
// 	  }
      ?>
<style>
    .left-sideba{
        position: fixed;
    }
    label{
        font-weight:bold;
    }
</style>
<body>
    
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5" id="topbar">
        </header>
        <script src="../js/routes/topbar.js?v=<?= time(); ?>"></script>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6" style="transition: ease-in-out 300ms;">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->

                <nav class="sidebar-nav" id="sidebar_nav">
                    

                </nav>
                <script type="module" src="../js/routes/dashboard/sidenav.js?v=<?= time(); ?>"></script>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Profile</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal">Dashboard</a></li>
                            </ol>
                            <a href="../Logout/" target="_blank"
                                class="btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Logout</a>
                        </div>
                    </div>
                </div>       
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                   
                
                    <!-- Column -->
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="card">
                            <div class="card-body" id="ProfileContainer">
                                    
                            
                            </div>
                            <style>
                            .card-body button:not(:first-child){
                                margin-left: 10px;
                            }    
                            </style>
                            <div class="card-body" style=" display:flex; align-items:center;">
                            <button class='btn btn-success text-white' id='verifyAccount' st>Verify Account</button>
                        
                            <button class='btn btn-success text-white' id='migrateProfile'>Migrate To Editor Account</button>
                          
                            <button class='btn bg-danger text-white' id='deleteProfile' >Delete Profile</button>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
                 <footer class="footer text-center"> <?php echo date("Y");?> © ASFI - all rights reserved
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js?v=<?= time(); ?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../bootstrap/dist/js/bootstrap.bundle.min.js?v=<?= time(); ?>"></script>
    <script src="../js/app-style-switcher.js?v=<?= time(); ?>"></script>
    <!--Wave Effects -->
    <script src="../js/waves.js?v=<?= time(); ?>"></script>
    <!--Menu sidebar -->
    <script src="../js/sidebarmenu.js?v=<?= time(); ?>"></script>
    <!--Custom JavaScript -->
    <script src="../js/custom.js?v=<?= time(); ?>"></script>
    <script type="module" src="../js/routes/authors/getAuthorProfileDetails.js?v=<?= time(); ?>"></script>
</body>

</html>