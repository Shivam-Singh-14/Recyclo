<?php
// session_start();
// include_once("../conn.php");
// $email= $_SESSION['email'];
// // echo $email;

// $sql="SELECT * FROM `users` WHERE `email` = '$email'";
// $result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($result);

// echo $row['fname'];

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- external css -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css"
    />
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="./assets/css/style.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- internal css  -->

    <link rel="stylesheet" href="./assets/css/uinfo.css" />
    <title>Document</title>
    
    <style>
        h1.mt-4 {
            color: #fff;
        }
        div#layoutSidenav_content {
            background: #000;
        }
        main{
            background: #000;
        }

        
    </style>
  </head>
  <body>
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
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="./userinfo.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                User Profile
                            </a>
                             <a class="nav-link" href="../order.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-calendar"></i></div>
                                Book A Slot
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
                        <h1 class="mt-4">Admin Profile</h1>

  
    <div class="page-content page-container" id="page-content">
      <div class="padding">
        <div class="row container d-flex justify-content-center">
          <div class="col-xl-6 col-md-12">
            <div class="card user-card-full">
              <div class="row m-l-0 m-r-0">
                <div class="col-sm-4 bg-c-lite-green user-profile">
                  <div class="card-block text-center text-white">
                    <div class="m-b-25">
                      <img
                        src="./assets/icons/admin.png"
                        class="img-radius"
                        alt="User-Profile-Image"
                      />
                    </div>
                    <h6 class="f-w-600">
                        <?php
                        $uname= $_SESSION['name'];
                         $prints ="<div> $uname</div>";
                         echo"$prints";
                        ?>
                    </h6>
                    <p style=" font-weight: 600;color: black;"><?php
                        $value= $_SESSION['value'];
                        // echo $value;
                        if($value == 1){
                            $prints = "White Card Owner";
                        }else if($value == 2){
                            $prints = "Orange Card Owner" ;
                        }else{
                            $prints = "Root User" ;
                            
                        }
                        // $prints ="<div> $color</div>";
                        echo"$prints";
                        ?></p>
                    <!-- <i
                      class="mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"
                    ></i> -->
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="card-block">
                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">
                      Information
                    </h6>
                    <div class="row">
                      <div class="col-sm-6">
                        <p class="m-b-10 f-w-600">Ration no.</p>
                        <h6 class="text-muted f-w-400">
                            <?php
                        $ration= $_SESSION['ration'];
                         $prints ="<div> $ration</div>";
                         echo"$prints";
                        ?>
                        </h6>
                      </div>
                      <div class="col-sm-6">
                        <p class="m-b-10 f-w-600">Aadhar no.</p>
                        <h6 class="text-muted f-w-400">
                            <?php
                        $aadhar= $_SESSION['aadhar'];
                         $prints ="<div> $aadhar</div>";
                         echo"$prints";
                        ?>
                            </h6>
                      </div>
                      <div class="col-sm-6">
                        <p class="m-b-10 f-w-600">Phone</p>
                        <h6 class="text-muted f-w-400">
                            <?php
                        $phone= $_SESSION['phone'];
                         $prints ="<div> $phone</div>";
                         echo"$prints";
                        ?>
                        </h6>
                      </div>
                      <div class="col-sm-6">
                        <p class="m-b-10 f-w-600">Email</p>
                        <h6 class="text-muted f-w-400">
                            <?php
                        $email = $_SESSION['email'];
                         $prints ="<div> $email</div>";
                         echo"$prints";
                        ?>
                        </h6>
                      </div>
                    </div>
                    <!--<h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">-->
                    <!--  Alloted Ration Shop-->
                    <!--</h6>-->
                    <!--<div class="row">-->
                    <!--  <div class="col-sm-6">-->
                    <!--    <p class="m-b-10 f-w-600">Address</p>-->
                    <!--    <h6 class="text-muted f-w-400">Sakinaka , palghar</h6>-->
                    <!--  </div>-->
                    <!--  <div class="col-sm-6">-->
                    <!--    <p class="m-b-10 f-w-600">Shop Location</p>-->
                    <!--    <h6 class="text-muted f-w-400">See on Google Map</h6>-->
                    <!--  </div>-->
                    <!--</div>-->
                    <!-- <ul class="social-link list-unstyled m-t-40 m-b-10">
                      <li>
                        <a
                          href="#!"
                          data-toggle="tooltip"
                          data-placement="bottom"
                          title=""
                          data-original-title="facebook"
                          data-abc="true"
                          ><i
                            class="mdi mdi-facebook feather icon-facebook facebook"
                            aria-hidden="true"
                          ></i
                        ></a>
                      </li>
                      <li>
                        <a
                          href="#!"
                          data-toggle="tooltip"
                          data-placement="bottom"
                          title=""
                          data-original-title="twitter"
                          data-abc="true"
                          ><i
                            class="mdi mdi-twitter feather icon-twitter twitter"
                            aria-hidden="true"
                          ></i
                        ></a>
                      </li>
                      <li>
                        <a
                          href="#!"
                          data-toggle="tooltip"
                          data-placement="bottom"
                          title=""
                          data-original-title="instagram"
                          data-abc="true"
                          ><i
                            class="mdi mdi-instagram feather icon-instagram instagram"
                            aria-hidden="true"
                          ></i
                        ></a>
                      </li>
                    </ul> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
                </main>

    <!-- //json files -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </body>
</html>
