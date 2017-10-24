<?php

$dbhost = "localhost";
$dbuser = "id3361969_xpm";
$dbpass = "metal448833";
$dbname = "id3361969_xpm";
$display_errors = false;
$disable_admin_panel = false;

$connection_options = array(
    'disable_curl' => false,
    'local_cafile' => false,
    'force_ipv4' => false    // cURL only
);

// dsn - Data Source Name
// if you use MySQL, leave it as is
// more information:
// http://php.net/manual/en/pdo.construct.php
$dbdsn = "mysql:host=$dbhost;dbname=$dbname";
