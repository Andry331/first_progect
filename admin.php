<?php
    require_once __DIR__.'\autoloading.php';
    use models\Product;
    use models\Service;
    use models\User;
    use models\View;

    $index = new View;
    $index->product = Product::findAll();
    $index->service = Service::findAll();
    echo $index->display('admin.php');
