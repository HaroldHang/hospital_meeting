<?php
    require './Models/services.php';
    function pageService ($conn, $id = null) { 
        $service = getService($conn, $id);
        $services = getServices($conn);
        require './views/_services.php';
    }