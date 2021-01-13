<?php
    namespace models;

    use models\interfaces\PaidActionsInterface;

    class Product extends \Model implements PaidActionsInterface
    {
      protected const TABLE = 'product';
      public int $product_id;
      public string $title;
      public int $price;

      use traits\GetPriceTrait;
    }
