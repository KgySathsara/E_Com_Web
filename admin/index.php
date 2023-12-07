<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panal</title>
    <!--Bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Font Awsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" 
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
    <!--Nav bar-->
    <div class="container-fluid p-0" >
    <!--Top Nav bar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.php"><!--img src="#"-->LOGO</a>
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item text-right">Welcome Admin</li>
                    </ul>
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">LogOut</a>
                        </li> 
                    </ul>
                </nav>  
            </div>
        </nav>
        <!--End Top Nav bar-->
        <div class="bg-light">
        <!--Heading-->
            <h1 class="text-center mt-2">Admin Dashboard</h1>
        <!--Action Area-->
            <div class="row">
                <div class="col-md-12 bg-secondary p-4 d-flex align-items-center">
                    <div>
                        <a href=""><img src="../img/Avatar.png" class="adminAvatar"></a>
                        <p class="text-center text-light">Admin</p>
                    </div>
                    <div class="button text-center p-3">
                        <button><a href="index.php?insert_products" class="nav-link text-light bg-info my-1">Insert Product</a></button>
                        <button><a href="" class="nav-link text-light bg-info my-1">View Product</a></button>
                        <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Category</a></button>
                        <button><a href="" class="nav-link text-light bg-info my-1">View Category</a></button>
                        <button><a href="index.php?insert_brands" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
                        <button><a href="" class="nav-link text-light bg-info my-1">View Brands</a></button>
                        <button><a href="" class="nav-link text-light bg-info my-1">Orders</a></button>
                        <button><a href="" class="nav-link text-light bg-info my-1">Payments</a></button>                 
                        <button><a href="" class="nav-link text-light bg-info my-1">Users</a></button>
                    </div>
                </div>     
            </div>
            <!--Form Area-->
            <div class="container my-4">
                <?php
                if(isset($_GET['insert_category']))
                {
                    include('insert_category.php');
                }
                if(isset($_GET['insert_brands']))
                {
                    include('insert_brands.php');
                }
                if(isset($_GET['insert_products']))
                {
                    include('insert_products.php');
                }
                ?>
            </div>
            <!--Form Area end-->
        </div>
    <!--Boostrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>