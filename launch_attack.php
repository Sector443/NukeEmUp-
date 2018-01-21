<?php
require 'includes/api_config.php';

for($i=0; $i<=(int)$_REQUEST["serv_count"]; $i++){
    $droplet->create('nuke' . $i, 'blr1', '512mb', 'ubuntu-16-04-x64');
    sleep(1);
}
?>