<?php
    namespace App;

    class Config
    {
      public $data;
      protected static $instans = null;
      public static function instans()
      {
        if (null === static::$instans) {
          static::$instans = new static();
        }
        return static::$instans;
      }
      protected function __construct()
      {
        $this->data = include (__DIR__.'/../config.php');
      }
    }
