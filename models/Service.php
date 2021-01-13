<?php
    namespace models\service;

    use models\interfaces\PaidActionsInterface;

    class Product extends \Model implements PaidActions
    {
      protected const TABLE = 'service';
      public int $service_id;
      public string $service_name;
      public int $price;

      use traits\GetPriceTrait;
    }
