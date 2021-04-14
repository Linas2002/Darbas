<?php

$router->define([
     '/' => 'controllers/home.php',
     '/All' => 'controllers/AllCompanies.php',
     '/imone' => 'controllers/ViewCompany.php',
     '/New-Company' => 'controllers/NewCompany.php',
     '/Delete-Company' => 'controllers/DeleteCompany.php',
     '/Edit-Company' => 'controllers/EditCompany.php',
    '404' => 'controllers/404.php' 
]);