<?php
include('./includes/connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" 
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <!--Nav bar-->
    <div class="container-fluid p-0" >
    <!--Top Nav bar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <a class="navbar-brand" href="./admin/index.php"><!--img src="#"-->LOGO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i><sup>3</sup></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Total: 3000.00 Rs</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <!--End Top Nav bar-->

        <!-- second navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-secondary p-0">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Sign Up</a>
                </li> 

                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li> 
            </ul>
        </nav>
        <!--second navbar END-->

        <!--Heading section-->
        <div class="bg-light">
            <h3 class="text-center">iPhone-Store</h3>
            <p class="text-center">Everything You need is Here with Us</p>
        </div>
        <!--Heading section end-->

        <!--Content section-->
        <div class="row">
        <!--Items-->
            <div class="bg-ligh col-md-10 t">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="./img/Apple-iPhone-14-pro-2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Add to Card</a>
                                <a href="#" class="btn btn-primary ">View Details</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="card">
                            <img src="./img/Apple-iPhone-14-Pro-5.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Add to Card</a>
                                <a href="#" class="btn btn-primary ">View Details</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card" >
                            <img src="./img/iphone-14-3-1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Add to Card</a>
                                <a href="#" class="btn btn-primary ">View Details</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card" >
                            <img src="./img/apple-3.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Add to Card</a>
                                <a href="#" class="btn btn-primary ">View Details</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card" >
                            <img src="./img/apple-2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Add to Card</a>
                                <a href="#" class="btn btn-primary ">View Details</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <img src="./img/apple-1.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Add to Card</a>
                                <a href="#" class="btn btn-primary ">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
        <!--Right Side NavBar-->
            <div class="col-md-2 bg-secondary p-0">
                <!--list 1-->
                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item bg-info">
                        <a class="nav-link text-light" href="#"><h3>Brands</h3></a>
                    </li>
                    <!--Calling to brand table-->
                    <?php
                        $select_brands = "SELECT * FROM `brand_tb`";
                        $run_select_brands = mysqli_query($conn, $select_brands);
                        while($row_data = mysqli_fetch_assoc($run_select_brands))
                        {
                            $brand_id = $row_data['brand_id'];
                            $brand_name = $row_data['brand_name'];

                            // Display the brand list
                            echo "<li class='nav-item '>
                            <a class='nav-link text-light' href='#'>$brand_name</a>
                            </li>";
                        }
                    ?>
                </ul>

                <!--list 2-->
                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item bg-info">
                        <a class="nav-link text-light" href="#"><h3>Category</h3></a>
                    </li>
                    <!--calling to category-->
                    <?php
                        $select_category = "SELECT * FROM `category_tb`" ;
                        $run_select_category = mysqli_query($conn, $select_category);
                        while($row_data = mysqli_fetch_assoc($run_select_category))
                        {
                            $category_id = $row_data['category_id'];
                            $category_name = $row_data['category_name'];

                            // Display the category
                            echo " <li class='nav-item'>
                            <a class='nav-link text-light' href='#'>$category_name</a>
                            </li>";
                        }
                    ?>
                </ul>  

                <!--list 2-->
                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item bg-info">
                        <a class="nav-link text-light" href="#"><h3>Product</h3></a>
                    </li>
                    <!--calling to category-->
                    <?php
                        $select_product = "SELECT * FROM `product_tb`" ;
                        $run_select_product = mysqli_query($conn, $select_product);
                        while($row_data = mysqli_fetch_assoc($run_select_product))
                        {
                            $product_id = $row_data['product_id'];
                            $product_name = $row_data['product_name'];

                            // Display the category
                            echo " <li class='nav-item'>
                            <a class='nav-link text-light' href='#'>$product_name</a>
                            </li>";
                        }
                    ?>
                </ul>  

            </div>
        <!--Right Side NavBar end-->    
        </div>
        <!--Content section end-->

        <!-- footer Start-->
        <div class="navbar-light bg-info p-1 text-center"> 
            <p><i class="fa fa-copyright p-1" ></i>All right reserved Designed by KgySathsara</p>
        </div>
        <!--Footer End-->
    </div>
    
    <!--Boostrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>