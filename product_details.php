<?php
include "./includes/connection.php";
include "./function/common_function.php";
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
                            <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
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
                            <a class="nav-link" href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i><sup><?php cart_items();?></sup></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Total: 3000.00 Rs</a>
                        </li>
                    </ul>
                    <form class="d-flex" action="search_product.php" method="GET">
                        <input class="form-control me-2" type="search" name="search_data" placeholder="Search" aria-label="Search">
                        <input type="submit" name="search_data_button" value="search" class="btn btn-outline-success">
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

                <!--Get Product info from Database-->
                <?php
                //Call the specification
                view_details();
                //calling Unique Branda
                get_unique_brands();
                // calling Unique category
                get_unique_categories();
                ?>
                </div>
            </div>   
        <!--Right Side NavBar-->

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