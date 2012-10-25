<?php

//Use an autoloader
require 'libs/bootstrap.php';
require 'libs/controller.php';
require 'libs/view.php';
require 'libs/model.php';

//Library
require 'libs/database.php';
require 'libs/session.php';

require 'config/paths.php';
require 'config/database.php';

$app = new Bootstrap();


?>