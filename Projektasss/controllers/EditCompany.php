<?php

  use Imones\Request;
  use Imones\Database;
  use Imones\Company;
  use Imones\Validation;
  
  
  $connection = Database::connect();
  $companies = new Company($connection);
  $id = intval(basename(Request::uri()));
  $company = $companies->ViewCompany($id);

  if(isset($_POST['send'])) {
      $validation = Validation::NewCompany($_POST);
      if($validation != 'Klaidų nerasta') {
          foreach ($validation as $klaida) {
              echo '<h1 style="text-align: center">📢 '. $Klaida .' 📢</h1>';
          }
      } else {
          $companies->EditCompany($id, $_POST);
      }
  } else {
      require 'view/pages/EditCompany.view.php';
  }
  