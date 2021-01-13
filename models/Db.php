<?php
      namespace models;

      use \PDO;

      class Db
      {
        protected static $instans = null;
        protected PDO $dbh;
        public static function instans()
        {
          if (null === self::$instans) {
            self::$instans = new self();
          }
          return self::$instans;
        }
        protected function __construct()
        {
          $this->dbh = new PDO('mysql:host=localhost;dbname=shop', 'root', '');
        }
        public function query(string $sql, $class): array
        {
          $sth = $this->dbh->prepare($sql);
          $sth->execute();
          return $sth->fetchAll(PDO::FETCH_CLASS, $class);
        }
        public function execute(string $sql, array $data=[])
        {
          $sth = $this->dbh->prepare($sql);
          $sth->execute($data);
        }
      }
