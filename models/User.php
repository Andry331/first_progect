<?php
    namespace models;

    class User extends \Model
    {
      protected const TABLE = 'user';
      public string $email;
      public int $phone;
    }
