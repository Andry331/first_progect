<?php
    namespace models\product;

    class Product extends \Model
    {
      protected const TABLE = 'product';
      public int $product_id;
      public string $title;
      public string $price;
    }
