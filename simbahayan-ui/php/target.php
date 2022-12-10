<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dash board</title>
    <link rel="stylesheet" href="http://localhost/Simbahayan/simbahayan-ui/css/target.css"/>
  

    <?php 
        include('../cdn/cdn.php');
    ?>

</head>
<body>
    <?php 
        include('../nav_master/nav.php');
    ?>



        
            </div>
        </div>
    </div>  
    <div class="title">
        <div class="inner_title">
            <div class="title_container">
                <h1>Dashboard</h1>

            </div>

            </div>
        </div>
   

    <body>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        
        <div class="d-flex" id="wrapper">
            <!-- Sidebar -->
            <div class="bg-white" id="sidebar-wrapper">
                
                <div class="list-group list-group-flush my-3">
                
                    <a href="/simbahayan-ui/html/dashboard.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"></i>Archives</a>
                    <a href="/simbahayan-ui/html/target.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"></i>Target</a>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"></i>Important</a>
                    <a href="/simbahayan-ui/html/profile.html" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"></i>Back to Main Menu</a>
                </div>
            </div>
            <!-- /#sidebar-wrapper -->
    
            <!-- Page Content -->
            <div id="page-content-wrapper">
                <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle" style="color:goldenrod"></i>
                        <h2 class="fs-2 m-0" style="color:gray">UST Simbahayan</h2>
                    </div>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                
                </nav>

                <div class="row my-5">
                    <h3 class="fs-4 mb-3">Target</h3>
               
                <div class="container-fluid px-4">
                    <div class="row g-3 my-2">
                        <div class="col-md-3">
                            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                <div>
                                    <h3 class="fs-2">65</h3>
                                    <p class="fs-5">Target Hit</p>
                                </div>
                                <i class="bi bi-bullseye fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                            </div>
                        </div>
    
                        
    
                        <div class="col-md-3">
                            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                <div>
                                    <h3 class="fs-2">70</h3>
                                    <p class="fs-5">Current Target</p>
                                </div>
                                <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                            </div>
                        </div>
                    </div>
                
    
               
    
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
        </div>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            var el = document.getElementById("wrapper");
            var toggleButton = document.getElementById("menu-toggle");
    
            toggleButton.onclick = function () {
                el.classList.toggle("toggled");
            };
        </script>

    </body>
    </html>