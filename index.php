<?php
    require_once __DIR__.'\autoloading.php';
    use models\Product;
    $t = Product::findAll();
    var_dump($t);
