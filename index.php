<?php
    // DIRECT ACCESS GRANTED
    define("_ACCESS", "GRANTED");
    define("CMS_ROOT", './admin/');
    require_once CMS_ROOT . "database_config.php";
    require_once CMS_ROOT . "constants.php";
    require_once CMS_ROOT . "frontend/handlers/request_handler.php";

    $request_handler = new RequestHandler();
    $request_handler->handleRequest();
?>