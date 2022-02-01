<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="static/dist/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Paying Guest Management System</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">

                    </div>
                </div>
            </form>
            <!-- Navbar-->
                      <div class="dropdown-divider"></div>
                    <div>
                <a style="color: #FFFFFF" href="index.php"><i>Logout</i></a>>
                    </div>

        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Facilities
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Manage Owners
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Monitor
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Reports
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="/construction_cost/cost/">Add Pg</a>
                                    <a class="nav-link" href="/cement_concrete/cement/">View Report</a>
                                    <a class="nav-link" href="/plaster_calculator/plaster/">View User Details</a>
                                    <a class="nav-link" href="/brick_masonary/brick/">Add User</a>
                                    <a class="nav-link" href="/concrete_block/concrete/">Complaint</a>
                                 <a class="nav-link" href="/concrete_pipe/concrete_pipe/">Concrete Pipe</a>

                                </nav>
                            </div>
                         </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="/report/report/" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Report
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="/report/report/">Report</a>

                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>

                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="card-footer d-flex align-items-center">
                                    <a href="" >Add PG</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                     <div class="row">
                                        <img src="static/dist/assets/img/download%20(2).jpg">
                                     </div>

                                </div>
                            </div>

                            <div class="col-xl-4 col-md-6">
                                <div class="card-footer d-flex align-items-center ">
                                    <a href="">User Details</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



                                        <div class="row">
                                           <img src="static/dist/assets/img/download.jpg">
                                        </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-6">
                                <div class="card-footer d-flex align-items-center">
                                  <a href="">Add User</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                       <div class="row">
                                           <img src="static/dist/assets/img/plaster.jpg">
                                       </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card-footer d-flex align-items-center">
                                    <a href="">Block User</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <div class="row">
                                           <img src="static/dist/assets/img/download%20(3).jpg">
                                       </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                     <a href="">Remove User</a>
                                   <div class="row">
                                           <img src="static/dist/assets/img/images%20(2).jpg">
                                       </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-6">
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="">Complaint</a>
                                    <div class="row">
                                           <img src="static/dist/assets/img/anti%20termite.jpg">
                                       </div>
                                </div>
                            </div>

                        <div class="col-xl-4 col-md-6">
                                <div class="card-footer d-flex align-items-center justify-content-between">

                                </div>
                        </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card-footer d-flex align-items-center justify-content-between">

                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card-footer d-flex align-items-center justify-content-between">

                                </div>
                        </div>
                        </div>
                    </div>

                </main>
            </div>

            </div>
        </div>
        <script src="static/https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="static/https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="static/dist/js/scripts.js"></script>
        <script src="static/https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="static/dist/assets/demo/chart-area-demo.js"></script>
        <script src="static/dist/assets/demo/chart-bar-demo.js"></script>
        <script src="static/https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="static/https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="static/dist/assets/demo/datatables-demo.js"></script>
    </body>
</html>
