<?php
    namespace models;

    use models\interfaces\PaidActionsInterface;

    class Service extends \Model implements PaidActionsInterface
    {
      protected const TABLE = 'service';
      public string $service_name;
      public int $price;

      use traits\GetPriceTrait;
    }
