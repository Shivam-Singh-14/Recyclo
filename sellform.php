<?php
session_start();
include_once('./conn.php');
error_reporting(0);

$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

	$filename = $_FILES['uploadfile']['name'];
	$tempname = $_FILES['uploadfile']['tmp_name'];
	$folder = "./image/" . $filename;

	$db = mysqli_connect("localhost", "root", "", "recyclo");

	// Get all the submitted data from the form
	$sql = "INSERT INTO `image`(`filename`) VALUES ('$filename')";

	// Execute query
	mysqli_query($db, $sql);

    $_SESSION['imgname'] = $filename;

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> Image uploaded successfully!</h3>";
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./formsell.css">
</head>

<body>
    <header>
        <div class="navbar">
            <div class="nav-logo ">
                <a href="./templates/postad.html">
                    <button class="hover-effect">
                    <i class="fa-solid fa-arrow-left"></i>back
                    </button>
                </a>
            </div>
        </div>
    </header>
    <div class="hover-effect">
    </div>
    <div class="main-line">
        <h1>POST AD</h1>
    </div>
    <div class="post-form">
        <form id="1" class="from-1" method="post" action="./sellformphp.php">
            <div class="selected-category">
                <div class="select-heading">
                    <p>Select category</p>
                <div class="product-category">
                    <select id="inputpaper" name="category" class="hover-effect" required>
                        <option slected>Choose...</option>
                        <option>Appliances</option>
                        <option>Automobiles</option>
                        <option>Batteries</option>
                        <option>Electronics</option>
                        <option>Furniture</option>
                        <option>Glass</option>
                        <option>Light Bulbs</option>
                        <option>Metals</option>
                        <option>Oil</option>
                        <option>Organic Waste</option>
                        <option>Packaging</option>
                        <option>Paper</option>
                        <option>Plastic</option>
                        <option>Textiles</option>
                        <option>Tyres</option>
                    </select>
                </div>
                </div>
            </div>
            <div class="contact-info">
                <div class="email-info">
                    <label>
                        Enter a valid Email Id:
                        <input type="email" name="email" placeholder="Enter a valid Email ID">
                    </label>
                </div>
                <div class="phone-info">
                    <label>
                        Enter a valid <br> Whatsapp Number:
                        <input type="phone" name="phone" placeholder="Enter a valid Whatsapp Number">
                    </label>
                </div>
            </div>
            <!-- INFO ABOUT THE PRODUCT -->
            <div class="main-info">
                <!-- <div class="headline">
                    <p>Include some Details</p>
                </div> -->
                <div class="brand-name">
                    <label>
                        Brand
                        <input type="text" name="brand" placeholder="Please fill the Brand " class="hover-effect" required>
                    </label>
                </div>
                <div class="year-purchase">
                    <label>Year <br>(When the product <br> was bought)
                    <input type="date" name="date"></label>
                </div>
                <div class="describe-product ">
                    <label>Description of product</label>
                    <input type="text" name="description" placeholder="Enter Proper description of the product" class="hover-effect"
                        required>
                </div>
                <div class="product-quantity brand-name">
                    <label>Quantity
                    <!-- <label>Select the unit for the Qunatity</label>
                    <select name="inputpaper" id="weight_type" class="hover-effect" required>
                        <option slected>Choose...</option>
                        <option>Kilograms</option>
                        <option>Litres</option>
                    </select> -->
                    <input type="text" placeholder="Enter Quantity" name="quantity" required>
                </label>
                </div>
                <div class="product-price brand-name">
                    <label>Offer Price(in Rs.)
                    <input type="text" name="price" placeholder="Enter the price of the product" required>
                </label>
                </div>
                <div class="present-location describe-product">
                    <div class="present-address">
                        <label>Enter your address
                            <input type="text" name="address" placeholder="Address" class="hover-effect" required>
                        </label>
                    </div>
                    <!-- <div class="state option-category">
                        <label for="inputState" class="form-label">State</label>
                        <select id="inputState" id="state" class="hover-effect">
                            <div class="state-option">
                                <option selected>Choose...</option>
                                <option>Andhra Pradesh</option>
                                <option>Arunachal Pradesh</option>
                                <option>Assam</option>
                                <option>Bihar</option>
                                <option>Chhattisgarh</option>
                                <option>Goa</option>
                                <option>Gujarat</option>
                                <option>Haryana</option>
                                <option>Himachal Pradesh</option>
                                <option>Jharkhand</option>
                                <option>Karnataka</option>
                                <option>Kerala</option>
                                <option>Madhya Pradesh</option>
                                <option>Maharashtra</option>
                                <option>Manipur</option>
                                <option>Manipur</option>
                                <option>Meghalaya</option>
                                <option>Mizoram</option>
                                <option>Nagaland</option>
                                <option>Odisha</option>
                                <option>Punjab</option>
                                <option>Rajasthan</option>
                                <option>Sikkim</option>
                                <option>Tamil Nadu</option>
                                <option>Telangana</option>
                                <option>Tripura</option>
                            </div>
                        </select>
                    </div> -->
                    <div class="post-ad ">
                        <button type="submit" class="hover-effect">Post</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
        <div class="img-post">
            <form id="2" method="post" action="" enctype="multipart/form-data">
                <div class="head">
                    Add the Photo of the product
                </div>
                <div class="photo-inp">
                    <input type="file" placeholder="product-photo"  name="uploadfile" required>
                </div>
                <div class="post-ad-2 ">
                    <button type="submit" class="hover-effect" name="upload">Upload</button>
                </div>
            </form>
        </div>
    
</body>

</html>