<?php
  use models\Db;

  abstract class Model
  {
    public int $id;
    protected const TABLE = '';
    // Пошук та виведення усіх записів з таблиці
    public static function findAll()
    {
      $db = Db::instans();
      $sql = 'SELECT * FROM ' . static::TABLE;
      return $db->query($sql, static::class);
    }
    // Пошук та виведення запису по ідентифікатору
    public static function findById($id)
    {
      $db = Db::instans();
      $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id=:id';
      return $db->query($sql, static::class, [':id'=>$id]);
    }
    // Функція по запису обєкта в базу даних
    public function insert()
    {
      $props = get_object_vars($this);
      $colums = [];
      $binds = [];
      $data = [];
      foreach ($props as $name => $value) {
        $colums[]=$name;
        $binds[]=':'.$name;
        $data[':'.$name]=$value;
      }
      $sql = 'INSERT INTO '. static::TABLE.' ('. implode(',', $colums) .') VALUES ('. implode(',', $binds) .')';
      $db = Db::instans();
      $db->execute($sql, $data);
      $this->id = $db->lastId();
    }
    public function update()
    {
      $props = get_object_vars($this);
      $binds = [];
      $data = [];
      foreach ($props as $name => $value) {
          $binds[]=$name.'=:'.$name;
          $data[':'.$name]=$value;
      }
      $sql = 'UPDATE '. static::TABLE.' SET '. implode(',', $binds) .' WHERE id = :id';
      $db = Db::instans();
      $db->execute($sql, $data);
    }
    public function save()
    {
      if (empty($this->id)) {
        $this->insert();
      } else {
        $this->update();
      }
    }
    public function delete()
    {
      $sql = 'DELETE FROM '. static::TABLE.' WHERE id=:id';
      $db = Db::instans();
      $db->execute($sql, [':id'=>$this->id]);
    }
  }
