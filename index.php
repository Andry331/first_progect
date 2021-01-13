<?php
    require_once __DIR__.'\autoloading.php';
    use models\Product;
    use models\Service;
    use models\User;
    var_dump(Product::findAll());
    var_dump(Service::findAll());
    var_dump(User::findAll());
