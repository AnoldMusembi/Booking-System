<?php
require_once './library/config.php';
require_once './library/functions.php';

checkFDUser();

$content = 'views/dashboard.php';
$pageTitle = 'Booking System';
$script = array();

require_once 'include/template.php';
?>