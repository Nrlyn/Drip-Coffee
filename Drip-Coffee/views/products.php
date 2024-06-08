<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="../css/products.css">
    <script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>
</head>
<body>

    <?php
        $path = "../footer/";
        $nav = "../navpath/";
        $nav_prod = $nav."nav_prod.php";
        $footer = $path."footer_prod.php";
    ?>

    <?php include($nav_prod);?>

    <div class="title">
        <div class="box-content">
            <h2>Our<span> Products</span></h2>
            <h3>Espresso Specials</h3>
            <p>"These drinks are good for those looking for a stronger coffee flavor"</p>
        </div>
    </div>
    <div class="container">
        <div id="root"></div>
        <div class="sidebar">
            <div class="head"><p>My Cart</p></div>
            <div id="cartItem">Your Cart is empty</div>
            <div class="foot">
                <h3>Total</h3>
                <h2 id="total">₱ 0.00</h2>
            </div>
        </div>
    </div>

    <div class="footer">
            <?php
                include($footer);
            ?>
        </div>

    <script src="../js/product.js"></script>
</body>
</html>