
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
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.selectric/1.10.1/selectric.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css'>

<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<style>
        /* Preloader styles */
        .preloader2 {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .lds-ripple2 {
            position: relative;
            width: 64px;
            height: 64px;
        }

        .lds-ripple2 div {
            position: absolute;
            border: 4px solid #000;
            opacity: 1;
            border-radius: 50%;
            animation: ripple 1s cubic-bezier(0, 0.2, 0.8, 1) infinite;
        }

        .lds-ripple2 div:nth-child(2) {
            animation-delay: -0.5s;
        }

        @keyframes ripple {
            0% {
                top: 28px;
                left: 28px;
                width: 0;
                height: 0;
                opacity: 1;
            }
            100% {
                top: -1px;
                left: -1px;
                width: 58px;
                height: 58px;
                opacity: 0;
            }
        }

        /* Hide the preloader when the page is loaded */
        .preloader2.hidden {
            display: none;
        }

        /* Styles for pagination controls */
    .pagination-controls {
        margin: 20px 0;
        text-align: center;
    }
    .pagination-controls button {
        margin: 0 5px;
        padding: 5px 10px;
        cursor: pointer;
    }
    .pagination-controls span {
        font-weight: bold;
        margin: 0 10px;
    }

    /* Style for hiding preloader */
    .hidden {
        display: none;
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
    <script src="../js/routes/dashboard/archivePaper.js"></script>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div> -->
     <div class="preloader2">
        <div class="lds-ripple2">
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
            .align-items-center{
                    align-items: center;
                    justify-content: center;
                    float: center;
                    margin: auto;
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
                                <li><a href="../Logout/" class="fw-normal">Dashboard</a></li>
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
                <div class="admin col"">
                    <h3><b>Welcome, <span class="userFullnameContainer"></span></b>
                        <h5>Editor</h5>
                
                </h3>
                </div><div class="row justify-content-left" id="stats">

                    <div class="col-lg-2 col-md-10 ">
                        <div class="white-box analytics-info box-shadow align-center">
                            <!-- <i class=" fas fa-shopping-basket"></i> -->
                            <i class="bi bi-upload"></i>
                            <h3 class="box-title"><span class="submissionsCount">0</span> Submissions</h3>
                        </div>
                    </div>
           
                   
                    <div class="col-lg-2 col-md-10">
                        <a href="../Authors/">
                        <div class="white-box analytics-info box-shadow align-center">
                            <i class="bi bi-people"></i>
                             <h3 class="box-title"><span class="authorsCount">0</span> Authors</h3>
                        </div>
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-10">
                       
                        <div class="white-box analytics-info box-shadow align-center">
                           <i class="bi bi-list-columns-reverse">
                              </i>
                             <h3 class="box-title"><span class="reviewedCount">0</span> Reviewed</h3>
                        </div>
                    </div>

                   <div class="col-lg-2 col-md-10">
                   <a href="../AcceptedPapers">
                       <div class="white-box analytics-info box-shadow align-center">
                          <i class="bi bi-list-columns-reverse">
                             </i>
                            <h3 class="box-title"><span class="acceptedCount"></span> Accepted</h3>
                       </div>
                       </a>
                   </div>

                   <div class="col-lg-2 col-md-10">
                   <a href="../ArchivedPapers">
                       <div class="white-box analytics-info box-shadow align-center">
                          <i class="bi bi-list-columns-reverse">
                             </i>
                            <h3 class="box-title"><span class="archivedCount"></span> Archived</h3>
                       </div>
                       </a>
                   </div>
                   

                    <div class="col-lg-2 col-md-10">
                       <a href="../EditorInvitations">
                        <div class="white-box analytics-info box-shadow align-center">
                            <i class="bi bi-person-plus"></i>
                             <h3 class="box-title"><span class="editorInviteCount">0</span> Editor invitations</h3>
                        </div>
                    </a>
                    </div>
                    
                        <!-- <div class="col-lg-2 col-md-10">
                            
                        <div class="white-box analytics-info box-shadow align-center">
                            <i class="fas fa-book"></i>
                             <h3 class="box-title"><span>0</span> Published</h3>
                        </div>
                    </div> -->

                </div>
             
                <!-- ============================================================== -->
                <!-- RECENT SALES -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="d-md-flex mb-3">
                                <h3 class="box-title mb-0">Recent Submissions</h3>
                                <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                                <input type="text" class="form-control form-input search" id="search" placeholder="Search">
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
                                                <th class="text-right">Submissions</th>
                                                <th class="text-right">Date</th>
                                                <th class="text-right">Status</th>
                                                <th class="text-right">Reviewer Invitations</th>
                                                <th class="text-right">Editor Invitations</th>


                                        
                                                
                                                <th class="text-right">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="submissionsContainer" id="submissionsContainer">
                                  
                                        </tbody>
                                        <!-- Pagination Controls -->
<!-- <div id="pagination" class="pagination-controls">
    <button id="prevPage" onclick="previousPage()">Previous</button>
    <span id="pageIndicator">Page 1</span>
    <button id="nextPage" onclick="nextPage()">Next</button>
</div> -->
                                    </table>
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
    <script>
        // Function to handle the hiding of the preloader
        function hidePreloader() {
            const preloader = document.querySelector('.preloader2');
            preloader.classList.add('hidden');
        }

        // Track when specific content is fully loaded
        function monitorElements() {
            const dynamicElement = document.getElementsByClassName('success-item');

            let dynamicContentLoaded = false;


            // Simulate a delay in loading the dynamic content
            setTimeout(() => {
                dynamicContentLoaded = true;
                checkLoadingStatus();
            }, 6000);  // Adjust the timeout to simulate content load delay

            // Check if all elements are loaded
            function checkLoadingStatus() {
                if (dynamicContentLoaded) {
                    hidePreloader();
                }
            }
        }

        // Wait until the entire page is initially loaded
        window.onload = function () {
            // Start monitoring specific elements
            monitorElements();
        };
    </script>
    <!-- <script>
    const itemsPerPage = 5; // Number of items to show per page
    let currentPage = 1; // Initial page

    // Function to render a specific set of items based on the current page
    function renderPage(pageNumber) {
        const allItems = document.querySelectorAll('#submissionsContainer .success-item'); // Get all dynamic items
        const totalItems = allItems.length;

        // Calculate the start and end indices for the items to display on this page
        const startIndex = (pageNumber - 1) * itemsPerPage;
        const endIndex = startIndex + itemsPerPage;

        // Hide all items initially
        allItems.forEach((item, index) => {
            item.style.display = 'none'; // Hide each item
        });

        // Show only the items for the current page
        for (let i = startIndex; i < endIndex && i < totalItems; i++) {
            allItems[i].style.display = ''; // Unhide items within the range
        }

        // Update the page indicator text
        document.getElementById('pageIndicator').textContent = `Page ${currentPage}`;

        // Disable/Enable the Previous and Next buttons based on the page
        document.getElementById('prevPage').disabled = currentPage === 1; // Disable "Previous" on the first page
        document.getElementById('nextPage').disabled = endIndex >= totalItems; // Disable "Next" on the last page
    }

    // Function to handle the Previous button click
    function previousPage() {
        if (currentPage > 1) {
            currentPage -= 1; // Go to the previous page
            renderPage(currentPage);
        }
    }

    // Function to handle the Next button click
    function nextPage() {
        const allItems = document.querySelectorAll('#submissionsContainer .success-item');
        if ((currentPage * itemsPerPage) < allItems.length) {
            currentPage += 1; // Go to the next page
            renderPage(currentPage);
        }
    }

    // Function to handle the hiding of the preloader
    function hidePreloader() {
        const preloader = document.querySelector('.preloader2');
        preloader.classList.add('hidden');
    }

    // Function to monitor dynamic elements and detect when all have been loaded
    function monitorElements() {
        let dynamicContentLoaded = false;
        let lastLoadedCount = 0; // Track the last number of loaded items
        let noNewItemsForSeconds = 0; // Counter to track if new items stop loading

        // Function to periodically check if dynamic content has finished loading
        function checkLoadingStatus() {
            const dynamicElements = document.getElementsByClassName('success-item');
            const currentLoadedCount = dynamicElements.length;

            // If new elements have been added, reset the counter
            if (currentLoadedCount > lastLoadedCount) {
                lastLoadedCount = currentLoadedCount;
                noNewItemsForSeconds = 0; // Reset counter if new items are detected
            } else {
                // Increment the counter if no new items have been added
                noNewItemsForSeconds += 1;
            }

            // If no new items for a certain period (e.g., 2 seconds), assume loading is complete
            if (noNewItemsForSeconds >= 2) {
                dynamicContentLoaded = true;
            }

            // If loading is complete, hide the preloader and show the first page of results
            if (dynamicContentLoaded) {
                clearInterval(checkInterval); // Stop checking
                hidePreloader(); // Hide the preloader
                renderPage(currentPage); // Render the first page of items
            }
        }

        // Check every 1 second to see if all elements have finished loading
        const checkInterval = setInterval(checkLoadingStatus, 1000); // Adjust interval time if needed
    }

    // Wait until the entire page is initially loaded
    window.onload = function () {
        // Start monitoring specific elements after the initial page load
        monitorElements();
    };
</script> -->

   
   

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

    <script type="module" src="../js/routes/dashboard/dashboard.js?v=<?= time(); ?>"></script>
    <script src="../js/routes/dashboard/searchPaper.js?v=<?= time(); ?>"></script>
</body>

</html>