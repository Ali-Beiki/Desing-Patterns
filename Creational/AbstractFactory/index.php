<?php
    require_once __DIR__.DIRECTORY_SEPARATOR.'pc-ui-factory.php';
    require_once __DIR__.DIRECTORY_SEPARATOR.'phone-ui-factory.php';

    $device ='phone';

    $device_ui_handler =  match ($device) {
         'pc'=> new PcUIFactory() ,
         'phone'=> new PhoneUIFactory() ,
    };


    echo "{$device_ui_handler->create_header()->render()} <br> {$device_ui_handler->create_footer()->render()} ";