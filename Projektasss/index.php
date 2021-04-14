<?php

require 'vendor/autoload.php';

use Imones\Request;
use Imones\Router;

require Router::load('routes.php')->direct(Request::uri());