<?php 
    require_once __DIR__.DIRECTORY_SEPARATOR.'header.php';
    require_once __DIR__.DIRECTORY_SEPARATOR.'footer.php';

    interface UIFactory{
        public function create_header():Header;
        public function create_footer():Footer;
    }