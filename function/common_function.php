<?php
// Call the database
include "./includes/connection.php";

//Get All the Products in the index page
function getproducts()
{
    global $conn;

    if (!isset($_GET["category"])) {
        //Condition to check if isset or not
        if (!isset($_GET["brands"])) {
            $select_product_query = "SELECT * FROM `product_tb`";
            $run_query = mysqli_query($conn, $select_product_query);

            while ($row = mysqli_fetch_assoc($run_query)) {
                $product_id = $row["product_id"];
                $product_name = $row["product_name"];
                $product_descrioption = $row["product_description"];
                $product_image1 = $row["product_image1"];
                $product_image2 = $row["product_image2"];
                $product_image3 = $row["product_image3"];
                $product_price = $row["product_price"];
                $category_id = $row["category_id"];
                $brand_id = $row["brand_id"];

                echo "<div class='col-md-4 '>
                    <div class='card'>
                        <img src='./admin/product_image/$product_image1' class='card-img-top' alt='...'>
                        <div class='card-body'>
                            <h5 class='card-title'>$product_name</h5>
                            <p class='card-text'>$product_descrioption</p>
                            <h6 class='card-text'>$product_price</h6>
                            <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to Card</a>
                            <a href='product_details.php?product_id=$product_id' class='btn btn-primary'>View Details</a>
                        </div>
                    </div>
                </div>";
            }
        }
    }
}

//Getting unique categories
function get_unique_categories()
{
    global $conn;

    if (isset($_GET["category"])) {
        //Condition to check if isset or not
        $category_id = $_GET["category"];
        $select_product_query = "SELECT * FROM `product_tb`WHERE category_id = $category_id ";
        $run_query = mysqli_query($conn, $select_product_query);

        //Count Numbers of Rows in the run query
        $num_of_rows = mysqli_num_rows($run_query);
        if ($num_of_rows == 0) {
            echo "<h2 class='text-center text-danger'>No Stocks of this Category Available !</h2>";
        }

        while ($row = mysqli_fetch_assoc($run_query)) {
            $product_id = $row["product_id"];
            $product_name = $row["product_name"];
            $product_descrioption = $row["product_description"];
            $product_image1 = $row["product_image1"];
            $product_image2 = $row["product_image2"];
            $product_image3 = $row["product_image3"];
            $product_price = $row["product_price"];
            $category_id = $row["category_id"];
            $brand_id = $row["brand_id"];

            echo "<div class='col-md-4 '>
                <div class='card'>
                <img src='./admin/product_image/$product_image1' class='card-img-top' alt='...'>
                <div class='card-body'>
                <h5 class='card-title'>$product_name</h5>
                <p class='card-text'>$product_descrioption</p>
                <h6 class='card-text'>$product_price</h6>
                <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to Card</a>
                <a href='product_details.php?product_id=$product_id' class='btn btn-primary'>View Details</a>
                </div>
                </div>
            </div>";
        }
    }
}

//Getting unique categories
function get_unique_brands()
{
    global $conn;

    if (isset($_GET["brands"])) {
        //Condition to check if isset or not
        $brand_id = $_GET["brands"];
        $select_product_query = "SELECT * FROM `product_tb`WHERE brand_id = $brand_id";
        $run_query = mysqli_query($conn, $select_product_query);

        //Count Numbers of Rows in the run query
        $num_of_rows = mysqli_num_rows($run_query);
        if ($num_of_rows == 0) {
            echo "<h2 class='text-center text-danger'>No Stocks of this Brand Available !</h2>";
        }

        while ($row = mysqli_fetch_assoc($run_query)) {
            $product_id = $row["product_id"];
            $product_name = $row["product_name"];
            $product_descrioption = $row["product_description"];
            $product_image1 = $row["product_image1"];
            $product_image2 = $row["product_image2"];
            $product_image3 = $row["product_image3"];
            $product_price = $row["product_price"];
            $category_id = $row["category_id"];
            $brand_id = $row["brand_id"];

            echo "<div class='col-md-4 '>
                <div class='card'>
                <img src='./admin/product_image/$product_image1' class='card-img-top' alt='...'>
                <div class='card-body'>
                <h5 class='card-title'>$product_name</h5>
                <p class='card-text'>$product_descrioption</p>
                <h6 class='card-text'>$product_price</h6>
                <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to Card</a>
                <a href='product_details.php?product_id=$product_id' class='btn btn-primary'>View Details</a>
                </div>
                </div>
            </div>";
        }
    }
}

function getbrand()
{
    global $conn;
    $select_brands = "SELECT * FROM `brand_tb`";
    $run_select_brands = mysqli_query($conn, $select_brands);
    while ($row_data = mysqli_fetch_assoc($run_select_brands)) {
        $brand_id = $row_data["brand_id"];
        $brand_name = $row_data["brand_name"];

        // Display the brand list
        echo "<li class='nav-item '>
        <a class='nav-link text-light' href='index.php?brands=$brand_id'>$brand_name</a>
        </li>";
    }
}

function getcategory()
{
    global $conn;
    $select_category = "SELECT * FROM `category_tb`";
    $run_select_category = mysqli_query($conn, $select_category);
    while ($row_data = mysqli_fetch_assoc($run_select_category)) {
        $category_id = $row_data["category_id"];
        $category_name = $row_data["category_name"];

        // Display the category
        echo " <li class='nav-item'>
        <a class='nav-link text-light' href='index.php?category=$category_id'>$category_name</a>
        </li>";
    }
}

function search_product()
{
    global $conn;
    if(isset($_GET['search_data_button']))
    {
        $search_data_value = $_GET['search_data'];

        $select_product_query = "SELECT * FROM `product_tb` WHERE product_name LIKE '%$search_data_value%'";
        $run_query = mysqli_query($conn, $select_product_query);

        while ($row = mysqli_fetch_assoc($run_query)) {
            $product_id = $row["product_id"];
            $product_name = $row["product_name"];
            $product_descrioption = $row["product_description"];
            $product_image1 = $row["product_image1"];
            $product_image2 = $row["product_image2"];
            $product_image3 = $row["product_image3"];
            $product_price = $row["product_price"];
            $category_id = $row["category_id"];
            $brand_id = $row["brand_id"];

            echo "<div class='col-md-4 '>
                <div class='card'>
                <img src='./admin/product_image/$product_image1' class='card-img-top' alt='...'>
                <div class='card-body'>
                <h5 class='card-title'>$product_name</h5>
                <p class='card-text'>$product_descrioption</p>
                <h6 class='card-text'>$product_price</h6>
                <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to Card</a>
                <a href='product_details.php?product_id=$product_id' class='btn btn-primary'>View Details</a>
                </div>
                </div>
            </div>";
        }
    }
}

function view_details()
{
    global $conn;

    if(isset($_GET["product_id"])){
            if (!isset($_GET["category"])) {
            //Condition to check if isset or not
            if (!isset($_GET["brands"])) {
                $product_id = $_GET['product_id'];
                $select_product_query = "SELECT * FROM `product_tb` WHERE product_id = $product_id";
                $run_query = mysqli_query($conn, $select_product_query);

                while ($row = mysqli_fetch_assoc($run_query)) {
                    $product_id = $row["product_id"];
                    $product_name = $row["product_name"];
                    $product_descrioption = $row["product_description"];
                    $product_image1 = $row["product_image1"];
                    $product_image2 = $row["product_image2"];
                    $product_image3 = $row["product_image3"];
                    $product_price = $row["product_price"];
                    $category_id = $row["category_id"];
                    $brand_id = $row["brand_id"];

                    echo "<div class='row'>
                    <!--Items-->
                        <div class='bg-ligh col-md-10 t'>
                            <div class='row'>
                                <div class='col-md-4'>
                                    <!--Product Details in here-->
                                    <div class='card'>
                                        <img src='./admin/product_image/$product_image1' class='card-img-top' alt='...'>
                                        <div class='card-body'>
                                            <h5 class='card-title'>$product_name</h5>
                                            <p class='card-text'>$product_descrioption</p>
                                            <h6 class='card-text'>$product_price</h6>
                                            <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to Card</a>
                                        </div>
                                    </div>
                                </div>

                        <div class='col-md-8'>
                            <!--Image Here-->
                            <div class='row'>
                                <div class='col-md-12'>
                                    <h4  class='text-center'>Related Images</h4>
                                </div>
                                <div class='col-md-6'>
                                    <img src='./admin/product_image/$product_image2'  class='card-img-top' alt=''>
                                </div>
                                <div class='col-md-6'>
                                    <img src='./admin/product_image/$product_image3'  class='card-img-top' alt=''>
                                </div>
                            </div>
                        </div>

                    </div>";
                }
            }
        }
    }
}

//Get Ip Address

function getIPAddress()
    {  
    //whether ip is from the share internet  
    if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
    }  
    //whether ip is from the remote address  
    else{  
            $ip = $_SERVER['REMOTE_ADDR'];  
    }  
    return $ip;  
}  
    //$ip = getIPAddress();  
    //echo 'User Real IP Address - '.$ip;  

// Cart Funtions
function cart()
{
    if(isset($_GET['add_to_cart']))
    {
        global $conn;
        $ip = getIPAddress(); 
        $get_product_id = $_GET['add_to_cart'];

        $seleect_query = "SELECT * FROM `cart_details` WHERE ip_address = '$ip' AND product_id = '$get_product_id'";
        $run_query = mysqli_query($conn, $seleect_query);

        $num_of_rows = mysqli_num_rows($run_query);
        if ($num_of_rows > 0) {
            echo "<script>alert('This item is already in the Cart')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        }
        else{
            $insert_query = "INSERT INTO `cart_details` (product_id, ip_address, quantity) VALUES($get_product_id, '$ip', 0)";
            $run_query = mysqli_query($conn,  $insert_query);

            echo "<script>alert('Your Item Added')</script>";
        }
    }
}

//get cart item count show
function cart_items()
{
    if(isset($_GET['add_to_cart']))
    {
        global $conn;
        $ip = getIPAddress(); 

        $seleect_query = "SELECT * FROM `cart_details` WHERE ip_address = '$ip'";
        $run_query = mysqli_query($conn, $seleect_query);

        $count_cart_items = mysqli_num_rows($run_query);
    }
    else
    {
        global $conn;
        $ip = getIPAddress(); 

        $seleect_query = "SELECT * FROM `cart_details` WHERE ip_address = '$ip'";
        $run_query = mysqli_query($conn, $seleect_query);

        $count_cart_items = mysqli_num_rows($run_query);
    }

    echo $count_cart_items;
}

//Total Prices
function total_cart_price()
{
    global $conn;
    $ip = getIPAddress(); 
    $total = 0;
    $select_query = "SELECT * FROM `cart_details` WHERE ip_address = '$ip'";
    $run_query = mysqli_query($conn, $select_query);

    while ($row=mysqli_fetch_array($run_query)) {
        # code...
        $product_id = $row['product_id'];
        $select_query_product = "SELECT * FROM `product_tb` WHERE product_id = '$product_id'";
        $run_query_product = mysqli_query($conn, $select_query_product);

        while ($row_product_price = mysqli_fetch_array($run_query_product)) {
            # code...
            $product_price = array($row_product_price['product_price']);
            $product_total = array_sum($product_price);
            $total = $total + $product_total;
        }
    }
    echo $total;
}
?>