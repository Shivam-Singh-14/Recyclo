<?php
include_once('./config/conn.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ration Admin Dashboard</title>
    <link rel="stylesheet" href="./assets/datatables/datatables.min.css">
    <link
      href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css"
      rel="stylesheet"
    />
    <link href="./assets/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/css/form.css">
    <script
      src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"
      crossorigin="anonymous"
    ></script>
    <style>
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
        /* background: #000; */
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
      .table-card{
        margin-block: 20px;
        margin-inline: 50px;
        padding-block: 20px;
        padding-inline: 30px;
        border-radius: 9px;
        border: solid 1px #000;
      }
    </style>
  </head>
  <body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
      <!-- Navbar Brand-->
      <a class="navbar-brand ps-3" href="index.html">Question Paper Admin</a>
      <!-- Sidebar Toggle-->
      <button
        class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0"
        id="sidebarToggle"
        href="#!"
      >
        <i class="fas fa-bars"></i>
      </button>
      <ul class="navbar-nav ms-auto ms-auto me-3 me-lg-4">
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            id="navbarDropdown"
            href="#"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
            ><i class="fas fa-user fa-fw text-white"></i
          ></a>
          <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdown"
          >
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
                <div class="sb-nav-link-icon">
                  <i class="fas fa-calendar"></i>
                </div>
                Add Questions
              </a>
              <!-- <a class="nav-link" href="./reguser.php">
                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                All Users
              </a> -->
              <a class="nav-link" href="./userinfo.php">
                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                Faculty Profile
              </a>
              <a class="nav-link" href="./paper.php">
                <div class="sb-nav-link-icon"><i class="fas fa-link"></i></div>
                Send Paper Link
              </a>
              <a class="nav-link" href="../logout.php">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-sign-out"></i>
                </div>
                logout
              </a>
            </div>
          </div>
        </nav>
      </div>
      <div id="layoutSidenav_content">
        <main>
          <!-- <div height="100px"></div> -->

          <div class="container">
            <div class="table-card">
              <table id="myTable" class="display">
                <thead>
                    <tr>
                        <th>Srno.</th>
                        <th>Product Type</th>
                        <th>Product Brand</th>
                        <th>Product Description</th>
                        <th>Uploaded by</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                  include_once('./config/conn.php');
                  // $prob=$_GET['type'];
                  // $sex = $_SESSION['gender'];
                  // echo $sex;
                  $sql="SELECT * FROM `products`";
                  $result = mysqli_query($conn, $sql);
                  $sno = 0;
                  while($row = mysqli_fetch_assoc($result)){
                      $sno=$sno +1 ;
                      $id = $row['id'];
                      echo "<tr>
                      <th scope='row'>".$sno."</th>
                      <td>".$row['type']."</td>
                      <td>".$row['brand']."</td>
                      <td>".$row['description']."</td>
                      <td>".$row['uploaded_by_user_id']."</td>
                      <td><a href='./show.php?id=$id'><button type='button'  class='btn btn-primary'>Show Product</button></a></td>
                      </tr>";
                  }
                  ?>
                </tbody>
            </table> 
            </div>
            
          </div>
          
        </main>
        <footer class="py-4 bg-light mt-auto">
          <div class="container-fluid px-4">
            <div
              class="d-flex align-items-center justify-content-between small"
            >
              <div class="text-muted">
                Copyright &copy; HelpScan 2023.All right reserved.
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="./assets/datatables/datatables.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="./assets/js/scripts.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="./assets/demo/chart-area-demo.js"></script>
    <script src="./assets/demo/chart-bar-demo.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="./assets/js/datatables-simple-demo.js"></script>
  
    
    <script>
      let table = new DataTable('#myTable');

    </script>
  </body>
</html>
