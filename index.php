<?php
    require_once __DIR__.'\autoloading.php';
    use models\Product;
    use models\Service;
    use models\User;
    use models\View;

    $index = new View;
    echo $index->display('index.php');
