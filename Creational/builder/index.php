<?php
     require_once __DIR__.DIRECTORY_SEPARATOR.'car-director.php';
     require_once __DIR__.DIRECTORY_SEPARATOR.'basic-car-builder.php';
     require_once __DIR__.DIRECTORY_SEPARATOR.'vip-car-builder.php';

     $director = new CarDirector();

     // Create a basic car builder

    //  $basicBuilder = new VIPCarBuilder();
     $basicBuilder = new BasicCarBuilder();
 
     // Set the builder for the director
     $director->setBuilder($basicBuilder);
 
     // Build the car
     $basiccar = $director->buildCar();
 
     // Print the car
     echo $basiccar->get_car_information();