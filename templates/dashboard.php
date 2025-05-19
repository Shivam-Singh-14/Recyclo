<?php
session_start();
include_once('../conn.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/newdes.css">
</head>

<body>
    <header>
        <div class="navbar">
            <div class="nav-logo">
                <div class="logo">
                </div>
            </div>
            <!-- Navbar Address option -->
            <div class="nav-address border">
                <p class="add-first">Deliver to</p>
                <div class="add-icon">
                    <i class="fa-solid fa-location-dot"></i>
                    <p class="add-second">India</p>
                </div>
            </div>
            <!-- Navbar search -->
            <div class="nav-search border">
                <input type="text" placeholder="Search Recyclable Goods" class="search-input">
                <div class="search-icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
            <!-- Navbar Chat  -->
            <div class="nav-chat ">
                <i class="fa-regular fa-message"></i>
            </div>
            <!-- Navbar Notification -->
            <div class="nav-notify nav-chat">
                <i class="fa-solid fa-bell"></i>
            </div>
            <!-- Navbar Login Anchor -->
            <div class="nav-login">
                <?php 
                if(isset($_SESSION['email'])){
                ?>
                <!-- <a href="../assets/templates/profile.html">
                    <div class="img-cont">
                        <img src="../assets/img/avatar.png" alt="" width="50px">
                    </div>
                </a> -->
                <a href="../admin/logout.php">LOGOUT</a>

                <?php
                }else{
                ?>
                <a href="../admin/logout.php">LOGOUT</a>
                <?php
                }
                ?>
            </div>
            <!-- Navbar Sell -->
            <div class="nav-sell">
                <a href="./postad.html">
                    <i class="fa-solid fa-plus"></i>
                    Sell
                </a>
            </div>
        </div>
        <!-- <div class="sub-nav">
            <div class="categories">
                <div class="all-cate">
                    All Categories
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="opts">
                    <p>cars</p>
                    <p>motorcycles</p>
                    <p>Mobile Phones</p>
                    <p>For Sales: Houses & Aparttments</p>
                    <p>Scooters</p>
                    <p>Commercial & Other Vehicles</p>
                    <p>For Rent: Houses & Apartments</p>
                </div>
            </div>
        </div> -->
    </header>
    <div class="hero-section">
        <div class="shop-sec" id="grid-cont">

            <?php

                $query = "SELECT * FROM `sellform`";
                $result = mysqli_query($conn,$query);

                while($row = mysqli_fetch_assoc($result)){
                    $img_name = $row['image'];
                    $img_link = "../image/$img_name";
                    // echo $img_link;
                    ?>
                   
                    
                    
                    <div class="box-1 box">
                        <h2><?php echo $row['category']; ?></h2>
                        <div class="box-img" style="background-image: url('<?php echo $img_link; ?>');">
                        </div>
                        <div class="box-content">
                            <div class="price"><p>Price: 
                            <?php echo $row['price']; ?></p>
                            </div>
                            <p>Description: <?php echo $row['description']; ?></p>
                            <p>Adress: <?php echo $row['address']; ?></p>
                            <p>Email: <?php echo $row['email']; ?></p>
                            <p>Phone: <?php echo $row['phone']; ?></p>
                        </div>
                        <div class="date-pub">
                            <p><?php echo $row['year']; ?></p>
                        </div>
                    </div>
            <?php

                }
            ?>



        </div>
        <!-- CREATE A BACK TO TOP BUTTON WITH THE HELP OF JAVASCIPT AND PUT IT HERE -->
    </div>
    <footer>
        <div class="social-items">
            <div class="icons">
                <a href="#">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="#">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
                <a href="#">
                    <i class="fa-brands fa-facebook"></i>
                </a>
                <a href="./queryemail.html">
                    <i class="fa-regular fa-envelope"></i>
                </a>
            </div>
        </div>
        <hr class="marg-line">
        <div class="foot-text">
            "Welcome to Recyclo, where sustainability meets convenience. Explore our marketplace dedicated to buying and
            selling recyclable goods effortlessly. Join a community committed to reducing waste and promoting
            eco-friendly living. Your one-stop destination for a greener, more sustainable lifestyle. Embrace the
            Recyclo revolution and make a positive impact on the planet, one transaction at a time."
        </div>
    </footer>
    <script href="../assets/javscrpt files/search.js"></script>
</body>

</html>