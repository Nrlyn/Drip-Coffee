<?php
    include("../dbconfig.php");

    if(isset($_POST['add_prod'])){
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $status = 'true';
        // accessing image
        $product_images=$_FILES['product_images']['name'];

        // accessing image tmp name
        $product_imagetmp=$_FILES['product_images']['tmp_name'];

        // form validation
        if($product_name=='' or $product_price=='' or  $product_images==''){
            echo "<script>alert('Please fill all the available fields')</script>";
            exit();
        }else{
            move_uploaded_file($product_imagetmp,"../images/$product_images");

            $insert_products = "insert into `tblProducts` (product_name, product_images, price, date, status) values ('$product_name','$product_images','$product_price', NOW(), '$status')";
            $result = mysqli_query($conn, $insert_products);
            if($result){
                echo "<script>alert('Successfully inserted the product!')</script>";
        }

       }
       
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owner Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/add_product.css">
    <script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>
</head>
<body>

<?php
        $path = "../footer/";
        $nav = "../navpath/";
        $nav_add = $nav."nav_add.php";
        $footer = $path."footer_add.php";
?>

<?php include($nav_add);?>

<section class="add-product" id="add-product">

<h1 class="heading"><span>add</span> product </h1>

<div class="form">
    
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3 mt-3 m-auto">
            <label for="product_name" class="form-label">Product Name:</label>
            <input type="text" class="form-control" id="product_name" placeholder="Enter Product Name" name="product_name" autocomplete="off" required="required">
        </div>

        <div class="mb-3 m-auto">
            <label for="product_images" class="form-label">Product Image:</label>
            <input type="file" class="form-control" id="product_images" name="product_images" required="required">
        </div>

        <div class="mb-3 m-auto">
            <label for="product_price" class="form-label">Product Price:</label>
            <input type="text" class="form-control" id="product_price" placeholder="Enter Product Price" name="product_price" autocomplete="off" required="required">
        </div>

        <div class="mb-3 m-auto">
            <button type="add_product" name="add_prod" class="btn btn-dark">Add Product</button>
        </div>

       
    </form>
</div>

</section>

    
<div class="footer">
    <?php include($footer);?>
</div>


    <script src="../js/add.js"></script>
</body>
</html>