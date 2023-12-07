<?php
include('../includes/connection.php');

if(isset($_POST['insert_brand'])){
    $category_name = $_POST['brands_name'];
    //Search Comand To See Duplicates
    $search_query = "SELECT * FROM `brand_tb` WHERE brand_name = '$category_name'";
    $run_search_query = mysqli_query($conn, $search_query);
    $search_row = mysqli_num_rows($run_search_query);
    if ($search_row>0) {
        echo "<script> alert('Brand already Exists')</script>";
    }else{  
        //Insert Query
        $insert_query = "INSERT INTO `brand_tb`(`brand_name`) VALUES ('$category_name')"; 
        $run_insert_query = mysqli_query($conn, $insert_query);
        if ($run_insert_query){
            echo "<script>alert('New Brand Inserted')</script>";
        }
    } 
}
?>

<h2 class="text-center p-1">Insert Brands</h2>
<form action="" method="POST">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fa-brands fa-slack"></i></span>
        <input type="text" class="form-control" placeholder="Insert Brands Name"  name="brands_name">
    </div>

    <div class="input-group mb-3 ">
        <button class="bg-info" name="insert_brand">Insert Brands</button>
    </div>
</form>  