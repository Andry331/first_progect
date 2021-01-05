<?php
    function __autoload($className)
    {
      require str_replace('\\', DIRECTORY_SEPARATOR, $className).'.php';
    }
