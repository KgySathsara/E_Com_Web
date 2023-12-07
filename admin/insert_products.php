<?php
include('../includes/connection.php');

if(isset($_POST['insert_product']))
{
    $p_name = $_POST['product_name'];
    $p_description = $_POST['product_description'];
    $p_keyword = $_POST['product_keyword'];
    $p_category = $_POST['product_category'];
    $p_brand = $_POST['product_brand'];
    $p_price = $_POST['product_price'];
    $p_status = 'true';

    // Accessing Product Images
    $productImage1 = $_FILES['productImage1']['name'];
    $productImage2 = $_FILES['productImage2']['name'];
    $productImage3 = $_FILES['productImage3']['name'];

    // Access Image Temp
    $tmp_product_Image_1 = $_FILES['productImage1']['tmp_name'];
    $tmp_product_Image_2 = $_FILES['productImage2']['tmp_name'];
    $tmp_product_Image_3 = $_FILES['productImage3']['tmp_name'];

    //Empty Conditions
    if ($p_name=='' or $p_description=='' or  $p_keyword=='' or $p_category==''or $p_brand=='' or $productImage1=='' 
    or $productImage2=='' or $productImage3==''or $p_price=='')
    {
        echo "<script>alert('Please Fill All Fiels')</script>";
        exit();
    }
    else
    {
        //Move Image to the Product_image
        move_uploaded_file($tmp_product_Image_1, "./product_image/$productImage1");
        move_uploaded_file($tmp_product_Image_2, "./product_image/$productImage2");
        move_uploaded_file($tmp_product_Image_3, "./product_image/$productImage3");

        //Insert query
        $insert_products_query = "INSERT INTO `product_tb`(`product_name`, `product_description`,
            `product_keyword`, `category_id`, `brand_id`, `product_image1`, `product_image2`, `product_image3`,
            `product_price`, `date`, `status`) VALUES ('$p_name','$p_description','$p_keyword',
            '$p_category','$p_brand','$productImage1','$productImage2','$productImage3','$p_price','NOW()','$p_status')";

        $run_query = mysqli_query($conn, $insert_products_query);
        if($run_query)
        {
            echo "<script>alert('New Product Insert Successes !')</script>";
        }
    }
}
?>

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
    <div class="container">
        <h1 class="text-center">Insert Product</h1>
        <!--insert product form area-->
        <form action=""  method="POST" enctype="multipart/form-data">
            <!--Product Title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label class="form-label">Product Name :</label>
                <input type="text" class="form-control " name="product_name" id="product_name" placeholder="Insert Product Name" require="require" >
            </div>

            <!--Product Discription -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label class="form-label">Product Description :</label>
                <input type="text" class="form-control " name="product_description" id="product_description" placeholder="Insert Product Name" require="require" >
            </div>

            <!--Product Keyword -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label class="form-label">Product Keyword :</label>
                <input type="text" class="form-control " name="product_keyword" id="product_keyword" placeholder="Insert Product Name" require="require" >
            </div>

            <!--Product Category-->
            <div class="form-outline mb-4 w-50 m-auto ">
                <select name="product_category" id="product_category" class="form-select ">
                    <option >Select Category</option>
                    <?php
                        $select_category_query = "SELECT * FROM `category_tb`";
                        $run_query = mysqli_query($conn, $select_category_query);

                        while($row = mysqli_fetch_assoc($run_query))
                        {
                            $cat_id = $row['category_id'];
                            $cat_name = $row['category_name'];

                            echo "<option value='$cat_id'>$cat_name</option>";
                        }
                    ?>
                </select>
            </div>

            <!--Product Brand-->
            <div class="form-outline mb-4 w-50 m-auto ">
                <select name="product_brand" id="product_brand" class="form-select ">
                    <option >Select Brand</option>
                    <?php
                        $select_brand_query = "SELECT * FROM `brand_tb`";
                        $run_query = mysqli_query($conn, $select_brand_query);

                        while($row = mysqli_fetch_array($run_query))
                        {
                            $brand_id = $row['brand_id'];
                            $brand_name = $row['brand_name'];

                            echo "<option value='$brand_id'>$brand_name</option>";
                        }
                    ?>
                </select>
            </div>

            <!--Product Image 1-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="productImage1" class="form-label">Product Image 1 :</label>
                <input type="file" class="form-control" name="productImage1" id="productImage1" require="require" >
            </div>

            <!--Product Image 2-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="productImage2" class="form-label">Product Image 2 :</label>
                <input type="file" class="form-control " name="productImage2" id="productImage2" require="require" >
            </div>

            <!--Product Image 3-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="productImage3" class="form-label">Product Image 3 :</label>
                <input type="file" class="form-control " name="productImage3" id="productImage3" require="require" >
            </div>

            <!--Product Price -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label class="form-label">Product Price :</label>
                <input type="text" class="form-control " name="product_price" id="product_price" placeholder="Insert Product Price" require="require" >
            </div>

            <!--Submit-->
            <div class="form-outline mb-4 w-50 m-auto">
                <button class="bg-info " name="insert_product">Submit</button>
            </div>

        </form>
    </div>

<!--Boostrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>