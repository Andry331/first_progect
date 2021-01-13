<?php
  use models\Db;

  abstract class Model
  {
    protected const TABLE = '';

    public static function findAll()
    {
      $db = Db::instans();
      $sql = 'SELECT * FROM ' . static::TABLE;
      return $db->query($sql, static::class);
    }
  }
