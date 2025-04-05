<?php 
    require_once __DIR__.DIRECTORY_SEPARATOR.'ui-factory.php';

    require_once __DIR__.DIRECTORY_SEPARATOR.'pc-header.php';
    require_once __DIR__.DIRECTORY_SEPARATOR.'pc-footer.php';
    
    class PcUIFactory implements UIFactory{
        public function __construct(){
            echo "size device = 1320px <br>";
        }
        public function create_header(): Header{
            return new PcHeader();
        }

        public function create_footer(): Footer{
            return new PcFooter();
        }
    }