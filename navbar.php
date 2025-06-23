<?php
    $navLinks = [
        "index.php" => "TEAM5",
        "registration.php" => "Register",
        "login.php" => "Login",
        "about.php" => "About Us",
        "category.php?category=Snacks" => "Snacks",
        "category.php?category=Drinks" => "Drinks",
        ];
?>

<div class="navbar">

    <img id="img_dark" src="https://cdn-icons-png.flaticon.com/512/5262/5262027.png"  height="30px" width="30px" onclick="dayMode()" >
    <img id="img_day" style="display: none;" src="https://cdn-icons-png.flaticon.com/512/10275/10275221.png"  height="30px" width="30px" onclick="nightMode()" >
    <a href="shoppingcart.php">
 
    <img src="https://thumbs.dreamstime.com/b/red-cart-icon-shopping-online-isolated-white-basket-purchase-shop-trolley-symbol-e-commerce-clip-art-concept-186328972.jpg"  alt="Cart" style="width:40px; height: 40px; "  >
    
</a>


            
    <?php foreach ($navLinks as $link => $label): ?>
    <?php if ($label === "TEAM5"): ?>
        <a href="<?= $link ?>" id="nav_logo"><b><?= $label ?></b></a>
    <?php else: ?>
        <a href="<?= $link ?>"><?= $label ?></a>
    <?php endif; ?>
    <?php endforeach; ?>


</div>