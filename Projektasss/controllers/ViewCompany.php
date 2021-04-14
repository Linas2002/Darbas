<?php

  use Imones\Database;
  use Imones\Company;
  use Imones\Request;
  
  $connection = Database::connect();
  $companies = new Company($connection);
  $id = intval(basename(Request::uri()));
  $company = $companies->ViewCompany($id);


require 'view/pages/ViewCompany.view.php';