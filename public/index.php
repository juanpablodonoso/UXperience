<?php

include_once '../app/controllers/PublicController.php';

$page = isset($_GET['page']) ? $_GET['page']:'';

$public = new PublicController();

if($page == 'reserve' && isset($_REQUEST['action']) && $_REQUEST['action'] == 'store') {
    $public->store_reserve();
}

$public->print_page();


?>