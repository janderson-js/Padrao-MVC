<?php

    require_once "App/Core/core.php";

    require_once "App/Controller/HomeController.php";

    $template = file_get_contents('http://localhost/mini-blog/App/templete/estrutura.html');

    $core = new Core;
    $core ->start($_GET);

    echo $template;