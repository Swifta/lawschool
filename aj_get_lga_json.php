<?php

require_once 'obj/LocalGovernmentHandler.php';

$lga_handler = new LocalGovernmentHandler();

$dd = array();

$dd['data'] = $lga_handler->getLga($_REQUEST['state']);
echo json_encode($dd);

?>
