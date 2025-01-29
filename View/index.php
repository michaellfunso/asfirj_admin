
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
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
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
    <!-- QUILL JS  -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js?v=<?= time(); ?>"></script>
    <!-- END QUILL JS  -->
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
            .dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-toggle {
    background-color: #6b0874;
    color: white;
    padding: 8px 12px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.dropdown-menu {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: white;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    z-index: 1000;
    list-style: none;
    padding: 0;
    margin: 0;
}

.dropdown-menu.show {
    display: block;
}

.dropdown-menu li {
    padding: 8px 12px;
    cursor: pointer;
    white-space: nowrap;
}

.dropdown-menu li:hover {
    background-color: #f0f0f0;
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

                <nav class="sidebar-nav" id="sidebar_nav">
                    

                </nav>
                <script type="module" src="../js/routes/dashboard/sidenav.js?v=<?= time(); ?>"></script>
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
                         
                            <div class="projects mb-4">
                                <div class="butonsContainer">
                                    <div class="dropdown">
                                        <button class="dropdown-toggle">Actions</button>
                                        <ul class="dropdown-menu" id="dropDown">
                                        
                                        </ul>
                                    </div>
                                </div>
                                <div class="projects-inner" id="articlesContainer">
                                   

                                </div>
                       
                            </div>
                            <!-- <div class="white-box" style="background-color: rgb(248, 248, 248);"> -->
                                <div class="d-md-flex mb-4">
                                    <h3 class="box-title mb-0">Suggest Reviewers</h3>
                                </div>
                                <div class="projects mb-4">
                                    <div class="projects-inner">
                                  
                                        <table class="projects-table">
                                            <thead>
                                                <tr>
                                                    <th>Reviewer</th>
                                                    <!-- <th>Reviewer Email</th> -->
                                                    <th>Affiliation</th>   
                                                    <th>Afffiliation Country</th>
                                                    <th>Afffiliation City</th>    
                                                                                               
                                                    <!-- <th class="text-right">Actions</th> -->
                                                </tr>
                                            </thead>
                                            <tbody id="suggestedReviewersContainer">

                                        
                  
                                        </tbody>
                                       
                                        </table>
                                    </div>
                                </div>
                            <!-- </div> -->
                            
                                        <div class="white-box" style="background-color: rgb(248, 248, 248);">
                                            <div class="d-md-flex mb-3">
                                                <h3 class="box-title mb-0">Reviews</h3>
                                            </div>
                                            <div class="projects mb-4">
                                                <div class="projects-inner">
                                              
                                                    <table class="projects-table">
                                                        <thead>
                                                            <tr>
                                                                <th>Reviewer</th>
                                                                <!-- <th>Reviewer Email</th> -->
                                                                <th>Date Invited</th>   
                                                                <th>Status</th>                                           
                                                                
                                                                <th class="text-right">Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="reviewsContainer">

                                                    
                              
                                                    </tbody>
                                                   
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                      
                                        <div class="white-box" style="background-color: rgb(248, 248, 248);">
                                            <div class="d-md-flex mb-3">
                                                <h3 class="box-title mb-0">Previous Submissions</h3>
                                            </div>
                                            <div class="projects mb-4">
                                                <div class="projects-inner">
                                              
                                                    <table class="projects-table">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-right">Submissions</th>
                                                                <th class="text-right">Date</th>
                                                                <th class="text-right">Status</th>
                                                                <th class="text-right">Reviewer Invitations</th>
                                                                <th class="text-right">Editor Invitations</th>
                                                        
                                                                
                                                                <th class="text-right">Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="submissionsContainer">

                                                    
                              
                                                    </tbody>
                                                   
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                      

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center" id="footer"> 
                
            </footer>
            <script type="module" src="../js/routes/dashboard/footer.js?v=<?= time(); ?>"></script>
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
    <script type="module" src="../js/routes/dashboard/viewArticle.js?v=<?= time(); ?>"></script>
    <script type="module" src="../js/routes/dashboard/viewArticleReviews.js?v=<?= time(); ?>"></script>
    <script type="module" src="../js/routes/dashboard/previousSubmissions.js?v=<?= time(); ?>"></script>
    <!-- <script type="module" src="../js/routes/dashboard/previousSubmissions.js?v=" + Date.now()></script> -->
    <!-- <script type="module" src="../js/routes/dashboard/previousSubmissions.js?v=${Date.now()}"></script> -->


    <script src="../js/routes/dashboard/dropDownAction.js?v=<?= time(); ?>"></script>
    <script>
        document.querySelectorAll('.dropdown').forEach((dropdown) => {
    const toggle = dropdown.querySelector('.dropdown-toggle');
    const menu = dropdown.querySelector('.dropdown-menu');

    // Toggle dropdown visibility
    toggle.addEventListener('click', () => {
        menu.classList.toggle('show');
    });


    // Close dropdown if clicked outside
    document.addEventListener('click', (event) => {
        if (!dropdown.contains(event.target)) {
            menu.classList.remove('show');
        }
    });
});

    </script>
</body>


</html>