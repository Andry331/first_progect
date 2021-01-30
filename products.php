<?php
    require_once __DIR__.'\autoloading.php';
    use models\Product;
    use models\User;
    use models\View;

    $products = new View;
    $products->product = Product::findAll();
    echo $products->display('products.php');
