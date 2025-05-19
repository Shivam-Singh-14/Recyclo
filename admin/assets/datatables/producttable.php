<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./datatables.min.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
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

        <style>
@import url('https://fonts.googleapis.com/css2?family=Kalam&family=Poppins:wght@500&family=Sedgwick+Ave+Display&display=swap');
</style>
    <style>
        #tablecard {
            display: flex;
            /* margin: auto; */
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }
        body{
            background-color:#FFF3E2;
        }
    </style>
</head>

<body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Recomandation</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <ul class="navbar-nav ms-auto ms-auto me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="./logout.php" role="button"aria-expanded="false"><i class="fas fa-sign-out fa-fw text-white"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <!--<a><i class="fas fa-sign-out fa-fw text-white"></i></a>-->
                        
                        <!--<li><a class="dropdown-item" href="../logout.php">Logout</a></li>-->
                        <!--<li><a class="dropdown-item" href="../logout.php">Logout</a></li>-->
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
                           <a class="nav-link" href="./index.php">
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
                <main>
                    <div class="container-fluid px-4">
    <div class="container" id="tablecard">
        <div class="card" style="width: 100vw;">
            <div class="card-body">
                <table id="myTable" class="display">
                    <thead>
                        <tr>
                            <th>Sno.</th>
                            <th>Name</th>
                            <th>For Gender</th>
                            <th>Type of Problem</th>
                            <th>Problem</th>
                            <th>Cost</th>
                            <th>Rating</th>
                            <th>See Product</th>
                            

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once('./conn.php');
                        $prob=$_GET['type'];
                        $sex = $_SESSION['gender'];
                        // echo $sex;
                        $sql="SELECT * FROM `products` Where `problem`='$prob' AND `gender` = '$sex'";
                        $result = mysqli_query($conn, $sql);
                        $sno = 0;
                        while($row = mysqli_fetch_assoc($result)){
                            $sno=$sno +1 ;
                            $id = $row['id'];
                            echo "<tr>
                            <th scope='row'>".$sno."</th>
                            <td>".$row['pname']."</td>
                            <td>".$row['gender']."</td>
                            <td>".$row['pfor']."</td>
                            <td>".$row['problem']."</td>
                            <td>".$row['cost']."</td>
                            <td>".$row['rating']."</td>
                            <td><a href='product.php?pid=$id'><button type='button'  class='btn btn-primary'>Show Product</button></a></td>
                            </tr>";
                        }
                        ?>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</div>

</main></div>


    <script src="https://code.jquery.com/jquery-3.6.4.js"
        integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

    <script src="./datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

    <script>
        let table = new DataTable('#myTable');
        // $(document).ready(function () {
        //     $('#myTable').DataTable();
        // });
    </script>
</body>

</html>


