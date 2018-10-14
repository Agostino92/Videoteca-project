<?php
require_once 'SmartyConfig.php';
$smarty = SmartyConfig::configure();



$smarty->display("install.tpl");
?>
