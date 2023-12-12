<?php
// Call the database
include('./includes/connection.php');

//Get All the Products in the index page
function getproducts()
{
    global $conn;

    if(!isset($_GET['category']))  //Condition to check if isset or not
    {
        if(!isset($_GET['Brands']))
        {
            $select_product_query = "SELECT * FROM `product_tb`";
            $run_query = mysqli_query($conn,$select_product_query);

            while($row = mysqli_fetch_assoc($run_query))
            {
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
                    <a href='#' class='btn btn-primary'>Add to Card</a>
                    <a href='#' class='btn btn-primary '>View Details</a>
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

    if(!isset($_GET['Category']))  //Condition to check if isset or not
    {
        $category_id = $_GET['category'];
        $select_product_query = "SELECT * FROM `product_tb`WHERE category_id = '$category_id' ";
        $run_query = mysqli_query($conn,$select_product_query);

        while($row = mysqli_fetch_assoc($run_query))
        {
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
                <a href='#' class='btn btn-primary'>Add to Card</a>
                <a href='#' class='btn btn-primary '>View Details</a>
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

    if(!isset($_GET['Brands']))  //Condition to check if isset or not
    {
        $brand_id = $_GET['brands'];
        $select_product_query = "SELECT * FROM `product_tb`WHERE brand_id = '$brand_id'";
        $run_query = mysqli_query($conn, $select_product_query);

        while($row = mysqli_fetch_assoc($run_query))
        {
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
                <a href='#' class='btn btn-primary'>Add to Card</a>
                <a href='#' class='btn btn-primary '>View Details</a>
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
    while($row_data = mysqli_fetch_assoc($run_select_brands))
    {
        $brand_id = $row_data['brand_id'];
        $brand_name = $row_data['brand_name'];

            // Display the brand list
            echo "<li class='nav-item '>
        <a class='nav-link text-light' href='index.php?brands=$brand_id'>$brand_name</a>
        </li>";
    }
}

function getcategory()
{
    global $conn;
    $select_category = "SELECT * FROM `category_tb`" ;
    $run_select_category = mysqli_query($conn, $select_category);
    while($row_data = mysqli_fetch_assoc($run_select_category))
    {
        $category_id = $row_data['category_id'];
        $category_name = $row_data['category_name'];

        // Display the category
        echo " <li class='nav-item'>
        <a class='nav-link text-light' href='index.php?category=$category_id'>$category_name</a>
        </li>";
    }
}
?>