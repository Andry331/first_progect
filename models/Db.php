<?php
      namespace models;

      use \PDO;

      class Db
      {
        protected static $instans = null;
        protected PDO $dbh;
        public static function instans()
        {
          if (null === static::$instans) {
            static::$instans = new static();
          }
          return static::$instans;
        }
        protected function __construct()
        {
          $this->dbh = new PDO('mysql:host=localhost;dbname=shop', 'root', '');
        }
        public function query(string $sql, $class, array $data=[]): array
        {
          $sth = $this->dbh->prepare($sql);
          $sth->execute($data);
          return $sth->fetchAll(PDO::FETCH_CLASS, $class);
        }
        public function execute(string $sql, array $data=[])
        {
          $sth = $this->dbh->prepare($sql);
          $sth->execute($data);
        }
        public function lastId()
        {
          return $this->dbh->lastInsertId();
        }
      }
