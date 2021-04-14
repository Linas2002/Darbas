<?php

  use Imones\Database;
  use Imones\Company;
  use Imones\Validation;
  
  if(isset($_POST['send'])) {
  $connection = Database::connect();
  $companies = new Company($connection);
  $Validation = Validation::NewCompany($_POST);
  if($Validation !=  'Klaidų nerasta') {
    foreach ($Validation as $klaida) {
      echo $klaida . '<br>';
    }
  }else {
    $companies->createCompany($_POST); 
    }
  }else {
      require 'view/pages/NewCompany.view.php';
  }

