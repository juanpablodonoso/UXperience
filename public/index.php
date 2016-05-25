<?php

include_once '../app/controllers/PublicController.php';
include_once '../app/controllers/IntranetController.php';

$page = isset($_GET['page']) ? $_GET['page']:'';
if($page == 'intranet'){
    $intranet = new IntranetController();
    $intranet->print_page();
}
else{
    $public = new PublicController();
    $public->print_page();
}

?>