<?php
    namespace models;

    class View
    {
      protected $dataArray = [];

      public function __get(string $name)
      {
          return $this->dataArray[$name];
      }
      public function __set(string $name, $value)
      {
        $this->dataArray[$name] = $value;
      }
      public function __isset(string $name)
      {
        return isset($this->dataArray[$name]);
      }
      public function setData(string $name, $value)
      {
        $this->dataArray[$name] = $value;
      }
      public function display(string $template)
      {
        include sprintf ( '%s\..\template\%s' , __DIR__ , $template );
      }
      public function render($template)
      {
        ob_start();
        require sprintf ( '%s\..\template\%s' , __DIR__ , $template );
        $bufTemp = ob_get_contents();
        ob_end_clean();
        return $bufTemp;
      }
    }
