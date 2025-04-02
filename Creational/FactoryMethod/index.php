<?php
    require_once __DIR__.DIRECTORY_SEPARATOR.'autoloader.php';

    /*
    $melatFactory = new MelatFactory("313.124SCS^4","SFCXS#$@^HFX",8080);
    $melat= $melatFactory->create();
    $melat->connect_to_bank();
    $melat->payment(79);
    */

    $sepahFactory = new SepahFactory("QSCTUJ*&@FFD^GE!#VX1.HG","875186541540314485");
    $sepah= $sepahFactory->create();
    $sepah->connect_to_bank();
    $sepah->payment(199);