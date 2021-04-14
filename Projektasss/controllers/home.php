<?php

  use Imones\Database;
  use Imones\Company;
  $connection = Database::connect();
  $companies = new Company($connection);

if(isset($_POST['send'])) {
    $companies->searchCompany($_POST);
} else {
require 'view/pages/home.view.php';
}