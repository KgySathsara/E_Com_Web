<?php
include('../includes/connection.php');

if(isset($_POST['insert_cat'])){
    $category_name = $_POST['cat_name'];
    //Search Command To See Duplicates
    $search_query = "SELECT * FROM `category_tb` WHERE category_name = '$category_name'";
    $run_search_query = mysqli_query($conn, $search_query);
    $search_row = mysqli_num_rows($run_search_query);
    if ($search_row>0) {
        echo "<script> alert('Category already Exists')</script>";
    }else{  
        //Insert Query
        $insert_query = "INSERT INTO `category_tb`(`category_name`) VALUES ('$category_name')"; 
        $run_insert_query = mysqli_query($conn, $insert_query);
        if ($run_insert_query){
            echo "<script>alert('New Category Inserted')</script>";
        }
    }
}
?>

<h2 class="text-center p-1">Insert Category</h2>
<form action="" method="POST">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-tag"></i></span>
        <input type="text" class="form-control" placeholder="Insert Category Name" aria-label="Username" name="cat_name">
    </div>

    <div class="input-group mb-3 ">
        <button class="bg-info" name="insert_cat">Insert Category</button>
    </div>
</form>   