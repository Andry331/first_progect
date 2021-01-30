<?php
    namespace models;

    use models\interfaces\PaidActionsInterface;

    class Product extends \Model implements PaidActionsInterface
    {
      protected const TABLE = 'product';
      public string $title;
      public int $price;

      use traits\GetPriceTrait;

      public static function findLatest()
      {
        $db = Db::instans();
        $sql = 'SELECT * FROM ' . static::TABLE . ' ORDER BY '. $this->id . ' DESC LIMIT 3';
        return $db->query($sql, static::class);
      }
    }
