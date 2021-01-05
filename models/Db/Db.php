<?php
      namespace models\Db;

      class Db
      {
        protected $dbh;
        protected $sth;

        function __construct(string $host, string $dbname, string $user, string $password)
        {
          $this->dbh = new \PDO('mysql:host='.$host.';dbname='.$dbname, $user, $password)
        }

        public function query(string $sql, array $data = [])
        {
          $this->sth = $this->dbh->prepare($sgl);
          if ($dataArray) {
            $this->sth->execute($dataArray);
          } else {
            $this->sth->execute();
          }
          return $this->sth->fetchAll(\PDO::FETCH_ASSOC)
        }
        
        public function execut(string $sql, array $data = [])
        {
          $this->sth = $this->dbh->prepare($sgl);
          if ($dataArray) {
            $this->sth->execute($dataArray);
          } else {
            $this->sth->execute();
          }
        }
      }
