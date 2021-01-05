<?php
    namespace models\view;

    class View
    {
      protected $dataArray = [];
      public function __construct()
      {
        // code...
      }
      public function __get($var)
      {
        if (isset($this->dataArray[$var])) {
          return $this->dataArray[$var];
        }
      }
      public function setData($name, $data)
      {
        $this->dataArray[$name] = $data;
      }
      public function display($template)
      {
        // code...
      }
    }
