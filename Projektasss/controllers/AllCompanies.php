<?php

  use Imones\Database;
  use Imones\Company;
  use Imones\Request;
  $connection = Database::connect();
  $companies = new Company($connection);
  $page = intval(basename(Request::uri()));
  if($page == 0) $page =1;


require 'view/pages/AllCompanies.view.php';