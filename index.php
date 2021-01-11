<?php
    require_once __DIR__.'\autoloading.php';
    use models\product\Product;
    $t = Product::findAll();
    var_dump($t);
