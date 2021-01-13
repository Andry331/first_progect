<?php
    namespace models;

    class User extends \Model
    {
      protected const TABLE = 'user';
      public int $user_id;
      public string $email;
      public int $phone;
    }
