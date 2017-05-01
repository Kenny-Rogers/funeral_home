<?php
require_once("../../../../../includes/admin/initialize.php");

$session->logout();
redirect_to('../../index.php?page=login');

?>
