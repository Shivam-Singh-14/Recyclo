<?php
include_once('./conn.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Ration Admin Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="./assets/css/style.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <style>
            body{
                background:#000;
            }
            .card-body {
                background: #2a2f3b;
                color: #fff;
                border-radius: 9px;
            }
            /*tr:hover {*/
            /*    background: #212529;*/
            /*    color:#fff;*/
            /*}*/
            table#datatablesSimple {
                color: #fff;
                font-weight: 500;
                border-color: #090e1b;
            }
            .card.mb-4 {
                border: none;
                background: #000;
            }
            main {
                background: #000;
            }
            footer.py-4.bg-light.mt-auto {
                background: #2a2f3b !important;
            }
            h1.mt-4 {
                color: #fff;
            }
            td {
                opacity: 0.6 !important;
            }
            tr *:hover {
                color: #fff !important;
                opacity: 1 !important;
            }
        </style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Ration Card Admin</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <ul class="navbar-nav ms-auto ms-auto me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw text-white"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        
                        <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
                        <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="./home.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-calendar"></i></div>
                                All Booked Slots
                            </a>
                            <a class="nav-link" href="./reguser.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                All Users
                            </a>
                            <a class="nav-link" href="./userinfo.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Admin Profile
                            </a>
                            <a class="nav-link" href="../logout.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-sign-out "></i></div>
                                logout
                            </a>
                           
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Booked Slots</h1>
                        <ol class="breadcrumb mb-4">
                        </ol>
                        <div class="row">
                            <!-- <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Recent Request</div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Request in Process</div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Request successfully served</div>
                                </div>
                            </div> -->
                           
                        </div>
                        
                        <div class="card mb-4">
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                       <tr>
                                        <th>Sno.</th>
                                        <th>Name</th>
                                        <th>Ration</th>
                                        <th>aadhar</th>
                                        <!--<th>Time Stamp</th>-->
                                        <!--<th>Location</th>-->

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql="SELECT * FROM `registration`";
                                        $result = mysqli_query($conn, $sql);
                                        $sno = 0;
                                        while($row = mysqli_fetch_assoc($result)){
                                            $sno=$sno +1 ;
                                            $html = $row['button'];
                                            // echo $html;
                                            echo "<tr>
                                            <th scope='row'>".$sno."</th>
                                            <td>".$row['name']."</td>
                                            <td>".$row['ration']."</td>
                                            <td>".$row['aadhar']."</td>
                                            </tr>";
                                        }
                                        ?>

                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; HelpScan 2023.All right reserved.</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="./assets/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="./assets/demo/chart-area-demo.js"></script>
        <script src="./assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="./assets/js/datatables-simple-demo.js"></script>
        <script>
            
            
        </script>
    </body>
</html>
