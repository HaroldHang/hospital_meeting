<?php
    require './Models/services.php';
    function pageService ($conn, $id = null) { 
        $service = getService($conn, $id);
        require './views/_services.php';
    }