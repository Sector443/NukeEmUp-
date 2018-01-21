<?php

require 'vendor/autoload.php';
//API config
use DigitalOceanV2\Adapter\BuzzAdapter;
use DigitalOceanV2\DigitalOceanV2;
$adapter = new BuzzAdapter('');
$api = new DigitalOceanV2($adapter);
$droplet = $api->droplet();

//Example comment that how to convert array to json object for easy data parsing
//$servers = json_encode($droplet->getAll());
//echo $servers;
?>
