<?php
    spl_autoload_register(function ($className){
        require __DIR__.'/'.str_replace('\\', DIRECTORY_SEPARATOR, $className).'.php';
      }
    );
