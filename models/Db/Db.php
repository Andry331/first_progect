<?php
      namespace models\Db;

      use \PDO;

      class Db
      {
        protected PDO $dbh;
        public function __construct()
        {
          $this->dbh = new PDO('mysql:host=localhost;dbname=shop', 'root', '');
        }
        public function query(string $sql, $class): array
        {
          $sth = $this->dbh->prepare($sql);
          $sth->execute();
          return $sth->fetchAll(PDO::FETCH_CLASS, $class);
        }
      }
