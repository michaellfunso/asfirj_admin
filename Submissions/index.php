
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


    <meta name="robots" content="noindex,nofollow">
    <title>Portal | ASFIRJ Editor</title>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.selectric/1.10.1/selectric.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css'>
</head>

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
        <style>

            .box-shadow{
                box-shadow: 0px 10px 30px 0px rgba(37, 37, 37, 0.10);
            }
            .align-items-center{
              align-items: center;
              justify-content: center;
              float: center;
              margin: auto;
            }
            .align-center{
                display: flex;
                flex-direction: column;
                align-items: center;
                color:rgb(81, 81, 81);
                /* position: relative; */
            }
            .align-center i{
                font-size:50px;
            }
            .analytics-info{
                transition: 200ms ease-in-out;
                cursor: pointer;
                user-select: none;
            }
            .analytics-info:hover{
                transform: scale(1.1);
            }
        </style>
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

                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../Dashboard/"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../Submissions/"
                                aria-expanded="false">
                                
                                <!-- <i class=" fas fa-shopping-basket" aria-hidden="true"></i> -->
                                <i class="fas fa-link"></i>
                                <span class="hide-menu">Submissions</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../Authors/"
                                aria-expanded="false">
                                <i class="bi bi-person" aria-hidden="true"></i>
                                <span class="hide-menu">Authors</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../Inbox/"
                                aria-expanded="false">
                                <!-- <i class="fas fa-hands" aria-hidden="true"></i> -->
                                <i class="fas fa-envelope"></i>
                                <span class="hide-menu">Inbox</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="https://asfirj.org/manuscriptPortal/manage" target="_blank"
                                aria-expanded="false">
                                <i class="fas fa-calendar-alt" aria-hidden="true"></i>
                                <span class="hide-menu">Manage Supplements</span>
                            </a>
                        </li>
                  
                        
                        <li class="text-center p-20 upgrade-btn">
                            <a href="../Logout/"
                                class="btn d-grid btn-danger text-white" target="_blank">
                                Logout</a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
       
       
        <div class="page-wrapper">

            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4>
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
                <!-- Three charts -->
                <!-- ============================================================== -->
           
                
                <!-- ============================================================== -->
                <!-- RECENT SALES -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="d-md-flex mb-3">
                                <h3 class="box-title mb-0">Submissions</h3>
                                <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                                    <!-- <select class="form-select shadow-none row border-top">
                                        <option>March 2021</option>
                                        <option>April 2021</option>
                                        <option>May 2021</option>
                                        <option>June 2021</option>
                                        <option>July 2021</option>
                                    </select> -->
                                </div>
                            </div>
                            <div class="projects mb-4">
                                <div class="projects-inner">
                              
                                    <table class="projects-table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Date</th>   
                                                <th>Status</th>                                           
                                                
                                                <th class="text-right">Actions</th>
                                            </tr>
                                        </thead>
                                        <tr>
                                            <td>
                                               001
                                            </td>
                                            <td>
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit, dolore. Sunt, unde reprehenderit. Ipsa totam corporis?</p>
                                                
                                            </td>
                                          <td>
                                              <p>6th, June 2024</p>
                                          </td>
                              
                                            <td class="status">
                                                <span class="status-text status-orange">Awaiting Review</span>
                                            </td>
                                            <td>
                                                <form class="form" action="#" method="POST">
                                                <select class="action-box">
                                                    <option>Actions</option>
                                                    <option>View</option>
                                                    <option>Edit</option>
                                                    <option>Invite Author(s) for Review</option>
                                                </select>
                                                </form>
                                            </td>
                                        </tr>
              
                                   
                                    </table>
                                </div>
                       
                            </div>

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"> 2024 © ASFI - all rights reserved
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
    <script src="../plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js?v=<?= time(); ?>"></script>
    <!--Wave Effects -->
    <script src="../js/waves.js?v=<?= time(); ?>"></script>
    <!--Menu sidebar -->
    <script src="../js/sidebarmenu.js?v=<?= time(); ?>"></script>
    <!--Custom JavaScript -->
    <script src="../js/custom.js?v=<?= time(); ?>"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="../plugins/bower_components/chartist/dist/chartist.min.js?v=<?= time(); ?>"></script>
    <script src="../plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js?v=<?= time(); ?>"></script>
    <script src="../js/pages/dashboards/dashboard1.js?v=<?= time(); ?>"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
</body>

</html>