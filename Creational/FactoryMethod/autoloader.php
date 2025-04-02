<?php
    class Autoloader{
        public function __construct(){
            spl_autoload_register(array($this,'autoload'));
        }

        public function autoload($class_name){
            $class_name =lcfirst($class_name);
            $full_path_class_file = __DIR__.DIRECTORY_SEPARATOR.'classes'.DIRECTORY_SEPARATOR.$class_name.'-payment.php';

            
            if (file_exists($full_path_class_file) and is_file($full_path_class_file) and is_readable($full_path_class_file)) {
                include $full_path_class_file;
            }else{
                 echo ' can\'t fond server ! '; # invalid class
                 die;
            }
        }
    }

    new Autoloader();