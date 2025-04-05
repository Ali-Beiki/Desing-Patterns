<?php
    require_once __DIR__.DIRECTORY_SEPARATOR.'ui-factory.php';

    require_once __DIR__.DIRECTORY_SEPARATOR.'phone-header.php';
    require_once __DIR__.DIRECTORY_SEPARATOR.'phone-footer.php';
    class PhoneUIFactory implements UIFactory{
        public function __construct(){
            echo "size device = 520px <br>";
        }
        public function create_header(): Header{
            return new PhoneHeader();
        }

        public function create_footer(): Footer{
            return new PhoneFooter();
        }
    }