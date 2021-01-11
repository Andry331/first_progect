<?php
  use models\Db\Db;

  abstract class Model
  {
    protected const TABLE = '';

    public static function findAll()
    {
      $db = new Db();
      $sql = 'SELECT * FROM ' . static::TABLE;
      return $db->query($sql, static::class);
    }
  }
