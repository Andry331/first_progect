<?php
    require_once __DIR__.'\autoloading.php';
    use models\Service;
    use models\User;
    use models\View;

    $services = new View;
    $services->service = Service::findAll();
    echo $services->display('services.php');
