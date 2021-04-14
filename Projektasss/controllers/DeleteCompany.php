<?php


use Imones\Request;
use Imones\Database;
use Imones\Company;

$connection = Database::connect();
$company = new Company ($connection);
$id = intval(basename(Request::uri()));

$company->DeleteCompany($id);