<?php
    namespace models;

    class View
    {
      protected $dataArray = [];

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
        ob_start();
        require sprintf ( '%s\..\..\view\%s' , __DIR__ , $template );
        $bufTemp = ob_get_contents();
        ob_end_clean();
        return $bufTemp;
      }
    }
