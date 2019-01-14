<?php

require 'Session.php';

ini_set ('display_errors', true);
error_reporting(E_ALL);

$kernel = new Session();
$kernel ->run();
