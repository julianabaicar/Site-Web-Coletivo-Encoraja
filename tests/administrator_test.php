<?php

require_once("../class/User.php");
require_once("../class/Administrator.php");
require_once("../class/Event.php");
require_once("../controller/EventController.php");
require_once("../class/Inscription.php");
require_once("../controller/InscriptionController.php");

$administrator = new Administrator(
    1,               
    "John Doe",         
    "password123",      
    "1990-01-01",
    "12931623967",     
    "admin",            
    true,               
    true,
    "john@email.com"
);

print_r($administrator);
